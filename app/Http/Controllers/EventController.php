<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Auth;
use Image;
use DB;
use Validator;
use App\Common;
use App\User;
use App\Events;
use Session;
use Redirect;
use Helpers;

class EventController extends Controller
{

/* Add Event Section */

    public function addEvent(Request $request)
    {
       $title = "Add Event";
	   if ($request->isMethod('post')) {
		$photo = $request->file('photo');
        $eventName = $request->event_name;
		$s_date = $request->s_date;
		$s_time = $request->s_time;
		$duration = $request->duration;
		$timezone = $request->timezone;
        $desc = $request->desc;
        $org_name = $request->org_name;
		$org_desc = $request->org_desc;
		$privacy_setting = $request->privacy_setting;

		$rules = array(
            'event_name' => 'required',
            'photo' => 'required',
			's_date' => 'required',
			's_time' => 'required',
			'duration' => 'required',
			'timezone' => 'required',
			'org_name' => 'required',
			'org_desc' => 'required',
            'privacy_setting' => 'required'
			);
		$validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect()->back()->withErrors($validator);
        }
         else{
            
			$image = $request->photo;
            $imageName = date('His').time().$photo->getClientOriginalName();
            $destinationPath = public_path('/images/events/');
			$image->move($destinationPath, $imageName);
          
            $eventData = array(
                'event_name' => $eventName,
                'event_image' => $imageName,
                'timezone' => $timezone, 
                'event_desc' => $desc,
				'time_duration' => $duration,				
				'start_date' => $s_date,
				'start_time' => $s_time,
				'organizer_name' => $org_name, 
				'organizer_desc' => $org_desc,
				'privacy_setting' => $privacy_setting,	
            );
			
			$eventRes = Events::create($eventData);
			$eventID=$eventRes->id;
			if(!empty($request->tickets_name))
			{
				    $tickets_status_data = $request->tickets_status;
					$tickets_name_data = $request->tickets_name;
					$tickets_price_data = $request->tickets_price;
					$free_tickets = array_combine($tickets_name_data, $tickets_price_data);
					$i=0;
					foreach($free_tickets as $key => $value)
					{ 
					   $eventTicket = array(
					   'event_id' => $eventID,
					   'ticket_name' => $key,
					   'ticket_price' => $value,
					   'ticket_status' => $tickets_status_data[$i]				   
					);
					
					$i++;
					  $eventTicketRecord = Common::insertData('events_tickets',$eventTicket);
					}
		
			}
		
            if($eventRes){
                Session::flash('success', 'Event Added Successfully!');
                return redirect::back();
            }else{
                Session::flash('error', 'Event Addition failed!');
                return redirect::back();
            }
	   }
	}
	   else
	   {
			return view('events.addEvent', compact('title'));
	   }
	}

	
	public function EventShow(){
       $AllDatax = Events::All();
	   
       return view('events.Event', compact('AllDatax'));
    }
	
	
	

    
}
