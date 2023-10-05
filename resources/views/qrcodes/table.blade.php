<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-bordered" id="qrcodes-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Website</th>
                <th>Company Name</th>
                <th>Product Name</th>
                <th>Product Url</th>
                <th>Callback Url</th>
                <th>Qrcode Path</th>
                <th>Product Image</th>
                <th>Amount</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($qrcodes as $qrcode)
                <tr >
                    <td><a href="{{ route('users.show',$qrcode->user_id) }}">{{ $qrcode->user_id }}</a></td>
                    <td><a href="{{ $qrcode->website }}">{{ $qrcode->website }}</a></td>
                    <td>{{ $qrcode->company_name }}</td>
                    <td>{{ $qrcode->product_name }}</td>
                    <td><a href="{{ $qrcode->product_url }} " >{{ $qrcode->product_url }}</a></td>
                    <td><a href="{{ $qrcode->callback_url }}">{{ $qrcode->callback_url }}</a></td>
                    <td><p><img src="{{ asset($qrcode->qrcode_path) }}"></p></td>
                    <td><p><img src="{{ asset($qrcode->product_image) }}" style="width:200px"></p></td>
                    <td>{{ $qrcode->amount }}</td>
                    <td style="width: 100%">
                        <a class="btn btn-info" href="{{ route('qrcodes.show',$qrcode->id) }}"><i class="far fa-eye"></i> Show</a>
                        <a class="btn btn-primary" href="{{ route('qrcodes.edit',$qrcode->id) }}"><i class="far fa-edit"></i> Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['qrcodes.destroy', $qrcode->id],'style'=>'display:inline']) !!}
                                {!! Form::button('<i class="far fa-trash-alt"></i> Delete',['type' => 'submit','class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $qrcodes])
        </div>
    </div>
</div>
