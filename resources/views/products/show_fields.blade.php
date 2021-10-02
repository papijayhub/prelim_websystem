<!-- Prod Name Field -->
<div class="col-sm-12">
    {!! Form::label('prod_name', 'Prod Name:') !!}
    <p>{{ $product->prod_name }}</p>
</div>

<!-- Prod Category Field -->
<div class="col-sm-12">
    {!! Form::label('prod_category', 'Prod Category:') !!}
    <p>{{ $product->prod_category }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $product->description }}</p>
</div>

