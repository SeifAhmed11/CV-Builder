@extends('layouts.app')

@section('content')

<h2>Work  Summary</h2>

<div class="row">
    
    @foreach($experiences as $e)
    <div class="col-4">
        <div class="card  m-1">
            <div class="card-body text-dark">
                <h4 class="card-title text-primary"> {{$e->job_title}}  ({{$e->start_date}} to {{$e->end_date}}) </h4>

                <ul>
                    <li>{{ $e->employer}}</li>
                    <li>{{ $e->city}}</li>
                    <li>{{ $e->state}}</li>
                </ul>

            <a  class="btn btn-sm btn-primary" href=" {{route('experiences.edit', $e)}} " role="button">Edit</a>

                <form action="{{route('experiences.destroy', $e)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>

            </div>
        </div>
    </div>

    @endforeach

</div>

<div class="mt-2">
    <a href=" {{route('experiences.create')}} ">+ Add Experience</a>
</div>


<div class="row justify-content-between mt-2">

    <a class="col-5 btn btn-secondary" href=" {{route('education.index')}} " role="button">Back</a>

    <a class="col-5 btn btn-primary" href=" {{route('skill.index')}} " role="button">Skills</a>

</div>

@endsection