@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center" style="margin-top: 42px;">
        <div class="col-md-8">
					<div class="web-form mt-5">
                       <h2 class="themebg text-white p-3 text-center">Create Event</h2>

                <div class="card-body" style="margin-bottom: 12px;">
				 @include('messages.flash_messages')
				 
            <form method="post" action="{{url('add-event')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						{{ method_field('post') }}
                 <span style="color:rgb(0, 177, 241);font-size: 18px;"><u><b>(1) Event Details<b></u></span>
              <div class="box-body">
			  
                <div class="form-group">
                  <br><label for="title">Enter Title</label>
                  <input type="text" name="event_name" class="form-control" id="event_name" placeholder="Enter title" required="required">
                </div>
				
				
				
				<div class="form-group">
                  <label for="title">Start Date</label>
                  <input type="date" name="s_date" class="form-control" id="s_date" min="<?php echo date('Y-m-d'); ?>" required="required">
                </div>
				
				<div class="form-group">
                  <label for="title">Start Time</label>
                  <input type="time" name="s_time" class="form-control" id="s_time" required="required">
                </div>
				
				<div class="form-group">
                  <label for="title">Time Zone</label>
                  <select class="form-control" name="timezone" required>
				  <option value="">Select Time Zone</option>
				  <option value="America Central Time">America Central Time</option>
				  <option value="Australia- Sydney">Australia- Sydney</option>
				  <option value="Asia- Chennai">Asia- Chennai</option>
				  <option value="Asia- Mumbai">Asia- Mumbai</option>
				  <option value="Asia- Kolkata">Asia- Kolkata</option>
				  <option value="Europe- Volgograd">Europe- Volgograd</option>
				  </select>
                </div>
				
				<div class="form-group">
                  <label for="title">Duration</label>
                  <select class="form-control" name="duration" required>
				  <option value="">Select Time Duration</option>
				  <option value="10 Min">10 Min</option>
				  <option value="15 Min">15 Min</option>
				  <option value="20 Min">20 Min</option>
				  <option value="30 Min">30 Min</option>
				  <option value="45 Min">45 Min</option>
				  <option value="60 Min">60 Min</option>
				  </select>
                </div>
				
				
				<span style="color:rgb(0, 177, 241);font-size: 18px;"><u><b>(2) Event Format<b></u></span> 
				<div class="form-group">
				<br><label for="title">Rotations</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<br><span style="font-weight: 400;">Attendees will have 5 mins to check-in for the event.  Then, they will talk 1-on-1 with --- other attendees for --- mins each which means they'll finish by ---
				  New: Add matching tags to your meetaway after you save or publish it.</span>
                </div>
				
				
				 
				<span style="color:rgb(0, 177, 241);font-size: 18px;"><u><b>(3) Event Messaging<b></u></span>
				<div class="form-group">
                 <br>
				 <a href=""><img src="<?php echo url('public/images/s1.jpg'); ?>" style="height: 100px;width: 200px;"></a>&nbsp;&nbsp;&nbsp;
				 <a href=""><img src="<?php echo url('public/images/s2.jpg'); ?>" style="height: 100px;width: 200px;"></a>&nbsp;&nbsp;&nbsp;
				 <a href=""><img src="<?php echo url('public/images/s3.jpg'); ?>" style="height: 100px;width: 200px;"></a>&nbsp;&nbsp;&nbsp;
				 <a href=""><br><br><img src="<?php echo url('public/images/s4.jpg'); ?>" style="height: 100px;width: 200px;"></a>&nbsp;&nbsp;&nbsp;
				 <a href=""><img src="<?php echo url('public/images/s6.jpg'); ?>" style="height: 100px;width: 200px;"></a>&nbsp;&nbsp;&nbsp;
				 <a href=""> <img src="<?php echo url('public/images/s7.jpg'); ?>" style="height: 100px;width: 200px;"></a>&nbsp;&nbsp;&nbsp;
				 <a href=""> <br><br><img src="<?php echo url('public/images/s8.jpg'); ?>" style="height: 100px;width: 200px;"></a>&nbsp;&nbsp;&nbsp;
				 <a href=""><img src="<?php echo url('public/images/s9.jpg'); ?>" style="height: 100px;width: 200px;"></a>
				 <input type="file" name="photo" style="height: 100px;width: 200px;" required="required"/>
                </div>	
				
                <div class="form-group">
                  <label for="title">Enter Description</label>				  
				  <textarea class="ckeditor form-control" id="desc" name="desc" required="required" ></textarea>  
                </div>
				
				
				<div class="form-group">
                  <label for="title">Organizer</label>	
				  <input type="text" name="org_name" class="form-control" id="org_name" Placeholder="Organizer Name" required="required"><br>				  
				  <textarea class="form-control" id="org_desc" name="org_desc" Placeholder="Organizer Brief Description" required="required" ></textarea>  
                </div>				

				 
               	<div class="form-group">
                  <label for="title">Privacy Setting</label>
                  <select class="form-control" name="privacy_setting" required>
				  <option value="">Select Privacy Setting</option>
				  <option value="Public">Public</option>
				  <option value="Private">Private</option>
				  <option value="Semi-Private">Semi-Private</option>
				  </select>
                </div>

				<span style="color:rgb(0, 177, 241);font-size: 18px;"><u><b>(4) Ticket<b></u></span>
				<br><p style="font-weight: 400;">Which type of ticket would you like to start with?</p>
				
				    <div class="form-group row">
                        <div class="col-md-12">
                       
                            <div id="ticket_counter"></div>
                            <div class="row">
                               
                                <div class="input-group-btn">
                                  <button class="btn btn-success" type="button" onclick="ticket_counter();"> 
                                    &nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true">&nbsp;Free Ticket</i>
                                  </button>
								  
								 <button class="btn btn-success" type="button" onclick="ticket_counter();"> 
                                    &nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true">&nbsp;Paid Ticket</i>
                                  </button>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div> 
                    </div>
       
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
         		<center><button type="submit" class="btn btnlog btn-primary">
                                    {{ __('Save & Publish Event') }}
                </button></center>
              </div>
          </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

<script type="text/javascript">
      var room = 1;
function ticket_counter() {
 
    room++;
    var objTo = document.getElementById('ticket_counter')
    var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
  var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="row"><div class="col-sm-6 nopadding"><div class="form-group"> <input type="text" class="form-control" id="tickets" name="tickets_name[]" value="" placeholder="Ticket Name"></div></div><i class="fa fa-dollar" style="margin-top: 8px;font-size: 18px;"></i><div class="col-sm-4 nopadding" style="padding-left: 0px"><div class="form-group"><input type="number" class="form-control" id="tickets" name="tickets_price[]" value="" placeholder="Ticket Price"></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="ticket_counter_remove('+ room +');"> <i class="fa fa-close" aria-hidden="true"></i> </button></div><div class="clear"></div></div>';
    
    objTo.appendChild(divtest)
}
   function ticket_counter_remove(rid) {
     $('.removeclass'+rid).remove();
   }
</script>
@endsection
