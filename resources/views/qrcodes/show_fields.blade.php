<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $qrcode->user_id }}</p>
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

