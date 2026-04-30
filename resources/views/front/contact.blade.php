@extends('front.app')
@section('title','Contact Page')
@section('content')
      <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            @isset($settings['contact_head'])
                            <h1 class="fw-bolder">{{ $settings['contact_head'] }}</h1>    
                            @endisset
                            @isset($settings['contact_content'])
                            <p class="lead fw-normal text-muted mb-0">{{ $settings['contact_content'] }}</p>
                            @endisset
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" action="{{ route('front.contact') }}" method="POST" data-sb-form-api-token="API_TOKEN">
                                    @csrf
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('name')
                                        is-invalid  
                                        @enderror" id="name" type="text" name="name" placeholder="Enter your name..." value="{{ (old('name')) }}"  />
                                        <label for="name">Full name</label>
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                            
                                        @enderror
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('email')
                                        is-invalid    
                                        @enderror" id="email" name="email" type="email" placeholder="name@example.com" value="{{ (old('email')) }}" />
                                        <label for="email">Email address</label>
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                            
                                        @enderror
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('phone')
                                            is-invalid
                                        @enderror" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" value="{{ (old('phone')) }}"  />
                                        <label for="phone">Phone number</label>
                                        @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                            
                                        @enderror
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control @error('message')
                                        is-invalid  
                                        @enderror" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" >{{ old('message') }}</textarea>
                                        <label for="message">Message</label>
                                        @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection