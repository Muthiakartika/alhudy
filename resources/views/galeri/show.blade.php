@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

    <!-- Record DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Form Guru</h6>
            </div>
            <div class="card-body">
                <!-- Menmabhakan Data Guru-->
                <form method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="namaGuru">Judul Kegiatan</label>
                        <span type="text" class="form-control" id="judul" name="judul">{{$galeri->judul}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Keterangan</label>
                            <input id="keterangan" type="hidden" name="keterangan" value="{{$galeri->keterangan}}">
                            <trix-editor input="keterangan" readonly></trix-editor>
                            <div data-trix-content="{{ $galeri->keterangan }}" data-trix-readonly data-trix-disable-uploads></div>
                    </div>

                    <div class="form-group">
                        <label>Upload Foto</label>
                            @foreach (json_decode($galeri->foto, true) as $oldImage)
                            @if (is_array($oldImage))
                                @foreach ($oldImage as $image)
                                    <img src="{{ asset('storage/' . $image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="height: 150px; width: 250px;">
                                @endforeach
                            @else
                                <img src="{{ asset('storage/' . $oldImage) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="height: 150px; width: 250px;">
                            @endif
                            @endforeach
                    </div>

                    <div class="form-group">
                        <a href="{{route('kegiatan.index')}}" class="btn btn-primary mr-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <script>
        document.querySelector('trix-editor').editor.element.setAttribute('contentEditable', false)
    </script>

@endsection

