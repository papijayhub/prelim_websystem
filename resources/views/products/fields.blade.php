<!-- Prod Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prod_name', 'Product Name:') !!}
    {!! Form::text('prod_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Prod Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prod_category', 'Product Category:') !!}
    {!! Form::text('prod_category', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>