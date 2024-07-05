@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Skill Detail</h2>

    <form action="{{ route('skill.update', $skill) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Skill Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Skill Name" value="{{ $skill->name }}" required>
            <div class="invalid-feedback">
                Please enter the skill name.
            </div>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="text" class="form-control" id="rating" name="rating" placeholder="Enter Rating" value="{{ $skill->rating }}" required>
            <div class="invalid-feedback">
                Please enter the skill rating.
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

    </form>

</div>

<script>
    (function () {
        'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
    .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>

@endsection