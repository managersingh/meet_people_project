@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center" style="margin-top: 80px;">
        <div class="col-md-12">
              
            <div class="bubble-r-box" style="height: 195px; left: 0px; width: 1519px;">
            <div class="bubble-element Shape clickable-element" id="ME100003" tabindex="6" style="display: block; position: absolute; box-sizing: border-box; z-index: 2; height: 195px; width: 1519px; left: -191px; top: 0px; background-color: rgba(8, 8, 8, 0.4); border-radius: 0px; cursor: default;"></div>
            <div class="bubble-element 1540857498064x563539974936330200-AAC" style="position: absolute; box-sizing: border-box; z-index: 3; height: 1px; width: 1px; left: 0px; top: 0px;"></div><div class="bubble-element Group" id="ME100004" style="position: absolute; box-sizing: border-box; z-index: 5; height: 102px; width: 915px; left: 297.354px; top: 18px; border-radius: 0px;">
            <div class="bubble-r-line" style="margin-top: 0px; height: 35px;">
            <div class="bubble-r-box" style="height: 35px; left: 0px; width: 915px;">
            <div class="bubble-element Text" id="ME100005" style="position: absolute; box-sizing: border-box; z-index: 6; height: 35px; width: 915px; left: 0px; top: 0px; overflow: visible; padding-bottom: 0px; font-family: Lato; font-size: 30px; color: rgb(255, 255, 255); line-height: 1; border-radius: 0px;">
            <div class="content">{{$eventData->event_name}}</div></div></div></div>
            <div class="bubble-r-line" style="margin-top: 1px; height: 18px;">
            <div class="bubble-r-box" style="height: 18px; left: 1px; width: 915px;">
            <div class="bubble-element Text" id="ME100006" style="position: absolute; box-sizing: border-box; z-index: 7; height: 18px; width: 915px; left: 0px; top: 40px; overflow: visible; font-family: Lato; font-size: 16px; color: rgb(204, 204, 204); line-height: 1; border-radius: 0px; padding-bottom: 0px;"><div class="content">Published &nbsp;| &nbsp;12/15 @ 12:20pm GMT+0530 &nbsp;| &nbsp;0 Attendees</div></div></div></div><div class="bubble-r-line" style="margin-top: 6px; height: 36px;"><div class="bubble-r-box" style="height: 36px; left: 0px; width: 238px;"><button class="bubble-element Button clickable-element" tabindex="0" style="padding: 0px; cursor: pointer; background: none; border: none; text-align: left; display: none;"></button></div></div></div></div>
            <div class="card-body" style="margin-bottom: 12px;">
            @include('messages.flash_messages')
    
            </div>
 
        </div>

        <div class="col-md-12">
				 @include('messages.flash_messages')
          <div style="margin-bottom:30px;box-sizing: border-box; z-index: 2; height: 478px; top: 250px; background-color: rgb(255, 255, 255); border-style: solid; border-width: 1px; border-color: rgb(0, 177, 241); border-radius: 3px; width: 761px; left: 0px;">
             <div class="content col-md-12" style="color:rgb(0, 177, 241);font-weight:bold;font-size:24px;font-family:Lato;text-align:center;padding-top:1.5px;">Next Steps</div>    
              <div class="row" style="margin-left:15px;margin-top:15px;">
                <div class="col-md-1">
                    <div class="content"><div class="fa fa- fa-check " style="color:green;font-size:32px;margin-top:8px;"></div></div>
                </div>
                <div class="col-md-5" style="color:green;font-size:28px;">Create Event</div>
                <div class="col-md-6" style="font-size:18px;">Done!</div>
              </div>

              <div class="row" style="margin-left:15px;margin-top:15px;">
                <div class="col-md-1">
                    <div class="content" style="color:rgb(0, 177, 241);font-size:32px;">2</div>
                </div>
                <div class="col-md-5" style="color:rgb(0, 177, 241);font-size:28px;">Invite People</div>
                <div class="col-md-6" style="padding-left:0px;">
                  <div class="col-md-12" style="font-size:18px;">Promote Your Meetaway</div>
                  <div class="col-md-12"><font color="#c0c0c0"><font size="2">You'll see attendees' data in Meetaway once they register</font></font></div>
                
                </div>
              </div>

              <div class="row" style="margin-left:15px;margin-top:15px;">
                <div class="col-md-1">
                    <div class="content" style="color:rgb(0, 177, 241);font-size:32px;">3</div>
                </div>
                <div class="col-md-5" style="color:rgb(0, 177, 241);font-size:28px;">Attend</div>
                <div class="col-md-6"  style="padding-left:0px;">
                <div class="col-md-12" style="font-size:18px;">We'll send event reminders so you don't have to</div>
                <div class="col-md-12"><font color="#c0c0c0"><font size="2">Reminders go out 2 days and also 15 minutes before the event</font></font></div>
                </div>
              </div>

              <div class="row" style="margin-left:15px;margin-top:15px;">
                <div class="col-md-12 text-center">Want to run better meetaways?  Check out <a href="https://meetaway.com/article/running-meetaways-1520527748368x989729406325882900" target="_blank"><font color="#00B0F0">The Definitive Guide to Running Meetaways</font></a></div>
                <div class="col-md-12 text-center"><font color="#c0c0c0"><font size="2">Read Time: 2 Mins</font></font></div>
              </div>

              <div class="row" style="margin-left:15px;margin-top:15px;">
                <div class="col-md-12 text-center">Don't forget, get a ticket for yourself</div>
                <div class="col-md-12 text-center"><font color="#c0c0c0"><font size="2">Each attendee, including organizers, will need one to attend</font></font></div>
                <div class="col-md-12 text-center">
                <div class="col-md-offset-3 pull-left"></div>
                    <div class="col-md-3 pull-left">
                    <button class="bubble-element Button clickable-element" tabindex="0" id="getTicket" data-toggle="modal" data-target="#getTicketModal" style="padding: 0px; cursor: pointer; background: none rgb(255, 255, 255); border: 1px solid rgb(0, 177, 241); text-align: center; position: absolute; box-sizing: border-box; z-index: 4; height: 30px; top: 0px; font-family: Lato; font-size: 18px; color: rgb(0, 177, 241); line-height: 1.2; border-radius: 3px; transition: background 200ms ease 0s; width: 140px; left: 180px; margin-top:20px;">Get a ticket</button>
                    </div>

                    <div class="col-md-3 pull-right">
                    <a href="{{url('/overview')}}/{{encrypt($eventData->id)}}"><button class="bubble-element Button clickable-element" tabindex="0" id="ME100105" style="padding: 0px; cursor: pointer; background: none rgb(255, 255, 255); border: 1px solid rgb(34, 34, 34); text-align: center; position: absolute; box-sizing: border-box; z-index: 0; height: 30px; top: 0px; font-family: Lato; font-size: 18px; color: rgb(153, 153, 153); line-height: 1.2; border-radius: 3px; transition: background 200ms ease 0s; width: 140px; left: -200px; margin-top:20px;">Skip</button>                    
                    </div>
                    <div class="col-md-offset-3 pull-left"></div>
                </div>
              </div>


          </div>
        </div>

    </div>
</div>

<div class="modal fade" id="getTicketModal" tabindex="-1" role="dialog" aria-labelledby="getTicketModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="getTicketModalLabel">Get a free ticket for yourself</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="" id="getTicketForm">
      <div class="modal-body">
      <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                 
                     <input type="text" class="form-control" id="exampleInputEmail1" name="first_name" placeholder="First Name" value="{{Auth::user()->first_name}}">
                     <input type="hidden" name="event_id"value="{{$eventData->id}}">

               </div>
            </div>
            <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" class="form-control" id="exampleInputEmail2" name="last_name" aria-describedby="emailHelp" placeholder="Last Name" value="{{Auth::user()->last_name}}">
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail3" name="title" placeholder="Title" value="{{Auth::user()->title}}"> 
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail4" name="company" placeholder="Company" value="{{Auth::user()->company}}">
               </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
              <select class="form-control" name="ticket_name" id="ticketForMe">
                <option value="0">Type of Ticket*</option>
                @if(!empty($tickets))
                  @foreach($tickets as $ticket)

                  <option value="{{$ticket}}">{{$ticket}}</option>
                  @endforeach
                @endif
              </select>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <div class="form-group form-check">
               <input type="checkbox" class="form-check-input" name="confirmation" id="confirmation" value="1" checked>
               <label class="form-check-label" for="exampleCheck1">Send Me A Confirmation</label>
            </div>
            </div>
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="ticketSub" onclick="getTicketForYourself()">Submit Registration</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('public/front/js/jquery-3.4.1.min.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">

   
   $("#getTicketForm").validate({
               rules: {
                  first_name:"required",
                  last_name:"required",
                  title:"required",
                  company:"required",
                  ticket_name:"required",
               }
            });

         function getTicketForYourself(){
            if($("#ticketForMe").val() != 0 && $("#getTicketForm").valid())
            {

            $.ajax({
               url: "{{url('/get-ticket-for-yourself')}}",
               type: "post",
               data: {data:$("#getTicketForm").serialize()},
               dataType: "json",
               headers: {
                  "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
               },
               beforeSend: function() {
               },
               success: function(response) {console.log(response);
                  if(response.success ==  "true"){
                    window.location.href=response.message;
                     
                  }
               },
               error:function(error){
                  alert(error.message);
               }
               });
            }
         }
</script>
@endsection
