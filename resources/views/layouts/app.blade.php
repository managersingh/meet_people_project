<html>
   <head>
      <title>Meet Away</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
	  <link rel="stylesheet" href="{{ asset('public/front/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="{{ asset('public/front/css/owl.carousel.min.css') }}">
	  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
     <script src="{{ asset('public/js/app.js') }}" defer></script>

     <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
	  <style>
 
         button:focus {
         outline: none!important;
         }
         .button-box p {
         font-size: 14px;
         position: relative;
         top: 4px;
         color: #fff;
         }
         .button-box {
         background-image: url('public/front/images/bg-icon-2.png');
         background-position: center;
         background-size: contain;
         background-repeat: no-repeat;
         margin: auto;
         height: 33px;
         }
         .box-shadow1 {
         box-shadow: 0px 4px 8px #ccc;
         }
    
         .box-shadow1 h2 {
         font-size: 18px;
         font-weight: 700;
         text-align: center;
         margin-top: 15px;
         }
         .button-box {
         text-align: center;
         }
         .circle-image img {
         width: 50px;
         height: 50px;
         border-radius: 50%;      		
         }
         .test-img {
         width: 60px;
         height: 60px;
         border-radius: 50%;
         box-shadow: 0px 4px 10px #ccc;
         display: inline-block;
         text-align: center;
         }
         .circle-image h3 {
         font-size: 22px;
         font-weight: 700;
         position: relative;
         left: 20px;
         top: 10px;
         }
         .checked {
         color: #f5b011;
         }
         img.com-img {
         width: 100%;
         height: auto;
         }
         section#footer h6 {
         color: #fff;
         font-weight: 800;
         }
         section#footer hr {
         margin-left: 0px;
         }
         section#footer a {
         color: #fff;
         }
         i.fa.fa-hand-o-right {
         margin-right: 5px;
         }
         .tm-footer-logo img {
         margin-bottom: 20px;
         }
         section#footer ul {
         padding: 0px;
         list-style: none;
         }
         input.form-control {
         border-radius: 0px;
         }
         section#footer .btn-theme-bx {
         margin-top: 10px;
         }
         i.fa.fa-facebook {
         background: #366db1;
         }
         i.fa.fa-linkedin {
         background: #007ab9;
         }
         i.fa.fa-twitter {
         background: #02b1ec;
         }
         i.fa.fa-youtube {
         background: #f12f2f;
         }
         i.fa.fa-google-plus {
         background: #f44336;
         }
         ul.tm-footer-social-icon i {
         width: 30px;
         height: 30px;
         background: #fff;
         text-align: center;
         border-radius: 50%;
         padding-top: 7px;
         color: #fff;
         }
         section#footer p {
         color: #fff;
         }
         ul.tm-footer-social-icon {
         list-style: none;
         text-align: left;
         }
         ul.tm-footer-social-icon li {
         display: inline-block;
         margin: 0px 5px;
         }
         a:hover {
         text-decoration: none!important;
         }
         .panel-heading .accordion-toggle:after {
         /* symbol for "opening" panels */
         font: normal normal normal 14px/1 FontAwesome;
         content: "\f068 ";    /* adjust as needed, taken from bootstrap.css */
         float: right;        /* adjust as needed */
         color: grey;         /* adjust as needed */
         }
         .panel-heading .accordion-toggle.collapsed:after {
         /* symbol for "collapsed" panels */
         content: "\f067";    /* adjust as needed, taken from bootstrap.css */
         }
         .panel.panel-default {
         /* border: 1px solid #0f5ba9; */
         box-shadow: 0px 1px 4px #0f5ba9bf;
         margin-top: 15px;
         padding: 10px;
         }
        
         .image-faq img {
         width: 100%;
         border-top-right-radius: 100px;
         border-bottom-left-radius: 100px;
         }
         .image-faq {
         width: 400px;
         margin: auto;
         }
         .viewall-boxs.position-relative {
         width: 180px;
         background: #fff;
         padding: 15px;
         border-radius: 50px;
         margin-left: auto;
         margin-right: auto;
         }
         
         .circle-image {
         padding-left: 35px;
         padding-bottom: 65px;
         background:#fff;
         }
        
         div#myCarousel .col-lg-4.col-md-6 {
         padding: 0px;
         }
        
         .viewall-box.position-relative {
         width: 180px;
         background: #fff;
         padding: 15px;
         border-radius: 50px;
         margin-left: auto;
         margin-right: auto;
         margin-top: 30px;
         box-shadow: 0px 4px 10px #ccc;
         }
         .viewall-box.position-relative a {
         color: #326bb0;
         }
         i.fa.fa-long-arrow-right.icon2 {
         width: 40px;
         height: 40px;
         color: #fff;
         background: #326bb0;
         border-radius: 50%;
         text-align: center;
         padding-top: 11px;
         position: absolute;
         right: 8px;
         top: 7px;
         }
         .events-box h2 {
         font-size: 18px;    
         }
         .events-box {
         padding: 10px;
         height: 80px;
         }
         .icons1 i {
         margin-right: 5px;
         color: #326bb0;
         }
         .icons1 {
         display: flex;
         padding: 10px;
         font-size: 14px;
         }
         .calendar, .clock {
         width: 50%;
         }
         .net-heading h2 {
         font-weight: 400;
         letter-spacing: 1.5px;
         }
         span.span-head {
         font-weight: 800;
         }
         
         footer.tm-footer {
         padding-top: 60px; 
         }
         .tm-copyright {
         padding: 1px;
         }
         
         .net-heading {
         margin-bottom: 35px;
         }
         .comm-text {
         text-align: center;
         padding: 5px;
         }
         .btn-theme-bx {
         text-align: center;
         width: 100%;
         background: #326bb0;
         padding: 8px;
         }
         .btn-theme-bx a {
         color: #fff;
         }
         hr.border-blue-1 {
         height: 5px;
         background: #326bb0;
         width: 80px;
         margin-left: auto;
         margin-right: auto;
         margin-top: 10px;
         margin-bottom: 2px;
         }
         hr.border-blue-2 {
         height: 2px;
         background: #326bb0;
         width: 80px;
         margin-left: auto;
         margin-right: auto;
         margin-top: 0px;
         }
         .comm-text h2 {
         font-size: 18px;
         font-weight: 700;
         text-align: center;
         margin-top: 12px;
         }
         .box-shadow {
         box-shadow: 0px 4px 10px #ccc;
         background:#fff;
         }
         section#network_section1 {
         padding: 60px 0px;
         }
         form.search-form {
         margin-top: 40px;
         }
 
         .text-center.text-bg {
         margin-top: 150px;
         margin-bottom: 100px;
         }
         input.form-control.form-new {
         width: 400px;
         height: 50px;
         border-radius: 0px;
         display: inline-block;
         }
         a.btn-theme {
         padding: 15px 25px;
         background: #326bb0;
         color: #fff;
         }
         section#network_section1 h1 {
         font-size: 62px;
         color: #fff;
         font-weight: 300;
         letter-spacing: 1.5px;
         }
         span.text-bold {
         font-weight: 700;
         }
         header.header {
         background: #000000a6;
         width: 100%;
         position: absolute;
         left: 0;
         top: 0;
         z-index: 9999;
         right: 0;
         }
         .header-nav {
         width: 80%;
         margin: auto;
         }
         ul.nav-list li {
         list-style: none;
         display: inline-block;
         text-align: right;
         }
         .navbar-nav {
         width: 100%;
         }
         ul.nav-list {
         width: 100%;
         text-align: right;
         }
         ul.nav-list li a {
         color: #fff!important;
         }
         a.nav-item.nav-link.btn-nav-ink {
         background: #326bb0;
         border-radius: 50px;
         padding: 7px 15px;
         position: relative;
         width: 180px;
         text-align: left;
         }
		 
		 
		 a.nav-item.nav-link.btn-nav-ink.loginfront {
         background: #326bb0;
         border-radius: 50px;
         padding: 7px 15px;
         position: relative;
         width: 100px;
         text-align: left;
         }

         i.fa.icon1 {
         background: #fff;
         height: 30px;
         width: 30px;
         border-radius: 90px;
         text-align: center;
         color: #326bb0;
         padding: 7px;
         position: absolute;
         right: 5px;
         top: 4px;
         }
         section#network_section1 {
         background-image: url('public/images/cnsoon.jpeg');
         background-position: center;
         background-size: cover;
         background-repeat: no-repeat;
		 height:83%;
		 margin-top: 80px;
         }
		 .hide{
          display:none !important;
       }
      </style>
      
   </head>
   <body>
   <div  id="app">
      <header class="header">
         <div class="header-nav">
            <nav class="navbar navbar-expand-md navbar-light bg-color1">
               <div class="logo">
                  <a href="{{url('/')}}" class="navbar-brand"><img src="<?php echo url('public/front/images/logo1.png'); ?>" style="height: 54px;
    width: 258px;"></a>
               </div>
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav">
                     <ul class="nav-list">
                        <li><a href="{{url('/')}}" class="nav-item nav-link active">HOME</a></li>
						<li><a href="#" class="nav-item nav-link">TESTIMONIAL</a></li>
                        <li><a href="{{url('contactUs')}}" class="nav-item nav-link">CONTACT US</a></li>
                        @if(Auth::check())
						<li><a href="{{url('/add-event')}}">EVENT</a></li>
                        <li><a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#editModal">EDIT PROFILE</a></li>
                        <li><a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#feedbackModal">SEND FEEDBACK</a></li>
						<li><a href="{{url('/list-event')}}">SHOW_EVENT</a></li>
                        <li><a href="{{url('/logout')}}" class="nav-item nav-link">Logout</a></li>
                              @else
                              <li><a href="{{url('/register')}}" class="nav-item nav-link btn-nav-ink">Create a Profile<span class="btn-bg"><i class="fa fa-long-arrow-right icon1"></i></span></a></li>
                              <li><a href="{{url('/login')}}" class="nav-item nav-link btn-nav-ink loginfront">Login<span class="btn-bg"><i class="fa fa-long-arrow-right icon1"></i></span></a></li>
                              @endif
                     
					</ul>
                  </div>
               </div>
            </nav>
         </div>
      </header>

@yield('content')


<section id="footer">
        
            <div class="tm-copyright" style="background: #000000a6;">
               <div class="container">
                  <div class="text-center">
                     <p class="demo">© 2020 Meet Away Website. All rights reserved.</p>
                  </div>
               </div>
            </div>
      
      </section>
      </div>
     <!-- Edit Modal -->
@if(Auth::check())
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="" id="editProfileForm">
      <div class="modal-body">
         <div class="row">
               <div class="form-group">
                  <input name="userImage" id="userImage" type="file" class="inputFile" />
               </div>
        </div>
        <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                 
                     <input type="text" class="form-control" id="exampleInputEmail1" name="first_name" placeholder="First Name" value="{{Auth::user()->first_name}}">
                 
               </div>
            </div>
            <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" class="form-control" id="exampleInputEmail2" name="last_name" aria-describedby="emailHelp" placeholder="Last Name" value="{{Auth::user()->last_name}}">
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail3" name="title" placeholder="Title" value="{{Auth::user()->title}}"> 
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail4" name="company" placeholder="Company" value="{{Auth::user()->company}}">
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail5" name="city" placeholder="Your City" value="{{Auth::user()->city}}">
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
               <div class="form-group">
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_bio" placeholder="Short Bio">{{Auth::user()->short_bio}}</textarea>
               </div>
            </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registerUser()">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@else
@endif
@if(Auth::check())
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="feedbackModalLabel"><span id="userName">{{Auth::user()->first_name}},</span>what's on your mind?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="" id="feedbackForm">
      <div class="modal-body">

        <div class="row">
            <div class="col-md-12">
               <div class="form-group">
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message" placeholder="Let us know..."></textarea>
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <div class="form-group form-check">
               <input type="checkbox" class="form-check-input" name="make_anonymous" id="makeAnonymous" value="0">
               <label class="form-check-label" for="exampleCheck1">Make Anonymous</label>
            </div>
            </div>
        </div>



      </div>
      <div class="modal-footer">
         
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="feedbackSub" onclick="sendFeedback()">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
@else
@endif
<script src="{{asset('public/front/js/jquery-3.4.1.min.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

	  <script src="{{ asset('public/front/js/bootstrap.min.js') }}"></script>
	  <script src="{{ asset('public/front/js/owl.carousel.js') }}"></script>
      <script type="text/javascript">
         $('.owl-carousel2').owlCarousel({
            loop:true,
            margin:10,
            dots:false,
            nav:true,
            autoplay:true,   
            smartSpeed: 3000, 
            autoplayTimeout:7000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
         })
         
         $('.owl-carousel1').owlCarousel({
            loop:true,
            margin:10,
            dots:false,
            nav:true,
            autoplay:true,   
            smartSpeed: 3000, 
            autoplayTimeout:7000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
         });
                  // This function deals with validation of the form fields
            $("#editProfileForm").validate({
               rules: {
                  first_name:"required",
                  last_name:"required",
                  title:"required",
                  company:"required",
                  city:"required",
               }
            });
            
            $("#userImage").change(function(e){
            var file = e.target.files[0];
            
               var form_data = new FormData();
               form_data.append('file', file);

               for (var key of form_data.entries()) {
                  console.log(key[0] + ', ' + key[1]);
               }
               $.ajax({
               url: "{{url('/upload-image')}}",
               type: "post",
               processData: false,
               contentType: false,
               cache: false,
               data: form_data,
               enctype: 'multipart/form-data',
               headers: {
                  "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
               },
               beforeSend: function() {
               },
               success: function(response) {
                  if(response.success ==  true){
console.log('image uploaded');
                     
                  }
               },
               error:function(error){
                  alert(error.message);
               }
               });

               
            })
         //Save profile info into DB
         function registerUser(){
            if($("#editProfileForm").valid())
            {

            $.ajax({
               url: "{{url('/edit-profile')}}",
               type: "post",
               data: {data:$("#editProfileForm").serialize()},
               dataType: "json",
               headers: {
                  "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
               },
               beforeSend: function() {
               },
               success: function(response) {
                  if(response.success ==  true){
                     $("#editModal").modal('hide');
                        alert(response.message);
                     
                  }
               },
               error:function(error){
                  alert(error.message);
               }
               });
            }
         }
         //To make feedback anonymous
         $("#makeAnonymous").click(function(){
            if ($(this).is(':checked')) {
                  $("#feedbackSub").text('Submit Anonymously');
                  $("#userName").addClass('hide');
                  $(this).val(1);
            }else{
               $("#feedbackSub").text('Submit');
               $("#userName").removeClass('hide');
               $(this).val(0);
            }
         });
         $("#feedbackForm").validate({
               rules: {
                  message:"required",
               }
            });
         //save feedback info into DB
         function sendFeedback(){
            if($("#feedbackForm").valid())
            {

            $.ajax({
               url: "{{url('/send-feedback')}}",
               type: "post",
               data: {is_anonymous: $("#makeAnonymous").val(),data:$("#feedbackForm").serialize()},
               dataType: "json",
               headers: {
                  "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
               },
               beforeSend: function() {
               },
               success: function(response) {
                  if(response.success ==  true){
                     $("#feedbackForm").find('.modal-body').html('');
                     $("#feedbackModal").find('.modal-title').html('');
                     $("#feedbackForm").find('.modal-body').html(response.message);
                     $("#feedbackForm").find('.modal-body').addClass('text-center');
                     $("#feedbackForm").find('.modal-footer').html('');
                  }
               },
               error:function(error){
                  alert(error.message);
               }
               });
            }
         }


      </script>
	    <script>
    $(document).ready(function(){
      //Remove flash message
        setTimeout(function() {
            $('#successMessage').fadeOut('slow');
            $('#errorMessage').fadeOut('slow');
            $("#displayErrorMessage").fadeOut('slow');
        }, 5000); // <-- time in milliseconds
      });
  </script>
    <script>
    $(document).ready(function(){
      //Remove flash message
        setTimeout(function() {
            $('#successMessage').fadeOut('slow');
            $('#errorMessage').fadeOut('slow');
            $("#displayErrorMessage").fadeOut('slow');
        }, 5000); // <-- time in milliseconds
      });
  </script>
   </body>



</html>