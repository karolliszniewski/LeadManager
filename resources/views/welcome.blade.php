@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Intro Section -->
    <section class="p-6 text-center">
        <h1 class="text-3xl font-bold text-blue-600">Assessment Project - Contact Funnel</h1>
        <p class="text-lg text-gray-700 mt-4">
            Welcome to the assessment project! Please fill out the form with your details. After you submit, we'll send a confirmation email to the address you provide. Simply follow the link in the email to confirm your submission.
        </p>
    </section>

    <!-- Success and Error Messages -->
    <div class="p-4 max-w-md mx-auto">

        @if(session('success'))
            <p class="text-green-600 font-semibold bg-green-100 border-l-4 border-green-500 p-3 rounded-md mb-4">{{ session('success') }}</p>
        @endif

        @if(session('error'))
            <p class="text-red-600 font-semibold bg-red-100 border-l-4 border-red-500 p-3 rounded-md mb-4">{{ session('error') }}</p>
        @endif

        @if ($errors->has('email'))
        <p class="text-red-600 font-semibold bg-red-100 border-l-4 border-red-500 p-3 rounded-md mb-4">{{ $errors->first('email') }}</p>
    @endif
    </div>

    <!-- Contact Form -->
    <form action="{{ route('lead.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mx-auto">
        @csrf
        <h2 class="text-2xl font-semibold text-center mb-6">Contact Us</h2>

        <!-- Name (Optional) -->
        <label for="name" class="block text-gray-700 font-medium mb-1">Name</label>
        <input type="text" name="name" id="name" placeholder="Your name" required class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">

        <!-- Email (Required) -->
        <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
        <input type="email" name="email" id="email" placeholder="Your email" required class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">

        <button type="submit" class="w-full py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all">Send</button>
    </form>
@endsection
