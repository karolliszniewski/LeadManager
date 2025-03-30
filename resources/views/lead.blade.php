@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <!-- Intro Section -->
    <section class="p-6">
        <h1 class="text-3xl font-bold text-center text-blue-600">Assessment Project - Admin Page</h1>
        <p class="text-lg text-gray-700 mt-4 text-center">
            Below is the list of all the emails and contact details submitted through the contact form on the homepage. These submissions are stored in the database.
        </p>
    </section>

    <!-- Table to Display Leads -->
    <div class="overflow-x-auto mt-6">
        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left border-b">Name</th>
                    <th class="px-4 py-2 text-left border-b">Email</th>
                    <th class="px-4 py-2 text-left border-b">Confirmation Status</th>
                    <th class="px-4 py-2 text-left border-b">Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    <tr>
                        <td class="px-4 py-2 border-b">{{ $lead->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $lead->email }}</td>
                        <td class="px-4 py-2 border-b">
                            @if ($lead->confirmed_at)
                                {{ $lead->confirmed_at->format('Y-m-d H:i') }}
                            @else
                                Not confirmed
                            @endif
                        </td>
                        <td class="px-4 py-2 border-b">{{ $lead->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
