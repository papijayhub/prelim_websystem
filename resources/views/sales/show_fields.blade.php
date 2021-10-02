<!-- Sales Rep Field -->
<div class="col-sm-12">
    {!! Form::label('sales_rep', 'Sales Rep:') !!}
    <p>{{ $sales->sales_rep }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $sales->address }}</p>
</div>

<!-- Item Field -->
<div class="col-sm-12">
    {!! Form::label('item', 'Item:') !!}
    <p>{{ $sales->item }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $sales->quantity }}</p>
</div>

