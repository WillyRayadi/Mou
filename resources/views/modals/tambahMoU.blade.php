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
                    <div class="mb-3 position-relative">
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
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="products" class="form-control rounded-4 @error('products')is-invalid @enderror" placeholder="Barang" id="products" value="{{ old('products') }}" required>
                        <label class="form-label" for="products">Barang</label>
                        @error('products')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="quantity" class="form-control rounded-4 @error('quantity')is-invalid @enderror" placeholder="Jumlah Barang" id="quantity" value="{{ old('quantity') }}" required>
                        <label class="form-label" for="quantity">Jumlah Barang</label>
                        @error('quantity')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="product_size" class="form-control rounded-4 @error('product_size')is-invalid @enderror" placeholder="Ukuran Barang" id="product_size" value="{{ old('product_size') }}" required>
                        <label class="form-label" for="product_size">Ukuran Barang</label>
                        @error('product_size')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="text" name="product_color" class="form-control rounded-4 @error('product_color')is-invalid @enderror" placeholder="Warna Barang" id="product_color" value="{{ old('product_color') }}" required>
                        <label class="form-label" for="product_color">Warna Barang</label>
                        @error('product_color')
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