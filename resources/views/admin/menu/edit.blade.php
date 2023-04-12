@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h4 class="card-title">Edit Data Menu</h4>
                    <p class="card-description">
                        Form ini digunakan untuk mengedit Menu
                    </p>
                    <form action="{{ route('menu.update',$data->id) }}" method="post" class="forms-sample" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Makanan</label>
                            <input type="text" value="{{ $data->makanan }}" name="makanan" class="form-control" id="exampleInputName1" placeholder="Makanan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Harga Makanan</label>
                            <input type="number" value="{{ $data->harga }}" name="harga" class="form-control" id="exampleInputName1" placeholder="Harga">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Deskripsi</label>
                            <input type="text" value="{{ $data->deskripsi }}" name="deskripsi" class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('menu/'.$data->image) }}" width="150px"/>
                        </div>
                        <span class="text-warning">Upload Foto untuk mengganti Foto Resto</span>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('admin/js/file-upload.js') }}"></script>
@endpush