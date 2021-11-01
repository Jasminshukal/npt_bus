<div class="row">
    <div class="col-md-6">
        <label for="booking">Booking Amount</label>
        <input id="booking" type="number" class="form-control border-left-success" name="booking" value="{{ $BranchExpense->booking }}">
    </div>
    <div class="col-md-6">
        <label for="no_seat">No Seat</label>
        <input id="no_seat" type="number" class="form-control" name="no_seat" value="{{ $BranchExpense->no_seat }}">
    </div>
    <div class="col-md-6">
        <label for="parsl">Parsl Amount</label>
        <input id="parsl" type="number" class="form-control border-left-success" name="parsl" value="{{ $BranchExpense->parsl }}">
    </div>
    <div class="col-md-6">
        <label for="no_parsl">No Parsl</label>
        <input id="no_parsl" type="number" class="form-control" name="no_parsl" value="{{ $BranchExpense->no_parsl }}">
    </div>
    <div class="col-md-6">
        <label for="extra_income">Extra Income</label>
        <input id="extra_income" type="number" class="form-control border-left-success" name="extra_income" value="{{ $BranchExpense->extra_income }}">
    </div>
    <div class="col-md-6">
        <label for="office_expanse">Office Expanse</label>
        <input id="office_expanse" type="number" class="form-control border-left-danger" name="office_expanse" value="{{ $BranchExpense->office_expanse }}">
    </div>
    <div class="col-md-12">
        <label for="remark">Remark</label>
        <textarea id="remark" type="number" class="form-control" name="remark"></textarea>
    </div>
    <div class="col-md-6">
        <br>
        <input type="submit" class="btn btn-info text-center">
    </div>
</div>
