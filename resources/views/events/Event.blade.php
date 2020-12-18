@extends('layouts.app')

@section('content')


   <section class="evnt_list" style="margin-top: 107PX;">
    <div class="container">
	<?php
		if(count($AllDatax)==0)
		{
			echo "No Record Found..!!!";
		}
		else
		{
		foreach($AllDatax as $AllData)
		{
		?>
		<a href="{{url('/manage-event')}}/{{encrypt($AllData->id)}}">
    <div class="row" style="border: 2px solid;margin-bottom: 18px;">
        <div class="col-lg-5 col-md-5">
            <figure class="sproduct-image">
               <img src="<?php echo url('public/images/events/'.$AllData->event_image); ?>" style="height: 200px;width: 400px;margin-top: 13px;">
	
            </figure>
        </div>
        <div class="col-lg-7 col-md-7">
            <div class="sproduct-details">
					<u><h2 class="sproduct-title"><?php echo $AllData->event_name;  ?></h2></u>
					<div class="sp-price">Time Zone: <span class="txt-red"><?php echo $AllData->timezone; ?></span></div>
					<div class="sp-price">Time Duration: <span class="txt-red"><?php echo $AllData->time_duration; ?></span></div>
					<div class="sp-price">Start Date: <span class="txt-red"><?php echo $AllData->start_date; ?></span></div>
                    <div class="sp-price">Start Time: <span class="txt-red"><?php echo $AllData->start_time; ?></span></div>
					<div class="sp-price">Organizer Name: <span class="txt-red"><?php echo $AllData->organizer_name; ?></span></div>
					<div class="sp-price">Organizer Description: <span class="txt-red"><?php echo $AllData->organizer_desc; ?></span></div>
					<div class="sp-price">Privacy Setting: <span class="txt-red"><?php echo $AllData->privacy_setting; ?></span></div>
			</div>	
		</div>
	</div>
	</a>	

<!-- END PDF SECTION -->

<?php
	}
		}
?>
  		</div>
</section>  

@endsection