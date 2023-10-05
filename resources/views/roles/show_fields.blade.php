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

<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuarios</h1>
                </div>
                <br>
                <table class="table table-bordered" id="user-table">
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                </tr>
                @foreach ($role->users as $us)

                <tr>
                    <td><a href="{{ route('users.show',$us->id) }}"> {{ $us->id }} </a></td>
                    <td>{{ $us->name }}</td>

                </tr>
                 @endforeach
                </table>
            </div>
        </div>
    </section>
