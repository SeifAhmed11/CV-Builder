@extends('layouts.app')

@section('content')

<div class="mb-2">

<h2>Education Summary</h2>

<div class="row">
    @foreach($education as $e)
<div class="col-4">
    <div class="card m-1">
        <div class="card-body ">
            <h4 class="card-title text-primary"> {{$e->degree}} {{$e->school_name}} ({{$e->graduation_start_date}} -
                {{$e->graduation_end_date}})</h4>
    
            <a class="btn btn-sm btn-primary" href=" {{route('education.edit', $e)}} " role="button">Edit</a>
    
            <form action="{{route('education.destroy', $e)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
    
                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
    
        </div>
    </div>
</div>
@endforeach
</div>


</div>
<a  href=" {{route('education.create')}} " role="button">+ Add another Education</a>

<div class="row justify-content-between mt-2">

    <a class="col-5 btn btn-secondary" href=" {{route('user-detail.index')}} " role="button">Back</a>

    <a class="col-5 btn btn-primary" href=" {{route('experiences.index')}} " role="button">Work History</a>

</div>




@endsection