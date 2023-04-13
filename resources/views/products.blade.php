@extends('layout')

@section('content')
<div class="row">
    <h1>{{ $heading }}</h1>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>View Detail</th>
        </tr>

        @php
            $count = 1;
        @endphp

        @foreach($products as $product)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $product->productname }}</td>
                <td>{{ $product->unitprice }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->category }}</td>
                <td class="table-info"><a href="/product/{{$product->id}}">View Details</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection