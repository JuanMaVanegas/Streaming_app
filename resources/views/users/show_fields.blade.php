<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('roles', 'Roles:') !!}
    <br>
    @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
        <label class="badge badge-success">{{ $v }}</label>
        @endforeach
    @endif
</div>

<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaction</h1>
                </div>
                <br>
                <table class="table table-bordered" id="user-table">
                <tr>
                    <th>Transaction Id</th>
                    <th>payment_method</th>
                    <th>Status</th>
                    <th>amount</th>
                    <th>Producto</th>
                </tr>
                
                @foreach ($user->transactions as $transaction)
                <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->payment_method }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>{{ $transaction->amount }}</td>
                @endforeach
                @foreach ($user->qrcodes as $qrcode)
                    <td>{{ $qrcode->product_name }} 
                        <br> <img src="../{{ $qrcode->product_image }}" width="150px"></td>
                    </tr>
                @endforeach
                
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td><?php
                        $suma=0;
                        foreach ($user->transactions as $transaction){
                            $suma+=Intval($transaction->amount);
                        }
                        echo $suma;              
                    ?> </td>
                </tr>
                </table>
            </div>
        </div>
    </section>
                   