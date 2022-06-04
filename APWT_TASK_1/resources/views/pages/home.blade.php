@extends('layouts.app')
@section('content')
        <div class="header-img">
            <div class="info">
                <h1>The Buudy You Need</h1>
                <h3>Everything is figureoutable</h3>
                <p>A Smarter Way to Student</p>
            </div>
        </div>

        <div class="gap"></div>

        <div>
            <section class="features">
                <h1>Our Instructors</h1>
                <p id="paragraph">Learn from real-world experts who love to teach. StudBud instructors bring their experience to the online classroom.</p>

                <div class="row">
                    <div class="col-md-4 img-col">
                        <img src="{{url('images/ins2.jpg')}}" alt="ins">
                        <p id="featues-para">Paul Kates (Business Management)</p>
                    </div>
                    <div class="col-md-4 img-col">
                        <img src="{{url('images/ins1.jpg')}}" alt="ins">
                        <p id="featues-para">Sarajean Rossitto (NGO Management)</p>
                    </div>
                    <div class="col-md-4 img-col">
                        <img src="{{url('images/ins3.jpg')}}" alt="ins">
                        <p id="featues-para">Santosh Lawoo (Programming)</p>
                    </div>
                </div>
            </section>

           
        </div>

        <div class="gap"></div>

        <div>
            <section class="features">
                <h1>Explore Our Features</h1>
                <p>All the features you need to shape your student life
                </p>

                <div class="row">
                    <div class="col-md-4 img-col">
                        <img src="{{url('images/features1.jpg')}}" alt="features">
                        <p id="featues-para">Save Time</p>
                    </div>
                    <div class="col-md-4 img-col">
                        <img src="{{url('images/features3.jpg')}}" alt="features">
                        <p id="featues-para">Self Development</p>
                    </div>
                    <div class="col-md-4 img-col">
                        <img src="{{url('images/features4.jpg')}}" alt="features">
                        <p id="featues-para">Instant Solution</p>
                    </div>
                </div>
            </section>
        </div>

        <div class="gap"></div>

        <div>
            <section class="review">
                <h1>Reviews</h1>
                <p>Excellent customer service is the number one job in any company! It is the personality of the company and the reason customers come back. Without customers there is no company!
                </p>

                <div class="row">
                    <div class="col-md-6 review-col">
                        <h3>Shihab Rashid</h3>
                        <p>Even if a person don't know how to implement simple maths formulas in Excel then they have designed a very perfect course structure for the basic Excel and when the person gain knowledge and build his basics, they have advance excel course which contains all the tips and tricks as well. The teaching assistance is very dedicated and ready to support 24x7.</p>
                    </div>
                    <div class="col-md-6 review-col">
                        <h3>Monir Uddin</h3>
                        <p>I used their tutoring service and it worked out pretty well for me. I needed some math help and the tutor explained me everything and I was able to complete the task myself. They fix all my issues! You ppl have to learn and understand Its only certain things customer service reps can do. They fix all my problems to the best they can, and I am okay with that. </p>
                    </div>
                </div>


            </section>
        </div>
        <p class="text-center pt-4 m-0">Copyright &copy; 2021 StudBud. All Rights Reserved</p>
@endsection
