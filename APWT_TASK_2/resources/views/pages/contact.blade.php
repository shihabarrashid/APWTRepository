@extends('layouts.app')

@section('content')       
       <div>
            <section class="container map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.772451467684!2d91.80787491532378!3d22.362219246294476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8f2fee3765b%3A0x83c9caa00d7ba169!2sAmerican%20School%20Chattogram!5e0!3m2!1sen!2sbd!4v1627987165682!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>

            <div class="container contact-us">
                <div class="row">
                    <div class="col-md-6">
                       <div class="contact-col">
                           <h1>Contact Us</h1>
                           <p>⌂ Khuslshi Residential Area, Chittagong, Bangladesh</p>
                           <p>☏ +880156323492, Sunday to Thursday, 9AM to 5PM </p>
                           <p>Get In Touch. Contact Us Today.</p>
                       </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="contact-col img-col">
                            <img src="images/contact.jpg" alt="about">
                        </div>
                     </div> 
                </div>
            </div>
        </div>

        <form action="{{route('contact.submit')}}" method="post">
        

        {{csrf_field()}}
        <h1 style="font-family:'Courier New', Courier, monospace; text-align:center">Contact Us</h1>

        <div class="justify-content-center container-fluid mx-auto" style="width: 20%;">
          <section class=" col-sm-12">
          <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" name="user_email">
        <label for="floatingInput">Email Address</label>
        @error('user_email')
              <span class="text-danger">{{$message}}</span><br>
        @enderror
        </div>

        <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" name="user_password">
        <label for="floatingPassword">Password</label>
        @error('user_password')
              <span class="text-danger">{{$message}}</span><br>
        @enderror
        </div>

        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="user_name">
        <label for="floatingInput">Username</label>
        @error('user_name')
              <span class="text-danger">{{$message}}</span><br>
        @enderror
        </div>

        <button class="btn btn-success" type="submit">Submit</button>

          </section>
        
        </div>

        <p class="text-center pt-4 m-0">Copyright &copy; 2021 StudBud. All Rights Reserved</p>


@endsection