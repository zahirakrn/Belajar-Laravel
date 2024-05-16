@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Product</div>

                <div class="card-body">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add data</a>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name_Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Desciption</th>
                            <th scope="col">Id_brands</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($product as $data)
                          <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$data->name_product}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->description}}</td>
                            <td>{{$data->brands->name_brand}}</td>
                            <td>
                                <img src="{{ asset('/images/product/' . $data->cover) }}" width="100">
                            </td>
                            <form action="{{ route('product.destroy', $data->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                            <td>
                                <a href="{{ route('product.edit', $data->id)}}"class="btn btn-success">Edit</a>
                                <a href="{{ route('product.show', $data->id)}}" class="btn btn-warning">Show</a>

                                <button class="btn btn-sm btn-danger" type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Delete
                                </button>
                            </td>
                            </form>
                          </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
