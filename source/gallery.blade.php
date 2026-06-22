@extends('_layouts.main')
@section('title', 'Gallery - Aquaartistry')
@section('body')

<div class="bg-blue-300">
    <h1 class="text-3xl font-bold text-center py-8">Gallery</h1>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Gallery Image 1" class="w-full h-auto">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Image Title 1</h2>
                    <p class="text-gray-600">Description of the image goes here.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Gallery Image 2" class="w-full h-auto">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Image Title 2</h2>
                    <p class="text-gray-600">Description of the image goes here.</p>
                </div>
            </div>
            <!-- Add more gallery items as needed -->
        </div>
    </div>
</div>


  

@endsection
