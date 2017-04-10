@extends('layouts.layout_master')

@section('content')

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
                    Dashboard
                </h3>
            </div>
            <div class="md-card-content">
                You are logged in!
            </div>
        </div>
    </div>
</div>
@endsection
