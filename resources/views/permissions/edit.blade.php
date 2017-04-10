@extends('layouts.layout_master')

@section('content')
    @if (count($errors) > 0)
        <div class="uk-alert uk-alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
        </div>
        <div class="uk-alert uk-alert-danger">
            <ul class="md-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="md-card">
        <div class="md-card-toolbar">
            <h3 class="md-card-toolbar-heading-text">
               Edit Permission
               <a class="md-btn md-btn-primary md-btn-small md-btn-wave-light md-btn-icon waves-effect waves-button waves-light" href="{{ route('permissions.index') }}"> Back</a>
            </h3>
        </div>
        <div class="md-card-content large-padding">
            {!! Form::model($permission, ['method' => 'PATCH','route' => ['permissions.update', $permission->id], 'id'=>'form_validation', 'class'=>'uk-form-stacked', 'novalidate'=>'' ]) !!}
            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-medium-1-2 uk-row-first">
                    <div class="parsley-row">
                        <label for="name">Name<span class="req">*</span></label>
                        {!! Form::text('name', null, array('class' => 'md-input', 'required' => true)) !!}
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="parsley-row">
                        <label for="display_name">Display Name<span class="req">*</span></label>
                        {!! Form::text('display_name', null, array('class' => 'md-input', 'required' => true)) !!}
                        <span class="md-input-bar "></span>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="parsley-row">
                        <label for="message">Description (100 max)<span class="req">*</span></label>
                        {!! Form::textarea('description', null, array('class' => 'md-input', 'required' => true, 'rows' => 2)) !!}
                        <span class="md-input-bar "></span>
                    </div>
                </div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <button type="submit" class="md-btn md-btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('additional_scripts')
    <script>
        var asset_url = "{{asset('/')}}";
    </script>
    <script src="{{ asset('js/parsley_form_validate.js') }}"></script>
@endsection