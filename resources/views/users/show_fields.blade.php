
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
    @if($user->getRoleNames()?->isNotEmpty())
        @foreach ($user->getRoleNames() as $v)
        <a href="/roles/{{$user->id}}"><label class="badge badge-success">{{ $user->getRoleNames()->first() }}</label></a>
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
                        <td><a href="{{ route('transactions.show',$transaction->id) }}">{{ $transaction->id }}</a></td>
                        <td>{{ $transaction->payment_method }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>{{ $transaction->amount }}</td>
                           
                    @endforeach
                    @foreach ($user->qrcodes as $qrcode)
                        <td>{{ $qrcode->product_name }} 
                            <br> <img src="../{{ $qrcode->product_image }}" width="150px"></td>
                            </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <th>Total</td>
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
                            </tfoot>
                </table>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Productos</h1>
                </div>
                <br>
                <table class="table table-bordered" id="user-table">
                    <caption>Productos</caption>
                    <thead class="table-primary">
                        <tr>
                            <th>Producto Id</th>
                            <th>Producto</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->qrcodes as $qrcode)
                        <tr>
                            <<td>
                                <a href="{{ route('qrcodes.show',$qrcode->id) }}">
                                {{ $qrcode->id }}  </a>
                            </td>
                            <td>
                                {{ $qrcode->product_name }} 
                                <br> <img src="../{{ $qrcode->product_image }}" width="150px">
                            </td>
                            <td>{{ $qrcode->amount }} 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
                   