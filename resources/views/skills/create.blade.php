@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Skill details</h2>

    <form action="/skill" method='POST' class="needs-validation" novalidate>
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Skill Name</label>
            <input type="text" class="form-control" id="name" name='name' placeholder='Enter Skill Name' required>
            <div class="invalid-feedback">
                Please enter the skill name.
            </div>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-control" name="rating" id="rating">

              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
  
            </select>
            <div class="invalid-feedback">
              Please enter the skill rating.
          </div>
        </div>



        <button type="submit" class="btn btn-primary">Save and Next</button>

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
