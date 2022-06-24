@extends('layouts.dashboard')

@section( 'title', __('Add') . ' ' . __(controllerName()) )

@section('content')
<h1>{{ __('Add') }} {{ __(controllerName()) }}</h1>
<hr>

@include('partials.validation-errors')

<form method="post" action="{{ route( controller_name() . '.store') }}" enctype="multipart/form-data">

  @csrf

  @include( controller_name() . '._form',[
    "btnText" => __('Add')
  ])

</form>



@endsection
