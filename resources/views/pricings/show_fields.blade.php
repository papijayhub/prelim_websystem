<!-- Product Price Field -->
<div class="col-sm-12">
    {!! Form::label('product_price', 'Product Price:') !!}
    <p>{{ $pricing->product_price }}</p>
</div>

<!-- Service Price Field -->
<div class="col-sm-12">
    {!! Form::label('service_price', 'Service Price:') !!}
    <p>{{ $pricing->service_price }}</p>
</div>

<!-- Discount Promo Field -->
<div class="col-sm-12">
    {!! Form::label('discount_promo', 'Discount Promo:') !!}
    <p>{{ $pricing->discount_promo }}</p>
</div>

<!-- Coupon Field -->
<div class="col-sm-12">
    {!! Form::label('coupon', 'Coupon:') !!}
    <p>{{ $pricing->coupon }}</p>
</div>

