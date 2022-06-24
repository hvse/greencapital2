@extends('layouts.dashboard')

@section('title', __(controllerName()) )

@section('content')

  @include('partials.indexHeader')
  @include(controller_name() . '._index')

@endsection
