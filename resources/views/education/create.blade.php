@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Education details</h2>

    <form action="/education" method="POST" class="needs-validation" novalidate>
        @csrf

        <div class="mb-3">
            <label for="school_name" class="form-label">University Name</label>
            <input type="text" class="form-control" id="school_name" name="school_name" placeholder="Enter University Name" required>
            <div class="invalid-feedback">
                Please enter the university name.
            </div>
        </div>

        <div class="mb-3">
            <label for="school_location" class="form-label">Location</label>
            <input type="text" class="form-control" id="school_location" name="school_location" placeholder="Enter Location" required>
            <div class="invalid-feedback">
                Please enter the location.
            </div>
        </div>

        <div class="mb-3">
            <label for="degree" class="form-label">Degree</label>
            <input type="text" class="form-control" id="degree" name="degree" placeholder="Enter Degree" required>
            <div class="invalid-feedback">
                Please enter the degree.
            </div>
        </div>

        <div class="mb-3">
            <label for="field_of_study" class="form-label">Field of Study</label>
            <input type="text" class="form-control" id="field_of_study" name="field_of_study" placeholder="Enter Field of Study" required>
            <div class="invalid-feedback">
                Please enter the field of study.
            </div>
        </div>

        <div class="mb-3">
            <label for="graduation_start_date" class="form-label">Graduation Start Date</label>
            <input type="date" class="form-control" id="graduation_start_date" name="graduation_start_date" required>
            <div class="invalid-feedback">
                Please enter a valid graduation start date.
            </div>
        </div>

        <div class="mb-3">
            <label for="graduation_end_date" class="form-label">Graduation End Date</label>
            <input type="date" class="form-control" id="graduation_end_date" name="graduation_end_date">
            <div class="invalid-feedback">
                Please enter a valid graduation end date.
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Education</button>

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
