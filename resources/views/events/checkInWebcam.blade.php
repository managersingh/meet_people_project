@extends('layouts.app')

@section('content')

<section  class="position-relative">
         <div class="container">
            <div class="row text-center text-bg">
            <web-cam :user="{{ $user }}" :others="{{ $others }}" pusher-key="{{ config('broadcasting.connections.pusher.key') }}" pusher-cluster="{{ config('broadcasting.connections.pusher.options.cluster') }}"></web-cam>

            </div>
         </div>
        
      </section>

@endsection
