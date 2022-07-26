@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Online Courses') }}</div>
                @foreach($courses as $course)
                <form action="/buy" method="POST">
                    {{ $course->name }}
                    {{ $course->description }}
                <button type="submit">Buy</button>
                @endforeach
                </form>
                <div class="card-body">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
