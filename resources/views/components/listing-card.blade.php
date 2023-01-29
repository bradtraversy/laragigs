@props(['listing'])

<x-card>
    <div class="flex text-gray-100">
        <img class="hidden w-48 mr-6 rounded-md md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
            alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="mt-4 text-lg">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
