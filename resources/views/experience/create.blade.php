@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Work details</h2>

    <form action="/experiences" method="POST" class="needs-validation" novalidate>
        @csrf

        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Enter Job Title" required>
            <div class="invalid-feedback">
                Please enter the job title.
            </div>
        </div>

        <div class="mb-3">
            <label for="employer" class="form-label">Employer</label>
            <input type="text" class="form-control" id="employer" name="employer" placeholder="Enter Employer" required>
            <div class="invalid-feedback">
                Please enter the employer.
            </div>
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" required>
            <div class="invalid-feedback">
                Please enter the city.
            </div>
        </div>

        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" id="state" name="state" placeholder="Enter State" required>
            <div class="invalid-feedback">
                Please enter the state.
            </div>
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
            <div class="invalid-feedback">
                Please enter a valid start date.
            </div>
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
            <div class="invalid-feedback">
                Please enter a valid end date.
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
