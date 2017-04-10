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

    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-toolbar">
                    <div class="md-card-toolbar-actions">
                        @permission('role-create')
                        <a  href="{{ route('roles.index') }}" data-uk-tooltip="{pos:'top'}" title="Go Back To Roles">
                            <i class="md-icon material-icons">keyboard_arrow_left</i>
                        </a>
                        @endpermission
                        <i  class="md-icon material-icons md-card-fullscreen-activate"></i>
                    </div>
                    <h3 class="md-card-toolbar-heading-text">
                        <i class="material-icons">create</i>
                        Edit Role
                    </h3>
                </div>

                <div class="md-card-content">
                    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id], 'id'=>'form_validation', 'class'=>'uk-form-stacked', 'novalidate'=>'']) !!}
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-2 uk-row-first">
                            <div class="uk-grid" data-uk-grid-margin="">
                                <div class="uk-width-medium-1-2 uk-row-first">
                                    <div class="parsley-row">
                                        <label for="name">Name<span class="req">*</span></label>
                                        {!! Form::text('name', null, array('class' => 'md-input', 'required'=> true)) !!}
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div class="parsley-row">
                                        <label for="display_name">Display Name<span class="req">*</span></label>
                                        {!! Form::text('display_name', null, array('class' => 'md-input', 'required'=> true)) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-1-1">
                                    <div class="parsley-row">
                                        <label for="message">Description (100 max)<span class="req">*</span></label>
                                        {!! Form::textarea('description', null, array('class' => 'md-input', 'rows' => 2)) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="uk-grid">
                                <div class="uk-width-1-1">
                                    <button type="submit" class="md-btn md-btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>

                        <div class="uk-width-medium-1-2">
                            <div class="form-group">
                                <strong>Permissions:</strong>
                                <br/>
                                @foreach($permission as $value)
                                    <p>
                                        {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('data-md-icheck')) }}
                                        <label for="checkbox_demo_1" class="inline-label">{{ $value->display_name }}</label>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional_scripts')
    <script>
        var asset_url = "{{asset('/')}}";
    </script>
    <script src="{{ asset('js/parsley_form_validate.js') }}"></script>
@endsection