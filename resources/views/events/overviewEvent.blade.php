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
 
        </div>

<section class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <ul id="tabsJustified" class="nav nav-tabs nav-fill">
                <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase active ">Overview</a></li>
                <li class="nav-item"><a href="" data-target="#messages1" data-toggle="tab" class="nav-link small text-uppercase">Edit Event</a></li>
                <li class="nav-item"><a href="" data-target="#attendees" data-toggle="tab" class="nav-link small text-uppercase">Manage Attendees</a></li>
                <li class="nav-item"><a href="" data-target="#liveStats" data-toggle="tab" class="nav-link small text-uppercase">Live Stats</a></li>
            </ul>
            <br>
            <div id="tabsJustifiedContent" class="tab-content">
                <div id="profile1" class="tab-pane fade active show">
                    
              
                  <div class="row" style="margin-left:15px;margin-top:15px;">
                      <div class="col-md-12" style="color:green;"> Key Facts:</div>
                  </div>

                    <div class="row" style="margin-left:15px;margin-top:15px;">
                      <div class="col-md-3">Start Time</div>
                      <div class="col-md-9">{{$eventData->start_time }},{{$eventData->timezone }}</div>
                    </div>

                    <div class="row" style="margin-left:15px;margin-top:15px;">
                      <div class="col-md-3">Status</div>
                      <div class="col-md-9">Published</div>
                    </div>

                    <div class="row" style="margin-left:15px;margin-top:15px;">
                      <div class="col-md-3">Privacy</div>
                      <div class="col-md-9">{{$eventData->privacy_setting }}</div>
                    </div>

                    <div class="row" style="margin-left:15px;margin-top:15px;">
                      <div class="col-md-3">Set-up</div>
                      <div class="col-md-9">{{$eventData->time_duration }}</div>
                    </div>

                    <div class="row" style="margin-left:15px;margin-top:15px;">
                      <div class="col-md-3">Tickets</div>
                      <div class="col-md-9">0 tickets sold</div>
                    </div>

                    <div class="row" style="margin-left:15px;margin-top:15px;">
                      <div class="col-md-12">Registration Link</div>
                      <div class="col-md-12"><font color="#c0c0c0"><font size="2">Share this link so people can register for your event:</font></font></div>
                      <div class="col-md-10"> 
                          <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail2" name="video_link"  value="{{url('/video_chat')}}/{{encrypt($eventData->id)}}">
                          </div>
                      </div>
                      <div class="col-md-2">
                      <a class="bubble-element Link clickable-element" target="_blank" id="ME100112" 
                      href="{{url('/video_chat')}}/{{encrypt($eventData->id)}}" style="position: absolute; box-sizing: border-box; z-index: 2; height: 26px; top: 0px; white-space: pre-wrap; text-decoration: none; word-break: break-word; user-select: none; cursor: pointer; pointer-events: auto; font-family: Lato; font-size: 14px; color: rgb(0, 176, 240); text-align: right; line-height: 1; padding-top: 4px; border-radius: 0px; width: 57px; left: 1px; font-weight: normal; font-style: normal;" tabindex="0"><div class="content"><div class="fa fa-external-link"> </div>View </div></a>
                      </div>
                    </div>

                    <div class="row" style="margin-left:15px;margin-top:15px;">
                        <div class="col-md-4">Event Check-in:</div>
                          <div class="col-md-8"> <a class="bubble-element Link clickable-element" target="_blank" id="ME100112" href="{{url('/check-in')}}/{{encrypt($eventData->id)}}" style="position: absolute; box-sizing: border-box; z-index: 2; height: 26px; top: 0px; white-space: pre-wrap; text-decoration: none; word-break: break-word; user-select: none; cursor: pointer; pointer-events: auto; font-family: Lato; font-size: 14px; color: rgb(0, 176, 240); text-align: right; line-height: 1; padding-top: 4px; border-radius: 0px; width: 57px; left: 1px; font-weight: normal; font-style: normal;" tabindex="0"><div class="content"><div class="fa fa-external-link"></div>View  </div></a></div>
                      <div class="col-md-12"><font color="#c0c0c0"><font size="2">Each registered attendee is automatically sent this link to check-in on the day of the event</font></font></div>
                    </div>

                    <div class="row" style="margin-left:15px;margin-top:15px;">
                        <div class="col-md-4">Recent Registrations:</div>
                          
                      <div class="col-md-12"><font color="#c0c0c0"><font size="2">Each registered attendee is automatically sent this link to check-in on the day of the event</font></font></div>
                    </div>

                </div>
                <div id="messages1" class="tab-pane fade">
                    <div class="list-group"><a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">44</span> Message 1</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">8</span> Message 2</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">23</span> Message 3</a> <a href="" class="list-group-item d-inline-block text-muted">Message n..</a></div>
                </div>
                <div id="attendees" class="tab-pane fade">
                    <div class="list-group"><a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">44</span> Message 1</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">8</span> Message 2</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">23</span> Message 3</a> <a href="" class="list-group-item d-inline-block text-muted">Message n..</a></div>
                </div>
                <div id="liveStats" class="tab-pane fade">
                    <div class="list-group"><a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">44</span> Message 1</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">8</span> Message 2</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">23</span> Message 3</a> <a href="" class="list-group-item d-inline-block text-muted">Message n..</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

    </div>
</div>
<style>
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #fff !important;
    background-color: rgb(0, 176, 240) !important;
    border-color: rgb(0, 176, 240) !important;
}
</style>
@endsection
