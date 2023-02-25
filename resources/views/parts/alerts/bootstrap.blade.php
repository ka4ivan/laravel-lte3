<div class="container-fluid p-2">
@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> {{ trans('lte::alerts.excellent') }}</h5>
    {{ $message }}
</div>
@endif

@if($message = Session::get('info'))
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-info"></i> {{ trans('lte::alerts.information') }}</h5>
    {{ $message }}
</div>
@endif

@if($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-exclamation-triangle"></i> {{ trans('lte::alerts.warning') }}</h5>
    {{ $message }}
</div>
@endif

@if($message = Session::get('error') || Session::get('danger'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> {{ trans('lte::alerts.failure') }}</h5>
    {{ $message }}
</div>
@endif

@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> {{ trans('lte::alerts.failure') }}</h5>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif
</div>
