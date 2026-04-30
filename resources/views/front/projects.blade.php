@extends('front.app')
@section('title','Projects Page')
@section('content')
 <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card -->
                            @foreach ($projects as $project )
                               <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex  align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">{{ $project->name_trans }}</h2>
                                            <p>{{ $project->content_trans }}</p>
                                            @if(isset($project->link))
                                            <a href="{{ $project->link }}">Project Link</a>
                                            @endif
                                        </div>
                                        <img class="img-fluid" src="{{ asset($project->image) }}" alt="..." />
                                    </div>
                                </div>
                            </div>
                                
                            @endforeach
                         
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        @isset($settings['contact_title'])
                        <h2 class="display-4 fw-bolder mb-4">{{ $settings['contact_title'] }}</h2>
                        @endisset
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('front.contact') }}">Contact me</a>
                    </div>
                </div>
            </section>
        </main>
    
@endsection