@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Online Courses') }}</div>
                <form action="/buy" method="POST">
                    
                <button type="submit">Buy</button>
                </form>
                <div class="card-body">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
