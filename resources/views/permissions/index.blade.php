@extends('layouts.layout_master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="uk-alert uk-alert-success" data-uk-alert="">
            <a href="#" class="uk-alert-close uk-close"></a>
            {{ $message }}
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="uk-alert uk-alert-danger" data-uk-alert="">
            <a href="#" class="uk-alert-close uk-close"></a>
            {{ $message }}
        </div>
    @endif

    <div class="md-fab-wrapper md-fab-speed-dial">
        <a class="md-fab md-fab-primary" href="javascript:void(0)" data-uk-tooltip="{pos:'right'}" title="Flag">
            <i class="material-icons"></i>
            <i class="material-icons md-fab-action-close" style="display:none"></i>
        </a>
    </div>

    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <div class="md-card-toolbar-actions">
                        <i class="md-icon material-icons md-card-fullscreen-activate"></i>
                        <i class="md-icon material-icons"></i>
                        <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                            <i class="md-icon material-icons"></i>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav">
                                    <li><a href="#">Action 1</a></li>
                                    <li><a href="#">Action 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3 class="md-card-toolbar-heading-text">
                        Permission Management
                        {{--@permission('permission-add')--}}
                        <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" href="{{ route('permissions.create') }}">
                            Create New Permission
                        </a>
                        {{--@endpermission--}}
                    </h3>
                </div>
                <div class="md-card-content">

                    <table class="uk-table uk-table-no-border uk-text-nowrap">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Display Name</th>
                            <th>Description</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($permissions as $key => $permission)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->display_name }}</td>
                                <td>{{ $permission->description }}</td>
                                <td>
                                    <a class="md-btn md-btn-primary md-btn-mini md-btn-wave-light waves-effect waves-button waves-light" href="{{ route('permissions.show',$permission->id) }}">Show</a>
                                    @permission('permission-edit')
                                    <a class="md-btn md-btn-primary md-btn-mini md-btn-wave-light waves-effect waves-button waves-light" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                                    @endpermission
                                    @permission('permission-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'md-btn md-btn-primary md-btn-mini waves-effect waves-button waves-light']) !!}
                                    {!! Form::close() !!}
                                    @endpermission
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $permissions->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection