<!-- Product Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_price', 'Product Price:') !!}
    {!! Form::text('product_price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Service Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_price', 'Service Price:') !!}
    {!! Form::text('service_price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Discount Promo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount_promo', 'Discount Promo:') !!}
    {!! Form::text('discount_promo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Coupon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coupon', 'Coupon:') !!}
    {!! Form::text('coupon', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>