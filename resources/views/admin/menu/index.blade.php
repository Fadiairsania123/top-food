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
                    <h4 class="card-title">Data Menu</h4>
                    <p class="card-description">
                        <a href="{{ route('menu.create') }}" class="btn btn-primary">Tambah Menu</a>
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
                                        Nama Makanan
                                    </th>
                                    <th>
                                        Deskripsi
                                    </th>
                                    <th>
                                        Harga
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
                                        <td>{{ $item->resto->nama }}</td>
                                        <td>{{ $item->makanan }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td><a href="{{ asset('menu/'.$item->image) }}"><img src="{{ asset('menu/'.$item->image) }}"/></a></td>
                                        <td>
                                            <a href="{{ route('menu.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('menu.hapus',$item->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Hapus</a></td>
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
