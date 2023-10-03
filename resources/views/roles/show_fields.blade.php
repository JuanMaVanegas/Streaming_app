<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $role->name }}</p>
</div>

<!-- Permission -->
<div class="col-sm-12">
    {!! Form::label('permission', 'Permisos:') !!}
    @if(!empty($rolePermissions))
        <br>
        @foreach($rolePermissions as $v)
            <p>{{ $v->name }}</p>
        @endforeach
    @endif
</div>

