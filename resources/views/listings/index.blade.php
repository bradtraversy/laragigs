<x-layout>
    @if (!Auth::check())
        @include('partials._hero')
    @endif

    @include('partials._search')

    <div class="gap-4 mx-4 space-y-4 lg:grid lg:grid-cols-2 md:space-y-0">

        @unless(count($listings) == 0)

            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @else
            <p>No listings found</p>
        @endunless

    </div>

    <div class="p-4 mt-6">
        {{ $listings->links() }}
    </div>
</x-layout>
