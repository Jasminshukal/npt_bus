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
        <h6 class="m-0 font-weight-bold text-primary">Date:15-09-2021 </h6>
    </div>
    <div class="card-body">
        @foreach ($buses as $bus)
        <div class="table-responsive">
            <h3># Bus No {{ $bus->name }} - {{ $bus->driver_name }}</h3>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
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
                            <td><input data-type="booking" data-branch="{{ $branch->name }}" data-bus="{{ $bus->id }}" name="{{ $branch->name }}_booking" class="form-control expance expance_{{ $bus->id }}" type="number"></td>
                            <td><input data-type="parsl" data-branch="{{ $branch->name }}" data-bus="{{ $bus->id }}" name="{{  $branch->name  }}_parsl" type="number" class="form-control expance"></td>
                            <td><input data-type="officeexpance" data-branch="{{ $branch->name }}" data-bus="{{ $bus->id }}" name="{{  $branch->name  }}_officeexpance" class="form-control expance" type="number"></td>
                            <td><input data-type="extraincome" data-branch="{{ $branch->name }}" data-bus="{{ $bus->id }}" name="{{  $branch->name  }}_extraincome" class="form-control expance" type="number"></td>
                            <td><textarea class="form-control" name="{{  $branch->name  }}_remark" data-branch="{{ $bus->branch }}" data-bus="{{ $bus->id }}"></textarea></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>Total</td>
                        <td><input class="form-control" id="{{ $bus->id }}_total_booking" value="0" readonly></td>
                        <td><input class="form-control" id="{{ $bus->id }}_total_parsl" value="0" readonly></td>
                        <td><input class="form-control" id="{{ $bus->id }}_total_officeexpance" value="0" readonly></td>
                        <td><input class="form-control" id="{{ $bus->id }}_total_extraincome" value="0" readonly></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach
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
