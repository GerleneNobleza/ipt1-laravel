@extends('layout')

@section('content')
<h1>{{ $product->productname }}</h1>

<div>
    <ul>
        <li>Unit Price: {{$product->unitprice}}</li>
        <li>Quantity: {{$product->quantity}}</li>
        <li>Category: {{$product->category}}</li>
    </ul>
</div>
@endsection