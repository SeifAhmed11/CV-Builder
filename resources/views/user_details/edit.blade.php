@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tell us something about you</h2>

    <form action="{{ route('user-detail.update', $userDetail) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $userDetail->fullname }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $userDetail->email }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $userDetail->phone }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $userDetail->address }}">
        </div>

        {{-- <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea class="form-control" id="summary" name="summary" rows="3">{{ $userDetail->summary }}</textarea>
        </div> --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
