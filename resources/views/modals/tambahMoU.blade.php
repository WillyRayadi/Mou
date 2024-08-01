{{-- Modal Start --}}
<div class="modal fade modal-signin py-5" id="modalTambahMoU" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">Tambah MoU</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form action="/MoU" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="judul" class="form-control rounded-4 @error('judul')is-invalid @enderror" id="judul" placeholder="Judul Kerjasama" value="{{ old('judul') }}" required autofocus>
                        <label class="form-label" for="judul">Judul Kerjasama</label>
                        @error('judul')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="denganPihak" class="form-control rounded-4 @error('denganPihak')is-invalid @enderror" id="denganPihak" placeholder="Bekerjasama dengan Pihak" value="{{ old('denganPihak') }}" required>
                        <label class="form-label" for="denganPihak">Bekerjasama dengan Pihak</label>
                        @error('denganPihak')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="date" name="waktuMulai" class="form-control rounded-4 @error('waktuMulai')is-invalid @enderror" id="waktuMulai" placeholder="Dimulai Kerjasama" value="{{ old('waktuMulai') }}" required>
                        <label class="form-label" for="waktuMulai">Dimulai Kerjasama</label>
                        @error('waktuMulai')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group form-floating mb-3 position-relative">
                        <input id="waktuSelesai" name="waktuSelesai" type="number" class="form-control @error('waktuSelesai')is-invalid @enderror" placeholder="Berakhir Kerjasama" value="{{ old('waktuSelesai') }}">
                        <label class="form-label" for="waktuSelesai">Berakhir Kerjasama</label>
                        <select name="howLong" class="form-select rounded-4">
                            <option value="Tahun" selected>Tahun</option>
                            <option value="Bulan">Bulan</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                        @error('waktuSelesai')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    {{-- <div class="mb-3 position-relative">
                        <select name="category" class="form-select rounded-4 @error('category')is-invalid @enderror" aria-label="Default select example">
                            <option class="form-label" selected hidden disabled>Pilih Category</option>
                            @foreach ($Category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div> --}}
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="category" class="form-control rounded-4 @error('category')is-invalid @enderror" placeholder="Category" id="category" value="{{ old('category') }}" required>
                        <label class="form-label" for="category">Category</label>
                        @error('category')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="nama_hotel" class="form-control rounded-4 @error('nama_hotel')is-invalid @enderror" placeholder="Nama Hotel" id="nama_hotel" value="{{ old('nama_hotel') }}" required>
                        <label class="form-label" for="nama_hotel">Nama Hotel</label>
                        @error('nama_hotel')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="jumlah_siswa" class="form-control rounded-4 @error('jumlah_siswa')is-invalid @enderror" placeholder="Jumlah Siswa" id="jumlah_siswa" value="{{ old('jumlah_siswa') }}" required>
                        <label class="form-label" for="jumlah_siswa">Jumlah Siswa</label>
                        @error('jumlah_siswa')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="alamat_hotel" class="form-control rounded-4 @error('alamat_hotel')is-invalid @enderror" placeholder="Alamat Hotel" id="alamat_hotel" value="{{ old('alamat_hotel') }}" required>
                        <label class="form-label" for="alamat_hotel">Alamat Hotel</label>
                        @error('alamat_hotel')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="fileMoU" class="form-label">File MoU</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control @error('fileMoU') is-invalid @enderror" type="file" id="fileMoU" name="fileMoU">
                        @error('fileMoU')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <textarea id="textMoU" name="textMoU" class="form-control @error('textMoU')is-invalid @enderror" placeholder="Tulis keterangan MoU disini (support html tags)" id="floatingTextarea2" style="height: 100px">{!! old('textMoU') !!}</textarea>
                        <label for="textMoU">Keterangan MoU</label>
                        @error('textMoU')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-success" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal End --}}