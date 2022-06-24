<div class="table-responsive">
  <table class="table table-striped table-hover table-bordered datatable">
    <thead>
      <tr>
        <th>#</th>
        <th>{{ __("Título") }}</th>
        <th>{{ __("Description") }}</th>
        <th>{{ __("Published") }}?</th>
        <th>{{ __("Created at") }}</th>
        <th>{{ __("Updated at") }}</th>
        <th width="150px">{{ __("Actions") }}</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $inmuebles as $item )
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>
              <div class="alert alert-{{ $item->published ? 'success' : 'secondary' }}" >
                {{ $item->published ? 'PUBLICADO' : 'OCULTO' }}
              </div>
            </td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>

            <td width="100px">
              {{-- <a href="{{ route('note', [$item->getTitleUrl(), $item->id]) }}" target="_blank" class="btn btn-outline-secondary btn-sm">Ver</a>
              <a href="{{ route('news.edit',$item) }}" class="btn btn-primary btn-sm"> Editar</a> --}}
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>