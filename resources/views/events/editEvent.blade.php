@extends('layouts.admin.adminLayout')

@section('dashboardContent')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
      <h1>
        Edit Events
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit Events</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-md-offset-3">
          <!-- general form elements -->
          <div class="box box-primary p1020">
           
            <!-- /.box-header -->
            <!-- form start -->
            @include('messages.flash_messages')
            {!! Form::open(['url'=>'admin/event/edit', 'class'=>'', 'id' =>'event_update','files'=>true]) !!}
            {!! Form::hidden('idx', $events->id, ['class'=>'form-control']) !!}
            {!! Form::hidden('old_image', $events->image, ['class'=>'form-control old_image']) !!}

			
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Edit Name</label>
                  {!! Form::text('event_name', $events->event_name, ['placeholder'=>'Edit name', 'class'=> 'form-control']) !!}
                </div>
                <div class="form-group">
                  <label class="btn-bs-file btn btn-primary">Upload Image
                    <input type="file" name="photo" onchange="readURL(this);"/>
                  </label>
                  <img src="{{ url('/photo_gallery/courses') }}/{{ $events->image }}" alt="{{$events->event_name}}" id="photoId" width="150" />
                </div>
        
				
				
								

				
				
			<div class="form-group">
                  <label>Event City</label>
                  <select class="form-control" name="eventCity" id="eventCity" required="required">
                    @foreach($eventcitydata as $singlecity)
                     <option value="{{ $singlecity->id }}" @if(!empty($events->city) && $singlecity->id == $events->city) selected @endif>{{ $singlecity->city_name }}</option>                      
                      @endforeach
                  </select>
                </div>

				
				<div class="form-group">
                  <label for="title">Start Date</label>
                  <input type="date" name="s_date" value="<?php 
				  
				   if($events->start_date)
				  {
					   $new_date =date("Y-m-d", strtotime($events->start_date));
				  }
				  else
				  {
					   $new_date =$events->start_date;
				  }
				  
				 
				  echo $new_date;
			
				  ?>" class="form-control" id="s_date" min="<?php echo date('Y-m-d'); ?>">
                </div>

				<div class="form-group">
                  <label for="title">Start Time</label>
                  <input type="time" name="s_time" class="form-control" id="s_time" value="<?php echo $events->start_time;?>" required="required">
                </div>


                <div class="form-group">
                  <label for="title">Enter Price</label>
                  <input type="number" name="price" class="form-control" min="0" id="price" placeholder="Enter Price" value="<?php echo $events->price;?>" required="required">
                </div>
           
				<div class="form-group">
                  <label for="title">Total Seats</label>
                  <input type="number" name="total_seat" class="form-control" min="0" id="total_seat" value="<?php echo $events->total_seat;?>" placeholder="Enter Total Seats" required="required">
                </div>

				<div class="form-group">
                  <label for="title">End Date</label>
                  <input type="date" name="e_date" value="<?php 
				  
				   if($events->end_date)
				  {
					   $new_date =date("Y-m-d", strtotime($events->end_date));
				  }
				  else
				  {
					   $new_date =$events->end_date;
				  }
				  
				 
				  echo $new_date;
				  
				  
				  
				  
				  
				  ?>" class="form-control" id="e_date" min="<?php echo date('Y-m-d'); ?>">
                </div>
				
				<div class="form-group">
                  <label for="title">End Time</label>
                  <input type="time" name="e_time" class="form-control" id="e_time" value="<?php echo $events->end_time;?>" required="required">
                </div>

				
                <div class="form-group">
                  <label for="title">Enter Description</label>
				<textarea class="ckeditor form-control" id="event_desc" name="event_desc">{{$events->event_desc}}</textarea> 
				</div>
				

				
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	{!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
              </div>
            {!! Form::close() !!}
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @push('scripts')
  <script>
    $(document).ready(function(){
      //Remove flash message
        setTimeout(function() {
            $('#successMessage').fadeOut('slow');
            $('#errorMessage').fadeOut('slow');
            $("#displayErrorMessage").fadeOut('slow');
        }, 5000); // <-- time in milliseconds
      });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photoId')
                    .attr('src', e.target.result)
                    .width(150)
                    .height("auto");
            };
            $("#photoId").css("display","block");
            reader.readAsDataURL(input.files[0]);
        }
    }
  </script>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

  @endpush
@endsection