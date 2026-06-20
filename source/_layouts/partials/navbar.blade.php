<header class="sticky top-0 z-50 border-b border-white/10 bg-white/90 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 md:px-12">
        <a href="{{ $page->baseUrl }}/" class="text-xl font-bold tracking-wide text-aqua-800">
            Aquaartistry
        </a>

        <nav class="hidden gap-6 text-sm font-medium md:flex">
            <a href="{{ $page->baseUrl }}/" class="text-gray-700 transition-colors hover:text-aqua-700">Home</a>
            <a href="{{ $page->baseUrl }}/about" class="text-gray-700 transition-colors hover:text-aqua-700">About</a>
            <a href="{{ $page->baseUrl }}/gallery" class="text-gray-700 transition-colors hover:text-aqua-700">Gallery</a>
            <a href="{{ $page->baseUrl }}/product" class="text-gray-700 transition-colors hover:text-aqua-700">Product</a>
            <a href="{{ $page->baseUrl }}/contact" class="text-gray-700 transition-colors hover:text-aqua-700">Contact</a>
        </nav>
    </div>
</header>