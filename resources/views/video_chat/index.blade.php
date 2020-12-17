@extends('layouts.app')
@section('content')
<section  class="position-relative">
         <div class="container">
            <div class="row text-center text-bg">
            <video-chat :user="{{ $user }}" :others="{{ $others }}" pusher-key="{{ config('broadcasting.connections.pusher.key') }}" pusher-cluster="{{ config('broadcasting.connections.pusher.options.cluster') }}"></video-chat>

            </div>
         </div>
        
      </section>

@endsection