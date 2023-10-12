<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('Id', 'Id:') !!}
    <p>{{ $transaction->id}} </p>
</div>

<!-- Qrcode Owner Id Field -->
<div class="col-sm-12">
    {!! Form::label('Payment_id', 'Payment Id:') !!}
    <p>{{ $transaction->payment_id }}</p>
</div>

<!-- Qrcode Id Field -->
<div class="col-sm-12">
    {!! Form::label('Payer_id', 'Payer Id:') !!}
    <p>{{ $transaction->payer_id }}</p>
</div>

<!-- Payment Method Field -->
<div class="col-sm-12">
    {!! Form::label('Payer_email', 'Payer Email:') !!}
    <p>{{ $transaction->payer_email }}</p>
</div>

<!-- Message Field -->
<div class="col-sm-12">
    {!! Form::label('Currency', 'Currency:') !!}
    <p>{{ $transaction->currency }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $transaction->amount }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('Payment_status', 'Payment Status:') !!}
    <p>{{ ucfirst($transaction->payment_status) }}</p>
</div>

