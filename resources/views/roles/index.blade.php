@extends('layouts.layout_master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="uk-alert uk-alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-toolbar">
                    <div class="md-card-toolbar-actions">
                        @permission('role-create')
                        <a  href="{{ route('roles.create') }}" data-uk-tooltip="{pos:'botton'}" title="Create New Role">
                            <i class="md-icon material-icons">add_box</i>
                        </a>
                        @endpermission
                        <i  class="md-icon material-icons md-card-fullscreen-activate"></i>
                    </div>
                    <h3 class="md-card-toolbar-heading-text">
                        <i class="material-icons">view_headline</i>
                        Manage Roles
                    </h3>
                </div>
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-nowrap table_check">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $role->display_name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>
                                            <a href="{{ route('roles.show',$role->id) }}" data-uk-tooltip="{pos:'top'}" title="Details"><i class="md-icon material-icons">visibility</i></a>
                                            {{--@permission('role-edit')--}}
                                              <a href="{{ route('roles.edit',$role->id) }}" data-uk-tooltip="{pos:'top'}" title="Edit"><i class="md-icon material-icons">create</i></a>
                                            {{--@endpermission--}}
                                            @permission('role-delete')
                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                {{--{!! Form::submit('Delete', ['class' => 'md-btn']) !!}--}}
                                                <a href="javascript:void(0)" onclick="$(this).closest('form').submit(); return false;" data-uk-tooltip="{pos:'top'}" title="Delete"><i class="md-icon material-icons">clear</i></a>
                                            {!! Form::close() !!}
                                            @endpermission
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {!! $roles->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection