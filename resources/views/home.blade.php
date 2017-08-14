@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">TinyMCE</div>

                    <div class="panel-body">
                        <form method="post">
                            <textarea id="tinymce_this">TinyMCE this!</textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ('scripts')
    @parent
    @include('orange.shared.tinymce', ['wysiwyg' => 'tinymce_this'])
@endsection

