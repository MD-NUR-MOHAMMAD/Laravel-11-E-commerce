@extends('ministore.layout', ['title' => 'Ministore'])
@section('head')

@endsection

@section('content')

@include('ministore.inc.carousel')

@include('ministore.inc.services')

@include('ministore.inc.products')

@include('ministore.inc.yearlysale')

@include('ministore.inc.latest')

@include('ministore.inc.review')

@include('ministore.inc.subscribe')

@include('ministore.inc.instagram')

@include('ministore.inc.footer')

@include('ministore.inc.footerbottom')


@endsection
