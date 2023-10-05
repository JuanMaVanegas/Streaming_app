<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-bordered" id="transactions-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Qrcode Owner Id</th>
                <th>Qrcode Id</th>
                <th>Payment Method</th>
                <th>Message</th>
                <th>Amount</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td><a href="{{ route('users.show',$transaction->user_id) }}">{{ $transaction->user_id }}</a></td>
                    <td>{{ $transaction->qrcode_owner_id }}</td>
                    <td>{{ $transaction->qrcode_id }}</td>
                    <td>{{ $transaction->payment_method }}</td>
                    <td>{{ $transaction->message }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('transactions.show',$transaction->id) }}"><i class="far fa-eye"></i> Show</a>
                        <a class="btn btn-primary" href="{{ route('transactions.edit',$transaction->id) }}"><i class="far fa-edit"></i> Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['transactions.destroy', $transaction->id],'style'=>'display:inline']) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $transactions])
        </div>
    </div>
</div>
