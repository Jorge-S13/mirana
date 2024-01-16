@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="container ">
            <h2 class="section-title light text-center mt-5 pt-5">Profile Settings</h2>
        </div>
    </section>

    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="img-tab" data-bs-toggle="tab" data-bs-target="#img" type="button"
                    role="tab" aria-controls="img" aria-selected="true">Profile Image
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button"
                    role="tab" aria-controls="info" aria-selected="false">Account Info
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" type="button"
                    role="tab" aria-controls="password" aria-selected="false">Change Password
            </button>
        </li>
    </ul>
    {{--  TABS CONTENT  --}}
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="img" role="tabpanel" aria-labelledby="img-tab">
            <section id="top-creators" class="padding-medium">
                <div class="container">

                    <div class="row ">
                        <div class=" offset-md-12 col-md-12 ">
                            <h3 class="block-title text-center">Profile Image</h3>
                            <div class="product-item bg-blue-trans border-rounded">
                                <div class="product-detail text-center">
                                    <div class="clients-detail mb-4">
                                        <img src="images/clients-item-lg1.jpg" alt="clients"
                                             class="circle-shape  profile-img">
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class="btn my-2 btn-linear btn-medium">Upload Image</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn my-2 btn-linear btn-medium">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
            <section id="top-creators" class="padding-medium">
                <div class="container">

                    <div class="row ">
                        <div class="col-md-12 col-12 ">
                            <h3 class="block-title ">Account Info</h3>
                            <form id="form1" class="form-group flex-wrap ">
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput1" class="form-label fw-light">Name</label>
                                        <input type="text" id="exampleFormControlInput1" name="email"
                                               value="{{auth()->user()->name}}"
                                               placeholder="Your first name here"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="disabledTextInput" class="form-label fw-light">Email Address</label>
                                        <input type="text" id="disabledTextInput" name="email"
                                               value="{{auth()->user()->email}}"
                                               placeholder="disabled"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1"
                                               readonly>
                                    </div>
                                </div>
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-12">
                                        <label for="bio" class="form-label fw-light">Bio</label>
                                        <textarea
                                            class="form-control custom-textarea bg-blue-trans placeholder-color p-4 mb-1"
                                            rows="2"
                                            placeholder="Write your bio"
                                            aria-label="With textarea" id="bio" name="bio"></textarea>
                                    </div>
                                </div>
                            </form>
                            <h3 class="block-title ">Social Link</h3>
                            <form id="form2" class="form-group flex-wrap ">
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput5"
                                               class="form-label fw-light">Facebook</label>
                                        <input type="text" id="exampleFormControlInput5" name="email"
                                               placeholder="Facebook link"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput6"
                                               class="form-label fw-light">Twitter</label>
                                        <input type="text" id="exampleFormControlInput6" name="email"
                                               placeholder="Twitter Link"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput7"
                                               class="form-label fw-light">Instagram</label>
                                        <input type="text" id="exampleFormControlInput7" name="email"
                                               placeholder="Instagram link"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput8"
                                               class="form-label fw-light">Discord</label>
                                        <input type="text" id="exampleFormControlInput8" name="email"
                                               placeholder="Discord link"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                            </form>

                            <a href="#" class="btn btn-linear btn-medium">Save</a>

                        </div>

                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
            <section id="top-creators" class="padding-medium">
                <div class="container">

                    <div class="row ">
                        <div class="col-md-12 col-12 ">
                            <h3 class="block-title ">Change Password</h3>
                            <form id="form2" class="form-group flex-wrap ">
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput5" class="form-label fw-light">Current
                                            Password</label>
                                        <input type="password" id="exampleFormControlInput5" name="email"
                                               placeholder="Current Password"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput7" class="form-label fw-light">New
                                            Password</label>
                                        <input type="password" id="exampleFormControlInput7" name="email"
                                               placeholder="Password"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput7" class="form-label fw-light">New Password
                                            Confirmation</label>
                                        <input type="password" id="exampleFormControlInput7" name="email"
                                               placeholder="Password Confirmation"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                            </form>

                            <a href="#" class="btn btn-linear btn-medium">Save</a>

                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
    {{--  TABS CONTENT  --}}

@endsection
