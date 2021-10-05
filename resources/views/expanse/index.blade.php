@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Expance</h1>
        <a href="{{route('BranchExpense.add')}}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-circle" title="Add More Expance">
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
                        <th>Date</th>
                        <th>Branch</th>
                        <th>Booking</th>
                        <th>Parsl</th>
                        <th>Office Expance</th>
                        <th>Extra Income</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Date</th>
                        <th>Branch</th>
                        <th>Booking</th>
                        <th>Parsl</th>
                        <th>Office Expance</th>
                        <th>Extra Income</th>
                        <th>Remark</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($BranchExpense as $item)
                        <tr>
                            <td>{{ $item->expanse_date }}</td>
                            <td>{{ $item->branch_name }}</td>
                            <td>{{ $item->booking }}</td>
                            <td>{{ $item->parsl}}</td>
                            <td>{{ $item->office_expanse}}</td>
                            <td>{{ $item->extra_income}}</td>
                            <td>
                                    <a href="" class="btn btn-primary btn-circle "><i class="fas fa-edit"></i></a>
                                    <a href="" title="{{ $item->remark}}" class="btn btn-success btn-circle "><i class="fa fa-question-circle" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-danger btn-circle "><i class="fas fa-trash"></i></a>
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

<script>
    $('.expance').change(function(){
        let bus=$(this).data('bus');
        let branch=$(this).data('branch');
        let type=$(this).data('type');
        console.log(type);
        console.log("id"+"#"+bus+'_total_'+type);
        let total=$("#"+bus+'_total_'+type).val();
        $("#"+bus+'_total_'+type).val(parseInt(total)+parseInt($(this).val()));
    });
</script>

@endsection
