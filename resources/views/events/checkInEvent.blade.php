@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center" style="margin-top: 80px;">
    <div style="margin-bottom:30px; margin-top:30px; z-index: 2; height: 478px; top: 250px; background-color: rgb(255, 255, 255); width: 761px; left: 0px;">

        <div class="col-md-12">
            <h5>WELCOME TO</h5>
        </div>
        <div class="col-md-12">
            <h3><b>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</b></h3>
        </div>
        @if(strtotime(date('g:i a',strtotime($eventData->start_time))) < strtotime(date('g:i a')))
        <div class="col-md-6 pt-4">
            This event has not started.
             It's scheduled to begin on {{date('F',strtotime($eventData->start_date))}}, 12/16 {{date('g:i a',strtotime($eventData->start_time))}} IST. Check-in will open up 30-mins before that.
        </div>
        @elseif(strtotime(date('g:i a',strtotime($eventData->start_time))) == strtotime(date('g:i a')))
        <div class="col-md-6 pt-4">
        You'll be matched in real-time for 3 conversations lasting minutes each. Let's get you setup.
        </div>
        @else
        <div class="col-md-6 pt-4">
        This event has been expired.
             It's scheduled to begin on {{date('F',strtotime($eventData->start_date))}}, 12/16 {{date('g:i a',strtotime($eventData->start_time))}} IST. Check-in will open up 30-mins before that.
        </div>
        
        @endif

    
           <div class="col-md-12" style="padding-top:15px;">
           <button class="btn btn-success sc-FQuPU ftpnts sc-jGkVzM bybthy" style="background-color:green;">Choose Who You Meet</button>
           <button class="btn btn-secondary sc-FQuPU ftpnts sc-jGkVzM bybthy">Return Home</button>
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
