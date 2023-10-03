<table class="table table-bordered" id="user-table">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td style="width: 30%">
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}"><i class="far fa-eye"></i> Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"><i class="far fa-edit"></i> Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
        {!! Form::button('<i class="far fa-trash-alt"></i> Delete',['type' => 'submit','class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}

