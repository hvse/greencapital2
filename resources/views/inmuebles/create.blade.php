@extends('layouts.dashboard')

@section( 'title', __('Add') . ' ' . __(controllerName()) )

@section('content')
<h1>{{ __('Add') }} {{ __(controllerName()) }}</h1>
<hr>

@include('partials.validation-errors')

<form method="post" action="{{ route( 'inmuebles.store') }}" enctype="multipart/form-data">

  @csrf

  @include( 'inmuebles._form',[
    "btnText" => __('Add')
  ])

</form>



@endsection