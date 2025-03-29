@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Intro Section -->
    <section class="p-6">
        <h1 class="text-3xl font-bold text-center text-blue-600">Assessment Project - Contact Funnel</h1>
        <p class="text-lg text-gray-700 mt-4 text-center">
            Welcome to the assessment project! This simple contact funnel collects your details and sends a confirmation email after you submit the form.
            By entering your email, you’ll receive a confirmation message.
        </p>
    </section>

    <!-- Success and Error Messages -->
    <div class="p-4">
        @if(session('success'))
            <p class="text-green-600 font-semibold mb-4">{{ session('success') }}</p>
        @endif

        @if(session('error'))
            <p class="text-red-600 font-semibold mb-4">{{ session('error') }}</p>
        @endif
    </div>

    <!-- Contact Form -->
    <form action="{{ route('lead.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mx-auto">
        @csrf
        <h2 class="text-2xl font-semibold text-center mb-6">Contact Us</h2>
        
        <input type="text" name="name" placeholder="Your name" required class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="email" name="email" placeholder="Your email" required class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="text" name="phone" placeholder="Phone number" class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        
        <button type="submit" class="w-full py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">Send</button>
    </form>
@endsection