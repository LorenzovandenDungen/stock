@extends('base')
@section('title', 'Update Stock')
@section('content')
<div class="d-flex justify-content-between mb-3">
<a href="/stocks" class="btn btn-secondary">Back</a>
</div>
<form action="/stocks/update/{{$stock->id}}" method="post">
@csrf
<div class="form-group">
<label for="stock_name">Stock Name</label>
<input type="text" class="form-control" id="stock_name" name="stock_name" value="{{$stock->stock_name}}">
</div>
<div class="form-group">
<label for="ticket">Stock Ticket</label>
<input type="text" class="form-control" id="ticket" name="ticket" value="{{$stock->ticket}}">
</div>
<div class="form-group">
<label for="value">Stock Value</label>
<input type="text" class="form-control" id="value" name="value" value="{{$stock->value}}">
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
