@extends('_layouts.main')
@section('title', 'Contact - Aquaartistry')
@section('body')

<div class="bg-blue-300">
    <h1 class="text-3xl font-bold text-center py-8">Contact Us</h1>
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Send Message</button>
                </div>
            </form>
        </div>
    </div>

  

@endsection
