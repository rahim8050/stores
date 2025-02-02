@extends('layout')
@section('content')
{{-- <h3 class="text-2xl">
  <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
</h3> --}}
    <p>{{ $listing->description }}</p>
  @endsection
    
