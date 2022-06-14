@extends('layouts.app')

@section('content')
<div class="container about-us">
            <div class="row">
                <div class="col-md-6">
                   <div class="about-col">
                       <h1>Our Team</h1>
                       <p>Shihab Rashid, an engineering student of AIUB, founded StudBud as an online course marketplace in mid 2021, as an experimentation of providing paid online courses through internet. It is transforming everyday towards its vision of creating a complete ecosystem for engaging, practical and employable learning opportunity. It might take some more years of intensive trial and error to clarify our emphasis on life transformation through acquisition of cutting-edge skills. </p>
                   </div>
                </div>

                <div class="col-md-6">
                    <div class="about-col img-col">
                        <img src="{{url('images/team.jpg')}}" alt="about">
                    </div>
                 </div> 
            </div>
        </div>
    </main>


        
    </div>
    <p class="text-center pt-4 m-0">Copyright &copy; 2021 StudBud. All Rights Reserved</p>


@endsection
