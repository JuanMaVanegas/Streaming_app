<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $transaction->user['id'] }} || {{ $transaction->user['email'] }}</p>
</div>

<!-- Qrcode Owner Id Field -->
<div class="col-sm-12">
    {!! Form::label('qrcode_owner_id', 'Qrcode Owner Id:') !!}
    <p>{{ $transaction->qrcode_owner_id }}</p>
</div>

<!-- Qrcode Id Field -->
<div class="col-sm-12">
    {!! Form::label('qrcode_id', 'Qrcode Id:') !!}
    <p>{{ $transaction->qrcode_id }}</p>
</div>

<!-- Payment Method Field -->
<div class="col-sm-12">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{{ $transaction->payment_method }}</p>
</div>

<!-- Message Field -->
<div class="col-sm-12">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $transaction->message }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $transaction->amount }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $transaction->status }}</p>
</div>

<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>QrCodes</h1>
                </div>
                <br>
                <table class="table table-bordered" id="user-table">
                <tr>
                    <th>Qrcode Id</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Amount</th>
                </tr>
                @foreach ($transaction->qrcode as $qr)
                <tr>
                    
                </tr>
                 @endforeach
                <tr>
                    
                </tr>
                </table>
            </div>
        </div>
    </section>

