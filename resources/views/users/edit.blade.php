@extends('layouts.dashboard')

@section( 'title', __('Edit') . ' ' . __(controllerName()) )

@section('content')
<h1>{{ __('Edit') }} {{ __(controllerName()) }}</h1>
<hr>

@include('partials.validation-errors')

<form method="post" action="{{ route( controller_name() . '.update',${cns()}) }}" enctype="multipart/form-data">

  @csrf
  @method('PATCH')

  @include( controller_name() . '._form',[
    "btnText" => __('Save')
  ])
</form>



@endsection
