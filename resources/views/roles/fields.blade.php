<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
</div>

<!-- Permission-->
<div class="form-group col-sm-6">
    {!! Form::label('permission', 'Permisos:') !!}
    <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
</div>