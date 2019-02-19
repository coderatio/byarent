@extends('layouts.master')

@section('title', 'Houses')

@section('content')
    @include('houses.inc.search', ['type' => $type])

    @include('houses.inc.listings', ['houses' => []])
@stop
