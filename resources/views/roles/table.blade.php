<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td style="width: 30%">
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}"><i class="far fa-eye"></i> Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}"><i class="far fa-edit"></i> Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                {!! Form::button('<i class="far fa-trash-alt"></i> Delete',['type' => 'submit','class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
