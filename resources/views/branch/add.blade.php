@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Branch</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <form action="{{ route('branch.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h6 class="m-0 font-weight-bold text-primary">Name:</h6>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <h6 class="m-0 font-weight-bold text-primary">Contact No: </h6>
                    <input type="number" class="form-control" name="contact_no" required>
                </div>
                <div class="col-md-6 mb-3">
                    <h6 class="m-0 font-weight-bold text-primary">Address:</h6>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <div class="col-md-6 mb-3">
                    <h6 class="m-0 font-weight-bold text-primary">Branch Mail: </h6>
                    <input type="text" class="form-control" name="branch_mail" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection

@section('page-js')

<script>

</script>

@endsection
