<template>
   <div class="container">

    <div class="row justify-content-center" style="margin-top: 80px;">
    <div style="margin-bottom:30px; margin-top:30px; z-index: 2; height: 478px; top: 250px; background-color: rgb(255, 255, 255); width: 761px; left: 0px;">
        <div class="col-md-12">
          <button  @click="getPermissions()">Start streaming</button>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Camera</label>
                  <select class="form-control">
                    <option
                  v-for="device in getVideoDevice"
                  v-bind:key="device.kind"
                  v-bind:value="device.label"
                >{{device.label}}</option>
                  </select>
               </div>
        </div>
         <div class="col-md-12">
            <div class="col-md-6">
                  <div class="form-group ">
                        <label for="exampleFormControlSelect1">Microphone</label>
                        <select class="form-control">
                           <option
                              v-for="audio in getAudioInput"
                              v-bind:key="audio.kind"
                              v-bind:value="audio.label"
                            >{{audio.label}}</option>
                        </select>
                     </div>
               </div>
               <div class="col-md-6">
                     <div class="form-group">
                       <canvas width="300" height="300">
  An alternative text describing what your canvas displays.
</canvas>
                     </div>
            </div>
      </div>

      <div class="col-md-12">
            <div class="col-md-6">
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Speakers</label>
                        <select class="form-control">
                           <option
                              v-for="audioOut in getAudioOutput"
                              v-bind:key="audioOut.kind"
                              v-bind:value="audioOut.label"
                            >{{audioOut.label}}</option>
                        </select>
                     </div>
            </div>
            <div class="col-md-6">
                     <div class="form-group">
                     <audio controls><source  src="http://meetme.com/public/audio/check-sound.05f349e8.mp3" type="audio/mpeg"></audio>
                     </div>

            </div>
        </div>




        </div>

    </div>
  </div>
</template>
<script>
import Pusher from 'pusher-js';
import Peer from 'simple-peer';
export default {
  props: ['user', 'others', 'pusherKey', 'pusherCluster'],
  data() {
    return {
      channel: null,
      stream: null,
      peers: {},
      status: 'default',
      getVideoDevice: [],
      getAudioInput:[],
      getAudioOutput:[]
    }
  },
  mounted() {
    this.getPermissions();

    var audioCtx = new(window.AudioContext || window.webkitAudioContext)();
    var analyser = audioCtx.createAnalyser();

    // ...

    analyser.fftSize = 2048;
    var bufferLength = analyser.frequencyBinCount;
    var dataArray = new Uint8Array(bufferLength);
    analyser.getByteTimeDomainData(dataArray);

    // Get a canvas defined with ID "oscilloscope"
    var canvas = document.getElementById("oscilloscope");
    var canvasCtx = canvas.getContext("2d");
    this.draw(dataArray );
  },
  methods: {
    startVideoChat(userId) {
      this.getPeer(userId, true);
    },
    getPermissions() {
            const vm = this;
      navigator.mediaDevices.getUserMedia({
        video: true,
        audio: true,
      }).then(() => {
          var stream =  navigator.mediaDevices.enumerateDevices()
          .then(function(devices) {

            devices.forEach(function(device) {
              if(device.kind == 'videoinput'){
                vm.getVideoDevice.push({'kind':device.kind,'label':device.label}); 
              }

              if(device.kind == 'audioinput'){
                vm.getAudioInput.push({'kind':device.kind,'label':device.label}); 
              }

               if(device.kind == 'audiooutput'){
                vm.getAudioOutput.push({'kind':device.kind,'label':device.label}); 
              }
              
              console.log(device.kind + ": " + device.label +
                          " id = " + device.deviceId);
            });


          })
          .catch(function(err) {
            console.log(err.name + ": " + err.message);
          });
      }, (err) => {
        console.log(err);
        this.status = err.message;
      });

    },
    draw() {

      requestAnimationFrame(draw);

      analyser.getByteTimeDomainData(dataArray);

      canvasCtx.fillStyle = "rgb(200, 200, 200)";
      canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

      canvasCtx.lineWidth = 2;
      canvasCtx.strokeStyle = "rgb(0, 0, 0)";

      canvasCtx.beginPath();

      var sliceWidth = canvas.width * 1.0 / bufferLength;
      var x = 0;

      for (var i = 0; i < bufferLength; i++) {

        var v = dataArray[i] / 128.0;
        var y = v * canvas.height / 2;

        if (i === 0) {
          canvasCtx.moveTo(x, y);
        } else {
          canvasCtx.lineTo(x, y);
        }

        x += sliceWidth;
      }

      canvasCtx.lineTo(canvas.width, canvas.height / 2);
      canvasCtx.stroke();
    },
    getPeer(userId, initiator) {
      if(this.peers[userId] === undefined) {
        let peer = new Peer({
          initiator,
          stream: this.stream,
          trickle: false
        });
        peer.on('signal', (data) => {
          this.channel.trigger(`client-signal-${userId}`, {
            userId: this.user.id,
            data: data
          });
        })
        .on('stream', (stream) => {
          const videoThere = this.$refs['video-there'];
          videoThere.srcObject = stream;
        })
        .on('close', () => {
          const peer = this.peers[userId];
          if(peer !== undefined) {
            peer.destroy();
          }
          delete this.peers[userId];
        });
        this.peers[userId] = peer;
      } 
      return this.peers[userId];
    },
    async setupVideoChat() {
      // To show pusher errors
      // Pusher.logToConsole = true;
      const stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
      const videoHere = this.$refs['video-here'];
      videoHere.srcObject = stream;
      this.stream = stream;
      const pusher = this.getPusherInstance();
      this.channel = pusher.subscribe('presence-video-chat');
      this.channel.bind(`client-signal-${this.user.id}`, (signal) => 
      {
        const peer = this.getPeer(signal.userId, false);
        peer.signal(signal.data);
      });
    },
    getPusherInstance() {
      return new Pusher(this.pusherKey, {
        authEndpoint: '/auth/video_chat',
        cluster: this.pusherCluster,
        auth: {
          headers: {
            'X-CSRF-Token': document.head.querySelector('meta[name="csrf-token"]').content
          }
        }
      });
    }
  }
};
</script>
<style>

</style>