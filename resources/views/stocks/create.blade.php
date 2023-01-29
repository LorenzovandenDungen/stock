@extends('base')
@section('title', 'New Stocks')
@section('content')
<form action="/stocks/store" method="post">
        @csrf
        <div class="form-group">
            <label for="stock_name">Stock Name</label>
            <input type="text" name="stock_name" class="form-control" placeholder="Enter stock name" required>
        </div>
        <div class="form-group">
            <label for="ticket">Stock Ticket</label>
            <input type="text" name="ticket" class="form-control" placeholder="Enter stock ticket" required>
        </div>
        <div class="form-group">
            <label for="value">Stock Value</label>
            <input type="text" name="value" class="form-control" placeholder="Enter stock value" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Stock</button>
    </form>
@endsection
