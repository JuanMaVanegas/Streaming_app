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

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

<h1>Transaction<h1>
<br>
<?php
    $suma=0;;
    foreach ($user->transactions as $transaction){
        $suma+=Intval($transaction->amount);
    }              
?>                    
<div class="col">
    <table>
        <thead>
            <tr>
                <th>transactions Id</th>
                <th>Method</th>
                <th>Status</th>
                <th>Amount</th>
                
            </tr>
        </thead>
        <tbody>
        
        
            @foreach ($user->transactions as $transaction)
            
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->payment_method }}</td>
                    <td>{{ $transaction->status}}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td></td>
                </tr>
            @endforeach
            <tr>
                <td>Total</td>
                <td></td>
                <td></td>
                <td><?php
                    echo $suma;
                ?></td>
            </tr>
        </tbody>
    </table>
</div>
