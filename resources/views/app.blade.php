@extends('layout.layout')

@section('title', 'Home')

@section('content')
<style>
    @keyframes typing {
        from { width: 0; }
        to { width: 100%; }
    }

    @keyframes blink {
        50% { border-color: transparent; }
    }

    .animated-text {
        display: inline-block;
        font-size: 2.5rem;
        font-weight: bold;
        color: white;
        overflow: hidden;
        white-space: nowrap;
        border-right: 3px solid white;
        width: 0;
        animation: typing 3s steps(30, end) forwards, blink 0.75s step-end infinite;
    }
</style>

<div class="hero text-black p-4" style="background-image: url('{{ asset('images/background.jpg') }}'); background-size: cover; background-position: center;">
    <div class="row">
        <div class="col-md-8 wrapper">
            <h1 class="text-black">
                Hello, I'm <span class="animated-text">Dwiki Putra</span>
            </h1>
            <h3 class="text-light">Web Developer</h3>
            <p>Good website is a good concept.</p>
            <a href="{{ url('/cv') }}" class="btn btn-primary">Download CV</a>
            <a href="{{ url('/hire') }}" class="btn btn-secondary">Hire Me</a>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/php.png') }}" alt="PHP Logo" class="img-fluid">
        </div>
    </div>`
</div>
<div class="container mt-4" id="about">
    <h2>About Me</h2>
    <p>A Junior Programmer with skills in web design using PHP, JavaScript, Object Oriented CSS, Bootstrap,
and HTML5. Experience in developing promotional websites for car showrooms in Pekanbaru.</p>
    <a href="{{ url('/about') }}" class="btn btn-secondary">Read more</a>
</div>

<div class="container mt-4 bg-light text-dark p-4">
    <h2>Latest Projects</h2>
    <div class="row">
        @foreach([1, 2, 3] as $num)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/project'.$num.'.jpg') }}" alt="Project {{ $num }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Project {{ $num }}</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                        <a href="{{ url('/portfolio') }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="{{ url('/portfolio') }}" class="btn btn-secondary">View all projects</a>
    </div>
</div>

<div class="container mt-4">
    <h2>Services</h2>
    <div class="row">
        @foreach(['Web Development', 'UI/UX Design', 'SEO Optimization'] as $service)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service }}</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="{{ url('/services') }}" class="btn btn-secondary">View all services</a>
    </div>
</div>

<div class="container mt-4 bg-secondary text-white p-4">
    <h2>Hire Me</h2>
    <form action="{{ url('/contact') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>

<div class="footer bg-dark text-white text-center p-4">
    &copy; {{ date('Y') }} All rights reserved.
</div>

@endsection
