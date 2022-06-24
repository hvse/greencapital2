@extends('layouts.dashboard')

@section('title', ${cns()}->name)

@section('content')


<ul class="nav nav-tabs" id="myTab" role="tablist">

  <li class="nav-item" role="presentation">
    <a class="nav-link {{ !isset($_GET["tab"]) || ( isset($_GET["tab"]) && $_GET["tab"] == "home" ) ? "active" : "" }}" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Usuario</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link {{ isset($_GET["tab"]) && $_GET["tab"] == "payments" ? "show active" : "" }}" id="payments-tab" data-toggle="tab" href="#payments" role="tab" aria-controls="payments" aria-selected="false">Pagos ( {{ count($user->payments) }} )</a>
  </li>

  <li class="nav-item {{ isset($_GET["tab"]) && $_GET["tab"] == "journeys" ? "show active" : "" }}" role="presentation">
    <a class="nav-link" id="journeys-tab" data-toggle="tab" href="#journeys" role="tab" aria-controls="journeys" aria-selected="false">Config</a>
  </li>

  <li class="nav-item {{ isset($_GET["tab"]) && $_GET["tab"] == "places" ? "show active" : "" }}" role="presentation">
    <a class="nav-link" id="places-tab" data-toggle="tab" href="#places" role="tab" aria-controls="places" aria-selected="false">Lugares ( {{ count($user->places) }} )</a>
  </li>

  <li class="nav-item {{ isset($_GET["tab"]) && $_GET["tab"] == "vehicles" ? "show active" : "" }}" role="presentation">
    <a class="nav-link" id="vehicles-tab" data-toggle="tab" href="#vehicles" role="tab" aria-controls="vehicles" aria-selected="false">Vehículos ( {{ count($user->vehicles) }} )</a>
  </li>

  <li class="nav-item {{ isset($_GET["tab"]) && $_GET["tab"] == "travels" ? "show active" : "" }}" role="presentation">
    <a class="nav-link" id="travels-tab" data-toggle="tab" href="#travels" role="tab" aria-controls="travels" aria-selected="false">Viajes ( {{ count($user->travels) }} )</a>
  </li>

</ul>

<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade {{ !isset($_GET["tab"]) || ( isset($_GET["tab"]) && $_GET["tab"] == "home" ) ? "show active" : "" }}" id="home" role="tabpanel" aria-labelledby="home-tab">
    {{-- home --}}
    <h1>{{ ${cns()}->name }}</h1>

    <div class="row">
      <div class="col">
        <p class="p-0 m-0 text-muted">{{ __('Name') }}:</p>
        <p class="bg-light shadow-sm p-2 border rounded">{{ utf8_encode(${cns()}->name) }}</p>
      </div>
  
      <div class="col">
        <p class="p-0 m-0 text-muted">{{__('Lastname')}}:</p>
        <p class="bg-light shadow-sm p-2 border rounded">{{ utf8_encode(${cns()}->lastname) }}</p>
      </div>

      <div class="col">
        <p class="p-0 m-0 text-muted">{{__('Document')}}:</p>
        <p class="bg-light shadow-sm p-2 border rounded">{{ ${cns()}->documentStr() }}</p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <p class="p-0 m-0 text-muted">{{__('Role')}}:</p>
        <p class="bg-light shadow-sm p-2 border rounded">{{ ${cns()}->isAdmin() ? "Admin" : 'Usuario' }}</p>
      </div>
      <div class="col">
        <p class="p-0 m-0 text-muted">{{__('¿Chofer?')}}:</p>
        <p class="bg-light shadow-sm p-2 border rounded">{{ ${cns()}->isDriver() ? "Si" : 'No' }}</p>
      </div>
      <div class="col">
        <p class="p-0 m-0 text-muted">{{__('¿Disponible?')}}:</p>
        <p class="bg-light shadow-sm p-2 border rounded">{{ ${cns()}->available ? "Disponible" : 'Indispuesto' }}</p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <p class="p-0 m-0 text-muted">{{__('Email')}}:</p>
        <p class="bg-light shadow-sm p-2 border rounded">{{ ${cns()}->email }}</p>
      </div>
      <div class="col">
        <p class="p-0 m-0 text-muted">{{__('Phone')}}:</p>
        <p class="bg-light shadow-sm p-2 border rounded">{{ ${cns()}->phone }}</p>
      </div>
    </div>


    <div class="d-flex">
      <div class="p-2">
        <a href="{{ route( controller_name() . '.index') }}" class="btn btn-dark">Volver</a>
      </div>
      <div class="p-2">
        <a href="{{ route( controller_name() . '.edit',${cns()}) }}" class="btn btn-primary">Editar</a>
      </div>
      <div class="ml-auto p-2">
        <a href="javascript:;" class="btn btn-outline-danger ml-flex" data-toggle="modal" data-target="#deleteModal">ELIMINAR</a>
      </div>
    </div>
    {{-- end home --}}
  </div>

  <div class="tab-pane fade {{ isset($_GET["tab"]) && $_GET["tab"] == "payments" ? "show active" : "" }}" id="payments" role="tabpanel" aria-labelledby="payments-tab">
    
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a href="{{ route("payments.create") }}?user_id={{ $user->id }}" class="btn btn-primary my-3">{{ __('Add') }} {{ __('payment') }}</a>
      </li>
    </ul>
    

    @include('payments._index',[
      "payments" => ${cns()}->payments
    ])

  </div>

  <div class="tab-pane fade {{ isset($_GET["tab"]) && $_GET["tab"] == "journeys" ? "show active" : "" }}" id="journeys" role="tabpanel" aria-labelledby="journeys-tab">
    @include('journeys._index',[
      "journeys" => [${cns()}->journey]
    ])
  </div>

  <div class="tab-pane fade {{ isset($_GET["tab"]) && $_GET["tab"] == "places" ? "show active" : "" }}" id="places" role="tabpanel" aria-labelledby="places-tab">
    
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a href="{{ route("places.create") }}?user_id={{ $user->id }}" class="btn btn-primary my-3">{{ __('Add') }} {{ __('place') }}</a>
      </li>
    </ul>

    @include('places._index',[
      "places" => ${cns()}->places
    ])
  </div>

  <div class="tab-pane fade {{ isset($_GET["tab"]) && $_GET["tab"] == "vehicles" ? "show active" : "" }}" id="vehicles" role="tabpanel" aria-labelledby="vehicles-tab">
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a href="{{ route("vehicles.create") }}?user_id={{ $user->id }}" class="btn btn-primary my-3">{{ __('Add') }} {{ __('vehicle') }}</a>
      </li>
    </ul>

    @include('vehicles._index',[
      "vehicles" => ${cns()}->vehicles
    ])
  </div>

  <div class="tab-pane fade {{ isset($_GET["tab"]) && $_GET["tab"] == "travels" ? "show active" : "" }}" id="travels" role="tabpanel" aria-labelledby="travels-tab">
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a href="{{ route("travels.create") }}?user_id={{ $user->id }}" class="btn btn-primary my-3">{{ __('Add') }} {{ __('travel') }}</a>
      </li>
    </ul>
    @include('travels._index',[
      "travels" => ${cns()}->travels
    ])
  </div>

</div>



<form method="post" action="{{ route( controller_name() . '.destroy',${cns()}) }}" >

  @csrf
  @method('DELETE')

  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">{{ __('Delete') }} {{ __( controllerName() )}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{ __(cns()) }}:</p>
          <h3>{{ ${cns()}->name }}</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">{{ __('Cancel') }}</button>
          <button type="submit" class="btn btn-danger">{{ __('Yes, delete') }}</button>
        </div>
      </div>
    </div>
  </div>

</form>


@endsection
