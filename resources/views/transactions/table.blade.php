<div class="card-body p-0"> <div class="table-responsive"> <table class="table table-bordered" id="transactions-table">
    <thead>
    <tr>
    <th>Id</th>
    <th>Payment_id</th>
    <th>Payer_id</th>
    <th>Payer_email</th>
    <th>Amount</th>
    <th>Currency</th>
    <th>Payment_status </th>
    <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($transactions as $payment)
    <tr>
        <td>{{ $payment->id }}</td>
        <td>{{ $payment->payment_id }}</td>
        <td>{{ $payment->payer_id }}</td>
        <td>{{ $payment->payer_email }}</td>
        <td>{{ $payment->amount }}</td>
        <td>{{ $payment->currency }}</td>
        <td>{{ ucfirst($payment->payment_status) }}</td>
        <td>
        <a class="btn btn-info" href="{{ route('transactions.show', $payment->id) }}"><i class="far fa-eye"></i> Show</a>
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