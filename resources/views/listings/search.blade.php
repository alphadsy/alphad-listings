@extends('layouts.3col')

@section('middle')
    @include('partials.listings', ['listings' => $listings])
@endsection

