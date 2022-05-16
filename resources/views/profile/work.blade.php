@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('layouts.profile_navigation')
                </div>

                <div class="card-body">
                    @if (session('status'))

                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h1>Work</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
