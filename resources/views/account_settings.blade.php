@extends('layouts.app')

@section('content')
      <section  class="position-relative">
         <div class="container">
            <div class="row text-center text-bg">
               <div class="col-md-12">
                  <div class="">
                     <h1>Account Settings</h1>
                  </div>
                  <div class="col-md-4">Primary Email:</div>
                  <div class="col-md-8">{{Auth::user()->email}}</div>
               </div>
            </div>
         </div>
        
      </section>
 @endsection
	  
	  
	  
      