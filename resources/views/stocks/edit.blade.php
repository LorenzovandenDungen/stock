@extends('base')
@section('title', 'Edit Stocks')
@section('content')
 <form action="/stocks/update/{{$stock->id}}" method="post">
        @csrf
        <div class="form-group">
          <label for="stock_name">Stock Name</label>
          <input type="text" class="form-control" id="stock_name" name="stock_name" value="{{$stock->stock_name}}" placeholder="Enter stock name">
        </div>
        <div class="form-group">
          <label for="ticket">Stock Ticket</label>
          <input type="text" class="form-control" id="ticket" name="ticket" value="{{$stock->ticket}}" placeholder="Enter stock ticket">
        </div>
        <div class="form-group">
          <label for="value">Stock Value</label>
          <input type="text" class="form-control" id="value" name="value" value="{{$stock->value}}" placeholder="Enter stock value">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection