@extends('layouts.app')

@section('content')

<h2>Skill  Summary</h2>
<div class="row">

    @foreach($skills as $e)
    <div class="col-4">
        <div class="card  m-1">
        <div class="card-body">
            <h4 class="card-title  text-primary"> {{$e->name}} ( {{$e->rating}} )</h4>


        <a  class="btn btn-sm btn-primary" href=" {{route('skill.edit', $e)}} " role="button">Edit</a>

            <form action="{{route('skill.destroy', $e)}}" method="POST" style="display: inline">
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
    <a href=" {{route('skill.create')}} ">+ Add skill</a>
</div>

<div class="row justify-content-between mt-2">

    <a class="col-3 btn btn-secondary" href=" {{route('education.index')}} " role="button">Back</a>

    <a class="col-3 btn btn-primary" target="_blank" href="{{route('resume.index')}}">View</a>
    
    <a class="col-3 btn btn-danger" href="{{route('resume.download')}}" role="button">Download</a>
    
</div>

<div class="row justify-content-between mt-2">
</div>

@endsection