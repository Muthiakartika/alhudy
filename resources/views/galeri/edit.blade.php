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
                <h6 class="m-0 font-weight-bold text-success">Form Kegiatan</h6>
            </div>
            <div class="card-body">
                <!-- Mengupdate data kegiatan-->
                <form method="POST" action="{{route('kegiatan.update', $galeri->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="namaGuru">Judul Kegiatan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                        id="namaGuru" name="judul" placeholder="Judul Kegiatan" value="{{$galeri->judul}}">

                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Keterangan<span class="text-danger">*</span></label>
                        @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <input id="keterangan" type="hidden" name="keterangan" value="{{old('keterangan', $galeri->keterangan)}}">
                        <trix-editor input="keterangan"></trix-editor>
                    </div>

                    <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="hidden" name="oldImages" value="{{  $galeri->foto }}">
                         <!-- Tampilkan gambar-gambar yang sudah disimpan sebelumnya -->
                         <div class="img-preview-container">
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
                        <!-- Input untuk mengganti atau menambah gambar baru -->
                        <div class="mb-3">
                            <input class="form-control-file @error('foto.*') is-invalid @enderror" type="file" name="foto[]" id="image" onchange="previewImages()" multiple>
                            @error('foto.*')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <a class="btn btn-primary" href="{{route('kegiatan.index')}}">Kembali</a>
                        <input class="btn btn-success" type="submit" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <script>
        document.addEventListener('trix-file-accept', function(event){
            event.preventDefault();
        })
    </script>

<!-- JavaScript untuk Menampilkan Pratinjau Gambar -->
<script>
    function previewImages() {
        const images = document.querySelector('#image');
        const imgPreviewContainer = document.querySelector('.img-preview-container');
        imgPreviewContainer.innerHTML = ''; // Membersihkan pratinjau sebelumnya

        for (let i = 0; i < images.files.length; i++) {
            const imgReader = new FileReader();
            imgReader.readAsDataURL(images.files[i]);

            imgReader.onload = function (oFREvent) {
                console.log('File berhasil dibaca.');

                // Membuat elemen gambar untuk pratinjau
                const imgElement = document.createElement('img');
                imgElement.src = oFREvent.target.result;
                imgElement.className = 'img-preview img-fluid mb-3 col-sm-5 d-block';
                imgElement.style.height = '150px';
                imgElement.style.width = '250px';

                // Menambahkan elemen gambar ke dalam container pratinjau
                imgPreviewContainer.appendChild(imgElement);
            }
        }
    }
</script>
@endsection

