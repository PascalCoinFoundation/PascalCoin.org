@extends('layouts.main')

@section('body-id')
    contact
@endsection

@section('content')
    <!-- FullScreen -->
    <div class="intro-header intro-subheader">

        <div id="slider_container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="breadcrumb-title">Contact Us</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <!--h3 class="section-heading">Whitepapers</h3-->
                        <p>Have any questions? Want to get involved with the PascalCoin Project? Please fill out the contact form, we’d love to hear from you.</p>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="whatis" class="content-section-b" style="border-top: 0">
        <div class="container">
            <div class="row">
                <div style="display: none; text-align: center; color: red;" id="contact_error">Please enter required fields.</div>

                <div class="col-sm-12 contact">
                    <div class="row">
                        <div class="contact-feature">
                            <div class="col-sm-6 ">
                                <img src="{{asset('images/logo.png')}}" class="img-responsive">
                                <hr>
                                <p>Have any questions? Want to get involved with the PascalCoin Project? Please fill out the contact form, we’d love to hear from you.</p>
                                <hr>
                            </div>
                            <div class="col-sm-6 ">
                                <div style="display: none; text-align: center; " id="contact_success">Your message sent successfully. Thank you!</div>
                                <form class="form-horizontal" method="post" action="{{route('contact-submit')}}" id="contact_form">
                                    @csrf
                                    <fieldset>
                                        <!-- Form Name -->


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="name" placeholder="Name" class="form-control" type="text">
                                                </div>
                                                <p class="error text-left" style="display: none"></p>
                                            </div>
                                        </div>



                                        <!-- Text input-->
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                    <input name="email" placeholder="E-Mail" class="form-control" type="text">
                                                </div>
                                                <p class="error text-left" style="display: none"></p>
                                            </div>
                                        </div>


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                    <input name="phone" placeholder="Mobile No" class="form-control" type="text">
                                                </div>
                                                <p class="error text-left" style="display: none"></p>
                                            </div>
                                        </div>

                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    <textarea class="form-control" name="message" placeholder="What are you looking for?"></textarea>
                                                </div>
                                                <p class="error text-left" style="display: none"></p>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <!-- <button type="submit" class="btn btn-warning pull-right">Submit <span class="glyphicon glyphicon-send"></span></button> -->
                                                <input name="contactus" type="submit" class="btn btn-warning pull-right" value="Submit">
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection