<div class="form-group">
  <label for="input_name">{{__('Name')}}</label>
  <input type="text" class="form-control col-md-6" id="input_name" placeholder="{{__('Name')}}" name="name" value="{{ $user->name }}" autofocus >
</div>

<div class="form-group">
  <label for="input_lastname">{{__('Lastname')}}</label>
  <input type="text" class="form-control col-md-6" id="input_lastname" placeholder="{{__('Lastname')}}" name="lastname" value="{{ old('lastname', ${cns()}->lastname) }}" autofocus >
</div>

<div class="form-group">
  <label for="input_document">{{__('Document')}}</label>
  <input type="text" class="form-control col-md-6" id="input_document" placeholder="{{__('Document')}}" name="document" value="{{ old('document', ${cns()}->document) }}" autofocus >
</div>

<div class="form-group">
  <label for="input_email">{{__('Email')}}</label>
  <input type="text" class="form-control col-md-6" id="input_email" placeholder="{{__('Email')}}" name="email" value="{{ old('email', ${cns()}->email) }}" autofocus >
</div>

<div class="form-group">
  <label for="input_phone">{{__('Phone')}}</label>
  <input type="text" class="form-control col-md-6" id="input_phone" placeholder="{{__('Phone')}}" name="phone" value="{{ old('phone', ${cns()}->phone) }}" autofocus >
</div>

<div class="form-group">
  <label for="input_password">{{__('Password')}} ({{ __("Optional") }})</label>
  <input type="password" class="form-control col-md-6" id="input_password" placeholder="{{__('Password')}}" name="password" value="{{ old('password', '' ) }}" autofocus >
</div>


@if( auth()->user()->isAdmin() && ${cns()}->id != auth()->user()->id )
<div class="custom-control custom-switch">
  <input type="hidden" name="is_admin" value="0" />
  <input type="checkbox" class="custom-control-input" value="1" name="is_admin" id="is_admin" {{ old('is_admin', ${cns()}->is_admin) ?  "checked" : "" }}>
  <label class="custom-control-label" for="is_admin">{{__('Is admin?')}}</label>
</div>
@endif

<div class="row">
  <div class="col-6">

    <hr>
    <label>Chofer</label>
    <div class="row">
      <div class="col">
        @if( auth()->user()->isAdmin() )
        <div class="custom-control custom-switch">
          <input type="hidden" name="is_driver" value="0" />
          <input type="checkbox" class="custom-control-input" value="1" name="is_driver" id="is_driver" {{ old('is_driver', ${cns()}->is_driver) ?  "checked" : "" }}>
          <label class="custom-control-label" for="is_driver">{{__('Is driver?')}}</label>
        </div>
        @endif
      </div>
      <div class="col">
        @if( auth()->user()->isAdmin() )
        <div class="custom-control custom-switch">
          <input type="hidden" name="available" value="0" />
          <input type="checkbox" class="custom-control-input" value="1" name="available" id="available" {{ old('available', ${cns()}->available) ?  "checked" : "" }}>
          <label class="custom-control-label" for="available">{{__('Available?')}}</label>
        </div>
        @endif
      </div>
    </div>

  </div>
</div>

<!-- CONTROL -->
<hr>
<div class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-success">{{ $btnText }}</button>
    <a href="{{ route( controller_name() . '.index') }}" class="btn btn-secondary">{{ __('Cancelar') }}</a>
  </div>
</div>