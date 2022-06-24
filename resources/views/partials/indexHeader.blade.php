<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ __(controllerName()) }}</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      {{-- <button type="button" class="btn btn-sm btn-outline-primary">Share</button> --}}
      {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Export</button> --}}
      @if (controllerName() == "Transports")
      <a href="{{ route( controller_name() . "map") }}{{ isset($fromController) ? $fromController : "" }}" class="btn btn-primary">{{ __("Map") }} {{ __(cns()) }}</a>
      @endif
      <a href="{{ route( controller_name() . ".create") }}{{ isset($fromController) ? $fromController : "" }}" class="btn btn-primary">{{ __("Add") }} {{ __(cns()) }}</a>
    </div>
    {{-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar"></span>
      This week
    </button> --}}
  </div>
</div>