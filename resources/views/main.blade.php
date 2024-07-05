@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>welcome to cv builder</h2><br>
        <a class="btn btn-primary" href="{{route('user-detail.create')}}" role="button">Build your cv now</a>
    </div>
@endsection

