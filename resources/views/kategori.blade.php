@extends('layouts.app')

@section('content')
<div class="container  mt-5">

<div class="row">
        <div class="col-lg">
        <div class="mb-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Judul
            </button>
        </div>    
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kategori as $item) 
                    <tr>
                            <td><b>{{ $item->id }}</b></td>
                            <td><b>{{ $item->judul }}</b></td>
                            <td><b>{{ $item->kategori }}</b></td>
                            <td><b>{{ $item->stok }}</b></td>
                            <td><b>{{ $item->harga }}</b></td>

                            <td>
                            <a href="{{ route('pesan') }}" class="btn btn-info">
                                    <i class="fas fa-plus fa-sm text-white-50"></i>
                                Checkout</a>
                                <form action="{{ route('kategori.destroy', $item->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        delete
                                    </button>
                            </td>

                        </tr>
                @endforeach                            
                </tbody>

            </table>
        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Judul Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <div class="col-sm-12">
                <input type="hidden" name="id" id="id">

                <div class="form-group">
                    <label for="judul" class="col-sm-12 control-label">Judul</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="judul" placeholder="Judul"
                        id="judul" value="{{ old('judul') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="kategori" class="col-sm-12 control-label">Kategori</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="kategori" placeholder="Kategori"
                        id="kategori" value="{{ old('kategori') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="stok" class="col-sm-12 control-label">Stock</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="stok" placeholder="Stock"
                        id="stock" value="{{ old('stok') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="harga" class="col-sm-12 control-label">Harga</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name= "harga" placeholder="Harga"
                        id="harga" value="{{ old('harga') }}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
@endsection