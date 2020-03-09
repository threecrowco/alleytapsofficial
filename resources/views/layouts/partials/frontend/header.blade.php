@auth
    <div class="px-6 py-2 text-sm font-bold text-right text-white bg-purple-700">
        <a href="{{ route('home') }}">Go to dashboard</a>
    </div>
@endauth
<section class="items-center justify-center hidden py-8 text-gray-200 bg-gray-900 lg:flex">
    <div class="w-5/12 text-right">
        <a class="mr-24" href="/">Home</a>
        <a class="mr-24" href="/about">About</a>
        <a class="mr-0" href="/events">Events</a>
    </div>
    <div class="w-2/12 text-center">
        <h3 class="text-xl font-bold">
            <a href="/">Logo</a>
        </h3>
    </div>
    <div class="w-5/12">
        <a class="ml-0" href="/gallery">Gallery</a>
        <a class="ml-24" href="/booking">Booking</a>
        <a class="ml-24" href="/contact">Contact</a>
    </div>
</section>