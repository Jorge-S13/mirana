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
                                        <img src="{{asset('storage/' . auth()->user()->profile_image)}}" alt="clients"
                                             style="height: 140px; width: 140px"
                                             class="circle-shape  profile-img">
                                    </div>
                                    <div class="text-center">
                                        <form method="POST" action="{{route('profile.upload-image')}}" id="image" class="form-group flex-wrap " enctype="multipart/form-data">
                                                <div class="form-input">
                                                    <label for="image" class="form-label mt-4 mt-md-0">Upload Image</label>
                                                    <input type="file" id="image" name="image"
                                                           placeholder="PNG, JPG, GIF, WEBP, MP3 or MP4. Max 200mb."
                                                           class="form-control bg-blue-trans placeholder-color p-4 mb-1 rounded-3">
                                                </div>
                                                @csrf
                                                <button type="submit" class="btn my-2 btn-linear btn-medium">Upload Image</button>
                                            </form>
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
{{--                            @if (session('status'))--}}
{{--                                <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                                    {{ $message }}--}}
{{--                                </div>--}}
{{--                            @endif--}}
                            <form method="POST" action="{{route('user-profile-information.update')}}" id="form2" class="form-group flex-wrap ">
                                @csrf
                                @method("PUT")
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label fw-light">Name</label>
                                        @error('name')
                                        <p>{{ $message }}</p>
                                        @enderror
                                        <input type="text" id="name" name="name"
                                               value="{{auth()->user()->name}}"
                                               placeholder="Your first name here"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label fw-light">Email Address</label>
                                        @error('email')
                                        <p>{{ $message }}</p>
                                        @enderror
                                        <input type="text" id="email" name="email"
                                               value="{{auth()->user()->email}}"
                                               placeholder="disabled"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1"
                                               readonly>
                                    </div>
                                </div>
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-12">
                                        <label for="bio" class="form-label fw-light">Bio</label>
                                        @error('bio')
                                        <p>{{ $message }}</p>
                                        @enderror
                                        <textarea
                                            class="form-control custom-textarea bg-blue-trans placeholder-color p-4 mb-1"
                                            rows="2"
                                            placeholder="Write your bio"
                                            aria-label="With textarea" id="bio" name="bio">{{auth()->user()->bio}}</textarea>
                                    </div>
                                </div>

                            <h3 class="block-title ">Social Links</h3>

                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="facebook"
                                               class="form-label fw-light">Facebook</label>
                                        @error('facebook')
                                        <p>{{ $message }}</p>
                                        @enderror
                                        <input type="text" id="facebook" name="facebook"
                                               value="{{ json_decode(auth()->user()->social_links)->facebook ?? '' }}"
                                               placeholder="Facebook link"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="twitter"
                                               class="form-label fw-light">Twitter</label>
                                        @error('twitter')
                                        <p>{{ $message }}</p>
                                        @enderror
                                        <input type="text" id="twitter" name="twitter"
                                               value="{{ json_decode(auth()->user()->social_links)->twitter ?? '' }}"
                                               placeholder="Twitter Link"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="instagram"
                                               class="form-label fw-light">Instagram</label>
                                        @error('instagram')
                                        <p>{{ $message }}</p>
                                        @enderror
                                        <input type="text" id="instagram" name="instagram"
                                               value="{{ json_decode(auth()->user()->social_links)->instagram ?? '' }}"
                                               placeholder="Instagram link"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="discord"
                                               class="form-label fw-light">Discord</label>
                                        @error('discord')
                                        <p>{{ $message }}</p>
                                        @enderror
                                        <input type="text" id="discord" name="discord"
                                               value="{{ json_decode(auth()->user()->social_links)->discord ?? '' }}"
                                               placeholder="Discord link"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                                @csrf
                                <button type="submit" class="btn my-2 btn-linear btn-medium">Save</button>
                            </form>

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
                            <form method="POST" action="{{route('user-password.update')}}" id="form2" class="form-group flex-wrap ">
                                @method("PUT")
                                @csrf
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="current_password" class="form-label fw-light">Current
                                            Password</label>
                                        <input type="password" id="current_password" name="current_password"
                                               placeholder="Current Password"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="password" class="form-label fw-light">New
                                            Password</label>
                                        <input type="password" id="password" name="password"
                                               placeholder="Password"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                                <div class="form-input row col-lg-12 d-flex mb-1">
                                    <div class="col-md-6">
                                        <label for="password_confirmation" class="form-label fw-light">New Password
                                            Confirmation</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                               placeholder="Password Confirmation"
                                               class="form-control bg-blue-trans placeholder-color p-4 mb-1">
                                    </div>
                                </div>
                                @csrf
                                <button type="submit" class="btn my-2 btn-linear btn-medium">Save</button>
                            </form>

                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
    {{--  TABS CONTENT  --}}

@endsection
