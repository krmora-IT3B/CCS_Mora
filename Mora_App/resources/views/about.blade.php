@extends('layout')

@section('title', 'About Us')

@section('content')
    <h1>About Us</h1>
    <p class="lead mb-4">
        The College of Computer Studies (CCS) is committed to shaping future IT professionals through hands-on learning, real-world projects, and a supportive academic environment. From coding your first website to presenting actual systems to panels, we help students grow through practical skills, collaboration, and meaningful projects. Whether you're into programming, design, or IT security, CCS has a place for you. Our programs connect theory with practice to prepare students for careers in software development, cybersecurity, system analysis, and more.
    </p>

    <div class="d-flex justify-content-center gap-3">
        <a href="/home" class="btn btn-custom">Back to Home</a>
        <a href="/contact" class="btn btn-custom">Contact Us</a>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            console.log("About Page Loaded");
        });
    </script>
@endsection