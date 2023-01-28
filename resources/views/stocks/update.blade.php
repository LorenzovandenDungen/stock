@csrf
<form action="{{ action('StockController@updateStore', $stock->id) }}" method="post">
    <div>
        <label for="stock_name">Stock Name:</label>
        <input type="text" name="stock_name" value="{{ $stock->stock_name }}">
    </div>
    <div>
        <label for="ticket">Stock Ticket:</label>
        <input type="text" name="ticket" value="{{ $stock->ticket }}">
    </div>
    <div>
        <label for="value">Stock Value:</label>
        <input type="text" name="value" value="{{ $stock->value }}">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>
