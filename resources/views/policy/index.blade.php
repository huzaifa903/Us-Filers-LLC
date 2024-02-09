@extends('layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center p-3 py-0">
            <h4 class="fw-bold py-3 mb-2"><a href="{{ url('dashboard') }}" class="text-muted fw-light">Dashboard </a><span
                    class="color">/ Policies
            </h4></span>
            <button class="btn btn-secondary create-new btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" tabindex="0"
                aria-controls="DataTables_Table_0" type="button"><span><i class="mdi mdi-filter-outline me-sm-1"></i>
                    <span class="d-none d-sm-inline-block">Filters</span></span></button>
        </div>


        <div class="card-body">
            <div class="col-12">
                <div class="card mb-4 w-100">
                    <div class="collapse" id="collapseExample">
                        <div class="d-grid p-3 border">
                            <form method="GET" id="myForm" action="{{ url('/policies') }}"
                                enctype="multipart/form-data" id="formValidationExamples" class="row g-3">
                                @csrf
                                <div class="col-md-3">
                                    <div class="input-group input-group-merge mb-2">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="mdi mdi-account-outline"></i></span>
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" required class="form-control name-validate"
                                                value="{{ request('name') }}" id="basic-icon-default-fullname"
                                                placeholder="Enter Name" name="name" aria-label="Enter Name"
                                                aria-describedby="basic-icon-default-fullname2" />
                                            <label for="basic-icon-default-fullname"> Name</label>
                                        </div>
                                    </div>
                                    <span class="text-danger validation-name" style="display: none;">
                                        <i class="mdi mdi-alert"></i> Name is invalid
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-merge mb-2">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                class="mdi mdi-numeric"></i></span>
                                        <div class="form-floating form-floating-outline">
                                            <input class="form-control" type="date" placeholder="Select Start Date"
                                                name="start_date" value="{{ request('start_date') }}">
                                            <label for="basic-icon-default-phone"> Start Date</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-merge mb-2">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="mdi mdi-account-outline"></i></span>
                                        <div class="form-floating form-floating-outline">

                                            <input class="form-control" type="date" placeholder="Select End Date"
                                                name="end_date" value="{{ request('end_date') }}">
                                            <label for="basic-icon-default-phone"> End Date</label>

                                        </div>
                                    </div>
                                </div>
                                {{-- <span class="text-danger validation-name" style="display: none;">
                                        <i class="mdi mdi-alert"></i> Name is invalid
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-merge mb-2">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                class="mdi mdi-phone"></i></span>
                                        <div class="form-floating form-floating-outline">
                                            <input name="phone_no" type="text" id="basic-icon-default-phone"
                                                class="form-control phone-mask number-validate"
                                                value="{{ request('phone_no') }}" placeholder="Enter Your Number"
                                                aria-label="Enter Phone No." aria-describedby="basic-icon-default-phone2" />
                                            <label for="basic-icon-default-phone">Phone No</label>
                                        </div>
                                    </div>
                                    <span class="text-danger validation-number" style="display: none;">
                                        <i class="mdi mdi-alert"></i> Number is invalid
                                    </span>
                                 --}}

                                {{-- <div class="col-md-3">
                                    <div class="input-group input-group-merge mb-2">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                class="mdi mdi-numeric"></i></span>
                                        <div class="form-floating form-floating-outline">
                                            <input name="cnic" type="text" id="basic-icon-default-phone"
                                                placeholder="xxxxx-xxxxxxx-x" class="form-control"
                                                value="{{ request('cnic') }}" data-inputmask='"mask": "99999-9999999-9"'
                                                aria-label="Enter Cnic Number"
                                                aria-describedby="basic-icon-default-phone2" />
                                            <label for="basic-icon-default-phone">Cnic</label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="d-flex justify-content-end p-3 py-0">
                                    <button class="btn btn-secondary create-new btn-primary" tabindex="0"
                                        type="submit"><span><i class="mdi mdi-magnify"></i>
                                            <span class="d-none d-sm-inline-block">Search</span></span></button>
                                    <a href="{{ url('/policies') }}" class="btn btn-danger" tabindex="0"><span><i
                                                class="mdi mdi-close"></i>
                                            <span class="d-none d-sm-inline-block">Clear</span></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="head-label text-center">
                </div>
                <div class="dt-action-buttons pt-3 pt-md-0">
                    <div class="dt-buttons btn-group flex-wrap">
                        <a href="{{ url('/policy/add') }}" class="btn btn-secondary create-new btn-primary" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button"><span><i class="mdi mdi-plus me-sm-1"></i>
                                <span class="d-none d-sm-inline-block">Add New</span></span></a>
                    </div>

                </div>
            </div>
            <div class="card-datatable table-responsive pt-0 p-3">

                <table class="datatables-basic table table-bordered">
                    <div class="col-md-8">
                        <p>Showing {{ $policies->firstItem() }} to {{ $policies->lastItem() }} of {{ $policies->total() }}
                            entries</p>
                    </div>
                    <thead>
                        <tr>

                            <th>
                                <h6>S No.</h6>
                            </th>
                            <th>
                                <h6>Name</h6>
                            </th>
                            <th>
                                <h6>Project</h6>
                            </th>
                            <th>
                                <h6>Start Date</h6>
                            </th>
                            <th>
                                <h6>End Date</h6>
                            </th>
                            <th>
                                <h6>Actions</h6>
                            </th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($policies as $index => $policy)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $policy->name }}</td>
                                <td>Test</td>
                                {{-- <td>{{ @$policy->projectName->name ?? '--' }}</td> --}}
                                <td>{{ \Carbon\Carbon::parse($policy->start_date)->format('M d Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($policy->end_date)->format('M d Y') }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        {{-- <a class="btn btn-warning me-2 p-2-5"
                                            href="{{ url('/patient-profile' . '/' . $policy->id) }}"><i
                                                class="fa-solid fa-eye"></i>
                                        </a> --}}
                                        <a class="btn btn-primary me-2 p-2-5"
                                            href="{{ url('/policy/edit/' . $policy->id) }}"><i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-info me-2 p-2-5" download
                                            href="{{ url('/uploads/policy' . '/' . $policy->file) }}"><i
                                                class="fa fa-download"></i>
                                        </a>
                                        <form method="post" action="{{ url('/policy/delete/' . $policy->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger p-2-5">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div class="card-footer d-flex justify-content-end align-items-end">
                <div class="mb-3 me-3">
                    <label for="perPage" class="form-label">Show Items:</label>
                    <select id="perPage" name="perPage" class="form-select" onchange="changePerPage(this)">
                        <option value="5" @if ($perPage == 5) selected @endif>5</option>
                        <option value="10" @if ($perPage == 10) selected @endif>10</option>
                        <option value="15" @if ($perPage == 15) selected @endif>15</option>
                        <option value="25" @if ($perPage == 25) selected @endif>25</option>
                    </select>
                </div>

                {{ $policies->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div>
    <script>
        function changePerPage(select) {
            const perPage = select.value;
            window.location.href = `{{ url('policies') }}?perPage=${perPage}`;
        }
    </script>
@endsection
