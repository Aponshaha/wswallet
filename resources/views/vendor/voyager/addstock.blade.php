@extends('voyager::master')

@section('content')

@foreach($coins as $coin)

<form class="form-inline" method="post" action="{{ route('store_stock',[$coin->id])}}">
    @csrf
  <div class="form-group mb-2" style="margin-left:50px;">
    
    <label for="staticEmail2" class="sr-only">Currency</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="{{$coin->name}}">
    <label for="staticEmail2" class="sr-only">Stock</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="{{$coin->stock}}">
    <label for="inputPassword2" class="sr-only">Add Stock</label>
    <input type="number" class="form-control" id="stock" name="stock" placeholder="Add Stock">
    <button type="submit" class="btn btn-primary mb-2">Update </button>
  </div>
</form> 
@endforeach





@stop

