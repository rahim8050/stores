@extends('layout')
@section('content')
@include('partials.hero')
@include('partials.search')
<div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
@unless(count($listings) == 0)

@foreach ($listings  as $listing )
<x-listing :listing="$listing" />
    
@endforeach
@else
    <p>No listings found</p>
@endunless
</div>
@endsection