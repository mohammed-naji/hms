@extends('blog.app')

@section('title', 'Contact Us - ' . env('APP_NAME'))

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('blassets/assets/img/contact-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon
                        as possible!</p>
                    <div class="my-5">
                        <form id="contactForm" method="POST" action="{{ route('blog.contact') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating">
                                <input class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" type="text" placeholder="Enter your name..." />
                                <label for="name">Name</label>
                                @error('name')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input class="form-control @error('email') is-invalid @enderror" id="email"
                                    type="email" placeholder="Enter your email..." name="email" />
                                <label for="email">Email address</label>
                                @error('email')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input class="form-control @error('phone') is-invalid @enderror" id="phone"
                                    type="tel" placeholder="Enter your phone number..." name="phone" />
                                <label for="phone">Phone Number</label>
                                @error('phone')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input class="form-control @error('cv') is-invalid @enderror" id="cv" type="file"
                                    name="cv" />
                                <label for="cv">Your CV</label>
                                @error('cv')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                    placeholder="Enter your message here..." style="height: 12rem" name="message"></textarea>
                                <label for="message">Message</label>
                                @error('message')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                            <br />


                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')

    <script>
        let input_error = document.querySelector('.form-control.is-invalid')

        if (input_error) {
            window.scrollTo({
                top: input_error.getBoundingClientRect().top,
                behavior: 'smooth'
            })
        }
    </script>

@endsection
