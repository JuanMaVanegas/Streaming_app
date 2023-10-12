<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p> {{ $qrcode->id}} || {{ $qrcode->user_id}}</p>
</div>

<!-- Website Field -->
<div class="col-sm-12">
    {!! Form::label('website', 'Website:') !!}
    <p><a href="{{ $qrcode->website }}">{{ $qrcode->website }}</a></p>
</div>

<!-- Company Name Field -->
<div class="col-sm-12">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $qrcode->company_name }}</p>
</div>

<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $qrcode->product_name }}</p>
</div>

<!-- Product Url Field -->
<div class="col-sm-12">
    {!! Form::label('product_url', 'Product Url:') !!}
    <p><a href="{{ $qrcode->product_url }}">{{ $qrcode->product_url }}</a></p>
</div>

<!-- Callback Url Field -->
<div class="col-sm-12">
    {!! Form::label('callback_url', 'Callback Url:') !!}
    <p><a href="{{ $qrcode->callback_url }}">{{ $qrcode->callback_url }}</a></p>
</div>

<!-- Qrcode Path Field -->
<div class="col-sm-12">
    {!! Form::label('qrcode_path', 'Qrcode Path:') !!}
    <p><img src="{{ asset($qrcode->qrcode_path) }}"></p>
</div>

<!-- Product Image Field -->
<div class="col-sm-12">
    {!! Form::label('product_image', 'Product Image:') !!}
    <p><img src="{{ asset($qrcode->product_image) }}" style="width:200px"></p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $qrcode->amount }}</p>
</div>

<form action="{{ route('payment') }}" method="post">
    @csrf <!-- protección contra ataques de falsificación de solicitudes entre sitios (CSRF).--> 
    <input type="hidden" name="id" value="{{ $qrcode->id }}" readonly onmousedown="return false;">
    <button type="submit" onclick="this.disabled=true; this.form.submit();">Paypal</button>
</form>

<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transactions</h1>
                </div>
                <br>
                <table class="table table-bordered" id="user-table">
                <tr>
                    <th>Usuario</th>
                    <th>Transactions Id</th>
                    <th>Payment_method</th>
                    <th>Status</th>
                    <th>Amount</th>
                </tr>
                @foreach ($qrcode->transactions2 as $transaction)
            
                <tr>
                    <td><a href="{{ route('users.show',$transaction->user['id']) }}">{{ $transaction->user['name'] }}</a></td>
                    <td><a href="{{ route('transactions.show',$transaction->id) }}">{{ $transaction->id }}</a></td>
                    <td>{{ $transaction->payment_method }}</td>
                    <td>{{ $transaction->status}}</td>
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
                        foreach ($qrcode->transactions2 as $transaction){
                            $suma+=Intval($transaction->amount);
                        }
                        echo $suma;              
                    ?> </td>
                </tr>
                </table>
            </div>
        </div>
    </section>
