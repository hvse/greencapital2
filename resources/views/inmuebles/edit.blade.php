@extends('layouts.dashboard')

@section( 'title', __('Edit') . ' ' . __(controllerName()) )

@section('content')
<h1>{{ __('Edit') }} {{ __(controllerName()) }}</h1>
<hr>

@include('partials.validation-errors')

<form method="post" action="{{ route( 'inmuebles.update', $inmueble) }}" enctype="multipart/form-data">

  @csrf
  @method('PATCH')

  @include( 'inmuebles._form',[
    "btnText" => __('Edit')
  ])

</form>



@endsection