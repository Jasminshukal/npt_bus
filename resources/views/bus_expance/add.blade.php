@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Expance</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <form action="{{ route('BranchExpense.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-5">
                    <h6 class="m-0 font-weight-bold text-primary">Select Date:</h6>
                    <input type="date" class="form-control" name="expanse_date" required>
                </div>
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">Select Branch: </h6>
                    <select name="branches_id" id="" class="form-control" required>
                        @forelse ($branches as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            <option disabled>No Branch Exist hear</option>
                        @endforelse
                    </select>
                </div>
                <div class="col-md-1">
                    <h6 class="m-0 font-weight-bold text-primary">Search: </h6>
                    {{-- {!! btn_primary_a('<i class="fa fa-search" aria-hidden="true"></i>','#','md','square','find','') !!} --}}
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>

    </div>
    {{-- <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Booking</th>
                        <th>Parsl</th>
                        <th>Office Expance</th>
                        <th>Extra Income</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Branch</th>
                        <th>Booking</th>
                        <th>Parsl</th>
                        <th>Office Expance</th>
                        <th>Extra Income</th>
                        <th>Remark</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($branches as $branch)
                        <tr>
                            <td>{{ $branch->name }}</td>
                            <td><input data-type="booking" data-branch="{{ $branch->name }}" data-bus="1" name="{{ $branch->name }}_booking" class="form-control expance expance_1" type="number"></td>
                            <td><input data-type="parsl" data-branch="{{ $branch->name }}" data-bus="1" name="{{  $branch->name  }}_parsl" type="number" class="form-control expance"></td>
                            <td><input data-type="officeexpance" data-branch="{{ $branch->name }}" data-bus="1" name="{{  $branch->name  }}_officeexpance" class="form-control expance" type="number"></td>
                            <td><input data-type="extraincome" data-branch="{{ $branch->name }}" data-bus="1" name="{{  $branch->name  }}_extraincome" class="form-control expance" type="number"></td>
                            <td><textarea class="form-control" name="{{  $branch->name  }}_remark" data-branch="7485" data-bus="1"></textarea></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>Total</td>
                        <td><input class="form-control" id="1_total_booking" value="0" readonly></td>
                        <td><input class="form-control" id="1_total_parsl" value="0" readonly></td>
                        <td><input class="form-control" id="1_total_officeexpance" value="0" readonly></td>
                        <td><input class="form-control" id="1_total_extraincome" value="0" readonly></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
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
