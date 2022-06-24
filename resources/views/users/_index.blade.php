<div class="table-responsive">
  <table class="table table-striped table-hover table-bordered datatable">
    <thead>
      <tr>
        <th>#</th>
        <th>{{ __("Name") }}</th>
        <th>{{ __("Lastname") }}</th>
        <th>{{ __("Document") }}</th>
        <th>{{ __("Email") }}</th>
        <th>{{ __("Phone") }}</th>
        {{-- <th>{{ __("Admin?") }}</th> --}}
        <th>{{ __("Chofer?") }}</th>
        {{-- <th>{{ __("Disponible?") }}</th> --}}
        <th>{{ __("Created at") }}</th>
        <th>{{ __("Updated at") }}</th>
        <th width="150px">{{ __("Actions") }}</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( ${controller_name()} as $item )
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->lastname }}</td>
            <td>{{ $item->document }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            {{-- <td>{{ $item->is_admin ? "Admin" : "Usuario" }}</td> --}}
            <td>
              @if ($item->is_driver)
                Conductor
              {{ $item->available ? "Disponible" : "Indispuesto" }}
              @else
                Pasajero
                ({{ count($item->places) }} Lugares)
              @endif
            </td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td width="100px">
              <a href="{{ route(controller_name().'.show',$item) }}" class="btn btn-outline-secondary btn-sm">Ver</a>
              <a href="{{ route(controller_name().'.edit',$item) }}"  class="btn btn-primary btn-sm"> Editar</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>