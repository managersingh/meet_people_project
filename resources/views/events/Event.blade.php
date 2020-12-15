@extends('layouts.admin.adminLayout')

@section('dashboardContent')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event Listing
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Event Listing</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              @include('messages.flash_messages')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatableJs">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Image</th>
				  <th>City</th>
                  <th>Price</th>
				  <th>Start Date</th>
				  <th>Total Seat</th>
				  <th>End Date</th>
                  <th>Description</th>  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @if(count($AllData)>0) 
               @php($i=0)
               @foreach($AllData as $courseData)
               @php($i++)  
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$courseData->event_name}}</td>
                  <td><img src="{{ url('/photo_gallery/events') }}/{{ $courseData->image }}" alt="{{$courseData->event_name}}" height="70px" width="70px"></td>
                   <td>{{ $courseData->cityname }}</td>
				   <td>{{ $courseData->price }}</td>
				  <td>				 <?php
				 $new_date1 =date("Y-m-d", strtotime($courseData->start_date));
				 echo $new_date1;
				 
				 ?></td>
			
				<td>
				  <?php 
				  if($courseData->total_seat=='')
				  {
					  echo "--NA--";
				  }
				  else
				  {
					 echo $courseData->total_seat; 
				  }
				  ?>
				</td>
				
				 <td>
				 <?php
				 $new_date =date("Y-m-d", strtotime($courseData->end_date));
				 echo $new_date;
				 
				 ?>
				 
				</td>
				
				
				
				
                  <td><?php 
				  
				  				 
				  if($courseData->event_desc=='')
				  {
					  echo "--NA--";
				  }
				  else
				  {
					 echo strlen($courseData->event_desc) > 50 ? substr($courseData->event_desc,0,50)."..." : $courseData->event_desc;; 
				  }

				   ?></td>
			
                  <td><a href="{{url('admin/event/edit?id='.$courseData->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;&nbsp;
                  <a href="{{url('admin/event/delete?id='.$courseData->id)}}" onclick="return confirm('Are you sure delete this?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></i></a></td>
                </tr>
               @endforeach
               @else
                <tr><td>No data found</td></tr>
              @endif
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @push('stylesheet')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
 @endpush
 @push('scripts')
 <!-- DataTables -->
<script src="{{ asset('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(document).ready(function(){
      //Remove flash message
        setTimeout(function() {
            $('#successMessage').fadeOut('slow');
            $('#errorMessage').fadeOut('slow');
            $("#displayErrorMessage").fadeOut('slow');
        }, 5000); // <-- time in milliseconds
      });
    //Data table
    $(function () {
      $('.datatableJs').DataTable({"bSort": true,"pageLength": 50});
    });
  </script>
@endpush
@endsection