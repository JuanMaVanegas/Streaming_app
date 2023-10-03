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
                    <h1>Transactions</h1>
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
                    <td>{{ $transaction->qr['id'] }}</td>
                    <td>{{ $transaction->qr['product_name'] }}</td>
                    <td>{{ $transaction->qr['product_url'] }}</td>
                    <td>{{ $transaction->amount }}</td>
                </tr>
                 @endforeach
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php
                        $suma=0;
                        foreach ($transaction->qrcode as $qrcode){
                            $suma+=Intval($transaction->amount);
                        }
                        echo $suma;              
                    ?> </td>
                </tr>
                </table>
            </div>
        </div>
    </section>

