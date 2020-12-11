<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success','Logged out successfully.');
    }

    public function editProfile(Request $request)
    {
        try{
            $myValue=  array();
            parse_str($request->data, $myValue);
            $data = $myValue;

            $user = User::where('id',Auth::user()->id)->first();
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->title = $data['title'];
            $user->company = $data['company'];
            $user->city = $data['city'];
            $user->short_bio = $data['short_bio'];
            if($user->save()){
                $response['success'] = true;
                $response['message'] ='Profile updated successfully';
                return response()->json($response);
            }else{
                $response['success'] ='error';
                $response['message'] ='Something went wrong.';
                return response()->json($response);
            }
        }catch(Exception $error){
            $response['success'] ='error';
            $response['message'] ='Something went wrong.';
            return response()->json($response);
        }

    }

    public function uploadImage(Request $request)
    {
        try{
            if($request->hasFile('file')) {
                $image = $request->file('file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/uploads');
                $image->move($destinationPath, $name);
            }
            $user = User::where('id',Auth::user()->id)->first();
            $user->image = $name;
            if($user->save()){
                $response['success'] = true;
                return response()->json($response);
            }else{
                $response['success'] ='error';
                return response()->json($response);
            }
        }catch(Exception $error){
            $response['success'] ='error';
            return response()->json($response);
        }

    }
}
