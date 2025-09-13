@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <h1 class="mb-3" style="color: #ffeb3b; font-weight: bold;">Contact Us</h1>

    <p class="lead mb-4" style="color: black;">
        Have questions about our programs, events, or student projects?<br>
        Send us a message and we’ll get back to you as soon as possible.
    </p>

    <div style="height: 2px; background-color: #ffeb3b; width: 100%; max-width: 500px; margin: 0 auto 30px auto;"></div>

    <form action="#" method="POST" class="mx-auto" style="max-width: 500px;">
        <div class="mb-3 text-start">
            <label class="form-label">Enter your name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label class="form-label">Enter your email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-4 text-start">
            <label class="form-label">Message:</label>
            <textarea name="message" rows="4" class="form-control" required></textarea>
        </div>
        
        <button type="submit" class="btn w-100" style="background-color: #fff200; color: white; font-weight: bold;">SEND</button>
    </form>

    <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="/home" class="btn btn-custom">Back to Home</a>
        <a href="/about" class="btn btn-custom">Learn more about CCS</a>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            console.log("Contact Page Loaded");

            const form = document.querySelector("form");
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                alert("Form submitted successfully!");
            });
        });
    </script>
@endsection