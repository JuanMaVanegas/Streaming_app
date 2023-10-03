<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name','required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Email', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password','class', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>
<!-- password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('confirm-password', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('roles', 'Roles:') !!}
    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
</div>



