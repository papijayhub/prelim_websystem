<!-- Add For Deliver Field -->
<div class="form-group col-sm-6">
    {!! Form::label('add_for_deliver', 'Address For Delivery:') !!}
    {!! Form::text('add_for_deliver', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact', 'Contact Number:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email Address:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>