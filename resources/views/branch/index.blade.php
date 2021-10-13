@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Expance</h1>
        <a href="{{route('branch.add')}}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-circle" title="Add More Expance">
            <i class="fas fa-plus fa-sm text-white-100"></i></a>
</div>
<div class="card shadow mb-4">
    {{-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Branch Expense List</h6>
    </div> --}}
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Branch Mail</th>
                        <th>Branch Phone</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Branch Mail</th>
                        <th>Branch Phone</th>
                        <th>Remark</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($branch as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->contact_no }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->branch_mail}}</td>
                            <td>{{ $item->branch_phone}}</td>
                            <td>
                                    <a href="{{ route('branch.edit',$item->id) }}" class="btn btn-primary btn-circle"><i class="fas fa-edit"></i></a>
                                    {{-- <a href="#" class="btn btn-danger btn-circle "><i class="fas fa-trash"></i></a> --}}
                                    {{-- {!! btn_success_a("A","#","xs","not-square") !!} --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('page-js')

@endsection
