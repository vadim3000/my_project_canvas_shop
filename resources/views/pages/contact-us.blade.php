@extends('layouts.front_layout')
@section('hometitle')
    Contacts
@endsection
@section('content')
    <!-- Section - contacts -->
    <div class="container col-xl-10 col-md-6 col-lg-10 col-sm-12">
        <section class="my-5">
            <!-- Section heading -->
            <h1 class="h1-responsive font-weight-bold text-center text-dark my-5">Contact us</h1>
            <!-- Section description -->
            <p class="text-center w-responsive mx-auto pb-5">If you would like to contact the Mirillis Lifestyle Collection with questions, comments or suggestions simply fill out and submit the form below</p>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
        @endif
        <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <!-- Form with header -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Header -->
                            <div class="form-header blue accent-1">
                                <h3 class="mt-2 text-dark font-weight-bold text-center"><i class="fas fa-envelope fa-2x text-dark"></i> Write to us:</h3>
                            </div>
                            <p class="text-secondary text-center">We'll write rarely, but only the best content.</p>
                            <!-- Body -->
                            <div>
                                <form action="{{route('contactUs.store')}} "method="POST" name="contact-form">
                                    <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-user prefix text-white"></i>
                                        </div>
                                        <input type="text" name="name" id="name"  required="required" class="form-control text-secondary" placeholder="Your name">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-envelope prefix text-white"></i>
                                        </div>
                                        <input type="text" name="email" id="email"   required="required" class="form-control text-secondary" placeholder="Your email">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-tag prefix text-white"></i>
                                        </div>
                                        <input type="text" name="subject" id="form-Subject" required="required" class="form-control text-secondary" placeholder="Subject">
                                    </div>
                                    @error('subject')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="md-form input-group flex-nowrap ml-2 mr-2 mb-3 shadow-sm">
                                <div class="input-group-prepend">
                                    <i class="fas fa-check circle text-white"></i>
                                </div>
                                <select class="form-select text-secondary" aria-label="Default select example" name="department" id="department">
                                    <option selected="" disabled="disabled" value="Select Department">Select Department</option>
                                    <option value="administration">Administration</option>
                                    <option value="accounting">Accounting</option>
                                    <option value="tehnicalDepartment">Tehnical Department</option>
                                    <option value="logistic">Logistic</option>
                                </select>
                            </div>
                            @error('department')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                                <div class="input-group-prepend">
                                    <i class="fas fa-pencil-alt prefix text-white"></i>
                                </div>
                                <textarea name="message" id="text" required class="form-control md-textarea text-secondary" rows="3" placeholder="Write message"></textarea>
                            </div>
                            @error('message')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="readTerms"id="readTerms">
                                <label class="form-check-label text-secondary" for="defaultCheck1">I have read the rules </label>
                            </div>
                            @error('readTerms')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class="text-center">
                                <button class="btn btn-dark">Submit</button>
                            </div>
                        </div>
                        @csrf
                        </form>
                    </div>
                    <!-- Form with header -->
                </div><!-- Grid column -->
                <div class="col-lg-6 mb-lg-0 mb-4"><!--Google map-->
                    <div id="map-container-section" class="z-depth-1-half map-container-section mb-4 border border-secondary shadow-sm rounded" style="height: 400px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.7419801456817!2d28.808401315013093!3d47.045293634577185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97d979c02dc3d%3A0xdd17d2a457e96bb4!2sFabrica%20de%20mobila%20Confort!5e0!3m2!1sen!2sit!4v1587310293209!5m2!1sen!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <!-- Buttons-->
                    <div class="row text-center">
                        <div class="col-md-4 ic">
                            <a class="btn-floating blue accent-1">
                                <i class="fas fa-map-marker-alt shadow text-white"></i>
                            </a>
                            <p class="text-dark font-weight-bold border-danger">Chisinau, 94126</p>
                            <p class="mb-md-0 font-weight-bold text-dark">Moldova</p>
                        </div>
                        <div class="col-md-4 ic">
                            <a class="btn-floating blue accent-1">
                                <i class="fas fa-phone shadow text-white"></i>
                            </a>
                            <p class="text-dark font-weight-bold">+ 373 79001100</p>
                            <p class="mb-md-0 text-dark font-weight-bold">Mon - Fri, <br> 8:00-22:00</p>
                        </div>
                        <div class="col-md-4 ic">
                            <a class="btn-floating blue accent-1">
                                <i class="fas fa-envelope shadow text-white"></i>
                            </a>
                            <p class="text-dark font-weight-bold">info@mirillis.com</p>
                            <p class="mb-0 text-dark font-weight-bold">sale@mirillis.com</p>
                        </div>
                    </div>
                </div><!-- Grid column -->
            </div><!-- Grid row -->
        </section><!-- Section: Contact v.1 -->
    </div>
    <hr />
@endsection
