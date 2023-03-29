@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div id="alert" class="alert alert-success alert-block mb-3">
                            {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div id="alert" class="alert alert-danger alert-block mb-3">
                            {{ $message }}
                        </div>
                    @endif
                    <h4 class="card-title">Data Resto</h4>
                    <p class="card-description">
                        <a href="{{ route('resto.create') }}" class="btn btn-primary">Tambah Produk</a>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%">
                                        No
                                    </th>
                                    <th>
                                        Nama Resto
                                    </th>
                                    <th>
                                        Deskripsi
                                    </th>
                                    <th>
                                        Foto
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td><a href="{{ asset('resto/'.$item->image) }}"><img src="{{ asset('resto/'.$item->image) }}"/></a></td>
                                        <td><a href="{{ route('menu.resto',$item->id) }}" class="btn btn-primary">Tambah Menu</a>
                                            <a href="{{ route('resto.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('resto.hapus',$item->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Hapus</a></td>
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
