@extends('layout.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-2"><a href="{{ url('/dashboard') }}" class="text-muted fw-light">Dashboard </a><a
                href="{{ url('/policies') }}" class="text-muted fw-light">/ Policy</a><span class="color"> /</span><span
                class="text-heading fw-bold text-color"> Edit</span>
        </h4>
        <div class="row">
            <!-- FormValidation -->
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Edit Policy</h5>
                    <div class="card-body">
                        <form method="POST" id="myForm" action="{{ url('/policy/edit/' . $policy->id) }}"
                            enctype="multipart/form-data" id="formValidationExamples" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <div class="input-group input-group-merge mb-2">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="mdi mdi-account-outline"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" required class="form-control name-validate"
                                            id="basic-icon-default-fullname" placeholder="Enter Name" name="name"
                                            value="{{ $policy->name }}" aria-label="Enter Name"
                                            aria-describedby="basic-icon-default-fullname2" />
                                        <label for="basic-icon-default-fullname">Policy Name</label>
                                    </div>
                                </div>
                                <span class="text-danger validation-name" style="display: none;">
                                    <i class="mdi mdi-alert"></i> Name is invalid
                                </span>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select id="project_id" name="project_id" class="select2 form-select form-select-lg"
                                        data-allow-clear="true">
                                        <option value="">Please Select</option>
                                        @foreach ($projects as $project)
                                            <option {{ @$project->id == $policy->project_id ? 'selected' : '' }}
                                                value="{{ $project->id }}">{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="role">Project</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-merge mb-2">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="mdi mdi-calendar"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <input required name="start_date_policy" type="date"
                                            id="basic-icon-default-phone" class="form-control" placeholder="YYYY-MM-DD"
                                            aria-label="YYYY-MM-DD" value="{{ $policy->start_date }}"
                                            aria-describedby="basic-icon-default-phone2" />
                                        <label for="basic-icon-default-phone">Start Date Of Policy</label>
                                    </div>
                                </div>
                                <span class="text-danger validation-dob" style="display: none;">
                                    <i class="mdi mdi-alert"></i> Date of birth cannot be in the future
                                </span>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-merge mb-2">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="mdi mdi-calendar"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <input required name="dob" type="date" id="basic-icon-default-phone"
                                            value="{{ $policy->end_date }}" class="form-control" placeholder="YYYY-MM-DD"
                                            aria-label="YYYY-MM-DD" aria-describedby="basic-icon-default-phone2" />
                                        <label for="basic-icon-default-phone">End Date Of Policy</label>
                                    </div>
                                </div>
                                <span class="text-danger validation-dob" style="display: none;">
                                    <i class="mdi mdi-alert"></i> Date of birth cannot be in the future
                                </span>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-merge mb-2">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="mdi mdi-image-outline"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <div class="custom-file-upload">
                                            <label for="profile-pic-input"
                                                class="custom-file-label">{{ $policy->file ? $policy->file : 'Choose a file' }}</label>
                                            <input type="file" name="file" class="profile-pic-input"
                                                id="profile-pic-input" accept=".pdf" />
                                        </div>
                                    </div>
                                </div>
                                @if ($policy->file)
                                    <div class="image-preview-box" style="display:block;">
                                        <div class="image-preview">
                                            <button id="remove-profile-pic" type="button"
                                                class="remove-button">x</button>
                                            <img id="profile-pic-preview" class="profile-pic-preview"
                                                src="{{ url('uploads/policy/' . $policy->file) }}" alt="Pdf" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <a href="{{ url('/policies') }}" type="back"
                                    class="btn btn-label-secondary waves-effect">
                                    Back
                                </a>
                                <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /FormValidation -->
        </div>
    </div>
@endsection

<script src="{{ url('assets/vendor/libs/jquery/jquery.js') }}"></script>

<script>
    // Function to update the file label and show the remove button
    function updateFileLabelAndButton(filename) {
        $(".custom-file-label").html(filename);
        $("#remove-profile-pic").show();
        $(".image-preview").show();
        $(".image-preview-box").show();
    }

    // Function to reset the file input and hide the remove button
    function resetFileInput() {
        $(".custom-file-label").html("Choose a file");
        $("#remove-profile-pic").hide();
        $(".image-preview").hide();
        $(".image-preview-box").hide();
        $("#profile-pic-input").val("");
        $("#profile-pic-preview").hide().attr("src", "");
    }

    // Handle file input change event
    $("#profile-pic-input").change(function() {
        const fileInput = this;
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $("#profile-pic-preview").attr("src", e.target.result).show();
                updateFileLabelAndButton(fileInput.files[0].name);
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    });

    // Handle remove button click event
    $("#remove-profile-pic").click(function() {
        resetFileInput();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Attach a click event handler to the remove button
        var removeButton = document.querySelector(".remove-button");

        removeButton.addEventListener('click', function() {
            // Remove the image preview by removing the whole image-preview-box
            var imagePreviewBox = document.querySelector(".image-preview-box");
            imagePreviewBox.remove();

            // Optionally, you can reset the value of the hidden input field if needed
            document.getElementById('profile-pic-input').value = "";
            document.getElementsByClassName("custom-file-label")[0].innerHTML = "Choose a file";

        });
    });
</script>
