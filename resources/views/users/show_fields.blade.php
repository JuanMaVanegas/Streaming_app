<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('roles', 'Roles:') !!}
    <br>
    @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
        @endforeach
    @endif
</div>

                   