@extends('layouts.app')

@section('content')

<h2>USer Detail</h2>


<div class="card">
    <div class="card-body">
    <h4 class="card-title"> {{$details->fullname}}  {{$details->email}}  {{$details->phone}}</h4>


        <a class="btn btn-sm btn-primary" href=" {{route('user-detail.edit', $details)}} " role="button">Edit</a>

    </div>
</div>

<div class="row justify-content-between mt-2">
    <a class="col-12 btn btn-primary " href=" {{route('education.index')}} " role="button">Education</a>
</div>

@endsection