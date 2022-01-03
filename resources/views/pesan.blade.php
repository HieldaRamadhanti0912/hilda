@extends('layouts.app')

@section('content')
<div class="container mt-5">
      <div class="row">
         <div class="col-7">
            <h4>Checkout</h4>
            <br>
            <table class="table table-success table-stripped">
               <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Aksi</th>
               </tr>
               @foreach ($menu as $item)
               <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->Judul }}</td>
                  <td>{{ $item->Kategori }}</td>
                  <td>{{ $item->stok }}</td>
                  <td>{{ $item->harga }}</td>
                  <td>
                     <a href="{{ route('sukses') }}">Selesai</a>
                  </td>
               </tr>
               @endforeach
            </table>
         </div>
      </div>
   </div>

@endsection