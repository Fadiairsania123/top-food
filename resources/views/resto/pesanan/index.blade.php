@extends('resto.partials.template')

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
                    <h4 class="card-title">Data Pesanan</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%">
                                        No
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Alamat
                                    </th>
                                    <th>
                                        Status
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
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            @if ($item->status == 'CHECKOUT')
                                                
                                            <a href="{{ route('pesanan.terima',$item->id) }}" class="btn btn-success">Terima Pesanan</a>
                                            <a href="{{ route('pesanan.tolak',$item->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Tolak Pesanan</a></td>
                                            @elseif ($item->status == 'DIPROSES')
                                            <a href="{{ route('pesanan.kirim',$item->id) }}" class="btn btn-success">Kirim Pesanan</a>
                                            @endif
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
