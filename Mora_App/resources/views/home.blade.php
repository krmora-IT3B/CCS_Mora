@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>Welcome to the College of Computer Studies</h1>
    <p class="lead mb-4">
        Explore our programs, connect with fellow tech enthusiasts, and start shaping your future in technology.<br>
        This is the official CCS page—your source for updates, resources, and everything you need to thrive in the world of technology.
    </p>

    <div class="d-flex justify-content-center gap-3">
        <a href="/about" class="btn btn-custom">Learn more about CCS</a>
        <a href="/contact" class="btn btn-custom">Contact Us</a>
    </div>
@endsection

@section('script') 
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            console.log("CCS Home Page Loaded");
        });
    </script>
@endsection