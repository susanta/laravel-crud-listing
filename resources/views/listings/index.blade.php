<x-layout>
    @include('partials/_hero')
    @include('partials/_search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless (count($listings) == 0)
        @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" />
        @endforeach;
        {{--
        <x-listing-tags :tagsCSV="$listing->tags" /> --}}
        @else
        <p>No listings found</p>
        @endunless
    </div>

    <mt-6 class="p-4">
        {{ $listings->links() }}
    </mt-6>
</x-layout>