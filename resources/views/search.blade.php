@extends('master')
@section("content")
<div class="custom-product">
   <h3>Search Products</h3>
<div class="trending-wrapper">
  @foreach ($products as $item)
    <div class="search-item">
      <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}">
      
      <div class="">
        <h2>{{$item['name']}}</h2>
        <p>{{$item['description']}}</p>
      </div>
    </a>
    </div>
    {{-- @if ( $item['id'] % 3 == 0)
      <div class="linebr"></div>
    @endif --}}
    @endforeach
</div>
</div>
@endsection