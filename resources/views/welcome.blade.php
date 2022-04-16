@extends('layout.main')
@section('content')
    @include('parts.header')
    @include('sections.main-section')
    @include('sections.get-fit')
    @auth
        @include('sections.routine')
    @endauth
    @include('sections.info-panel')
@endsection
