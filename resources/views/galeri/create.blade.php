@extends('layouts.app')

@section('content')

<!-- Tambahan CSS -->

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
                <h6 class="m-0 font-weight-bold text-success">Form Galeri</h6>
            </div>
            <div class="card-body">
                <!-- Menmabhakan Data Guru-->
                <form method="POST" action="{{route('kegiatan.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="namaGuru">Judul Kegiatan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                        id="namaGuru" name="judul">

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
                        <input id="keterangan" type="hidden" name="keterangan">
                        <trix-editor input="keterangan"></trix-editor>
                    </div>

                    <div class="form-group">
                        <label>Upload Foto<span class="text-danger">*</span></label>
                        <div class="img-preview-container mb-3 col-sm-5 d-block" id="img-preview-container"></div>
                        <input class="form-control-file @error('foto') is-invalid @enderror"
                               type="file" name="foto[]" id="image" onchange="previewImages()" multiple>
                        <input type="hidden" name="deletedImages" id="deletedImages" value="">
                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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

<script>
    function previewImages() {
        const images = document.querySelector('#image');
        const imgPreviewContainer = document.querySelector('#img-preview-container');
        imgPreviewContainer.innerHTML = ''; // Clear previous previews

        for (let i = 0; i < images.files.length; i++) {
            const imgReader = new FileReader();
            imgReader.readAsDataURL(images.files[i]);

            imgReader.onload = function (oFREvent) {
                const imgElement = document.createElement('img');
                imgElement.src = oFREvent.target.result;
                imgElement.className = 'img-preview'; // Class untuk styling

                // Atur ukuran pratinjau di sini
                imgElement.style.width = '400px'; // Ganti dengan lebar yang diinginkan
                imgElement.style.height = '300px'; // Ganti dengan tinggi yang diinginkan

                // Atur jarak antara gambar (contoh: 10px)
                imgElement.style.margin = '10px';

                const imgContainer = document.createElement('div');
                imgContainer.className = 'print-container'; // Class untuk layout cetak
                imgContainer.appendChild(imgElement);

                // Tambahkan elemen gambar ke dalam container pratinjau
                imgPreviewContainer.appendChild(imgContainer);
            }
        }
    }
</script>

@endsection

