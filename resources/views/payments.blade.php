@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Payments') }}</div>
                @if(auth()->user()->course == "BSIT")

<div class="accordion container my-2" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        First Examination
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <form action="{{ route('bsit') }}" method="POST">
            @csrf
        <button type="submit">Pay</button>
        </form>
      </div>
    </div>
  </div>
                    @endif
                <div class="card-body">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection