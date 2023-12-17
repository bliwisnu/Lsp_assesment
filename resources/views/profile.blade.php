@extends('layouts.headerFooter')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@section('content')
    <div class="container">
        <div class="card mx-auto mt-5 p-5" style="width: 50rem; color: black;">
            <form action="/profile/tambah" method="POST">
                @csrf
                <div class="logout">

                    <a href="{{ route('logout') }}"><i class="bi bi-box-arrow-left text-dark fs-1"></i></a>
                </div>
                <h1 class="text-center">Masukan Data</h1>
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <div id="emailHelp" class="form-text">sesuaikan ijazah sesuai gelar</div>
                    <input type="text" name="namaLengkap" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    @error('namaLengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat KTP</label>
                    <input type="text" name="alamatKTP" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('alamatKTP')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat Lengkap Saat Ini</label>
                    <input type="text" name="alamatSkrg" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('alamatSkrg')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="mb-2 mt-3" for="provinsi">Provinsi</label>
                    <select class="provinsi w-100" name="provinsi" id="provinsi">
                    </select>
                </div>
                <div class="mb-2">
                    <label class="mb-2" for="kabupaten">Kabupaten</label>
                    <select class="kabupaten w-100" name="kabupaten" id="kabupaten">

                    </select>
                </div>
                <div class="mb-5">
                    <label class="mb-2" for="kecamatan">Kecamatan</label>
                    <select class="kecamatan multiple-category w-100" name="kecamatan" id="kecamatan">

                    </select>
                </div>
                <div class="mb-3 mt-4">
                    <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                    <input type="text" name="noTel" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('noTel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                    <input type="text" name="noHp" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('noHP')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        value="{{ auth()->user()->email }}" aria-describedby="emailHelp" readonly>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                    <select id="kewarganegaraan" class="form-select" name="kewarganegaraan">
                        <option selected>Choose...</option>
                        <option value="WNI Asli">WNI Asli</option>
                        <option value="WNI Keturunan">WNI Keturunan</option>
                        <option value="WNA">WNA</option>
                    </select>
                    @error('kewarganegaraan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div id="formHidden" class="mb-3">
                    <label for="asalWNA" class="form-label">Asal WNA</label>
                    <input type="text" name="asalWNA" class="form-control" id="asalWNA"
                        aria-describedby="emailHelp">
                    @error('asalWNA')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('tgl_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tmpt_lahir" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('tmpt_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jk" id="inlineFormSelectPref">
                        <option selected>Choose...</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Status Menikah</label>
                    <select class="form-select" name="statusMenikah" id="inlineFormSelectPref">
                        <option selected>Choose...</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                    @error('statusMenikah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <select class="form-select" name="agama" id="inlineFormSelectPref">
                        <option selected>Choose...</option>
                        <option value="1">Hindu</option>
                        <option value="2">Islam</option>
                        <option value="3">Kristen</option>
                        <option value="3">Katolik</option>
                        <option value="3">Budha</option>
                    </select>
                    @error('agama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="col-12 mb-3">
                    </div>
                    <div class="col-12 mb-3">
                        <input type="file" class="form-control" name="imgProfile" @error('image') is-invalid @enderror
                            id="selectImage">
                    </div>
                    <img id="previewImage" src="#" class="img-thumbnail mx-auto" style="max-width: 600px;">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <img id="preview" src="#" alt="your image" class="mt-3" style="display:none;" />
                </div>
                <button type="submit" class="btn btn-primary w-100">Kirim</button>
            </form>
        </div>
    @endsection
    @push('scripts')
        <script>
            $(document).ready(function() {
                // Sembunyikan form-group nationality saat halaman dimuat
                $('#formHidden').hide();

                // Deteksi perubahan pada elemen select
                $('#kewarganegaraan').change(function() {
                    // Ambil nilai yang dipilih pada select
                    var selectedValue = $(this).val();

                    // Periksa jika nilai yang dipilih adalah 'WNA'
                    if (selectedValue === 'WNA') {
                        // Tampilkan form-group nationality
                        $('#formHidden').show();
                        $('#asalWNA').val('');
                    } else {
                        // Sembunyikan form-group nationality jika nilai yang dipilih bukan 'WNA'
                        $('#formHidden').hide();
                        $('#asalWNA').val('Indonesia');
                    }
                });

                // ... (kode sebelumnya) ...

                // Tambahkan ini untuk menampilkan gambar pratinjau
                $('#selectImage').change(function() {
                    readURL(this);
                });

                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#previewImage').attr('src', e.target.result);
                            $('#previewImage').show();
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            });
        </script>
    @endpush

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Sembunyikan form-group nationality saat halaman dimuat
                $('#formHidden').hide();

                // Deteksi perubahan pada elemen select
                $('#kewarganegaraan').change(function() {
                    // Ambil nilai yang dipilih pada select
                    var selectedValue = $(this).val();

                    // Periksa jika nilai yang dipilih adalah 'WNA'
                    if (selectedValue === 'WNA') {
                        // Tampilkan form-group nationality
                        $('#formHidden').show();
                        $('#asalWNA').val('');
                    } else {
                        // Sembunyikan form-group nationality jika nilai yang dipilih bukan 'WNA'
                        $('#formHidden').hide();
                        $('#asalWNA').val('Indonesia');
                    }
                });
                $.ajax({
                    url: '/getProvinces',
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var select = $('#provinsi');
                        $.each(data, function(key, value) {
                            select.append('<option data-id="' + value.id + '" value="' + value
                                .name + '">' + value.name + '</option>');
                        });
                    }
                });

                $('#provinsi').on('change', function() {
                    var provinceId = $(this).find(':selected').data('id');
                    if (provinceId) {
                        // Load regencies based on province id
                        $.ajax({
                            url: '/getRegencies/' + provinceId,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                var selectRegency = $('#kabupaten');
                                selectRegency.empty().append(
                                    '<option value="">Pilih Kabupaten/Kota</option>');
                                $.each(data, function(key, value) {
                                    selectRegency.append('<option data-id="' + value.id +
                                        '" value="' + value.name + '">' + value.name +
                                        '</option>');
                                });
                            }
                        });
                    } else {
                        $('#provinsi').empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                    }
                });

                $('#kabupaten').on('change', function() {
                    var regencyId = $(this).find(':selected').data('id');
                    if (regencyId) {
                        // Load regencies based on province id
                        $.ajax({
                            url: '/getDistricts/' + regencyId,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                var selectDistrict = $('#kecamatan');
                                selectDistrict.empty().append(
                                    '<option value="">Pilih Kecamatan</option>');
                                $.each(data, function(key, value) {
                                    selectDistrict.append('<option data-id="' + value.id +
                                        '" value="' + value.name + '">' + value.name +
                                        '</option>');
                                });
                            }
                        });
                    } else {
                        $('#kabupaten').empty().append('<option value="">Pilih Kecamatan</option>');
                    }
                });
            });
        </script>
    @endpush

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            @if (Session::has('success'))
                toastr.success("Berhasil menambah data diri")
            @endif
            @error('namaLengkap')
                toastr.error('Nama Lengkap harus diisi.🏡');
            @enderror
            @error('alamat')
                toastr.error('Alamat harus diisi.🏡');
            @enderror
            @error('imgProfile')
                toastr.error('Image Profile harus diisi.🏡');
            @enderror
            @error('alamatKTP')
                toastr.error('Alamat KTP harus diisi.🏡');
            @enderror
            @error('alamatSkrg')
                toastr.error('Alamat Sekarang harus diisi.🏡');
            @enderror
            @error('provinsi')
                toastr.error('Provinsi harus diisi.🏡');
            @enderror
            @error('kabupaten')
                toastr.error('Kabupaten harus diisi.🏡');
            @enderror
            @error('kecamatan')
                toastr.error('Kecamatan harus diisi.🏡');
            @enderror
            @error('noHp')
                toastr.error('No HP harus diisi.🏡');
            @enderror
            @error('noTel')
                toastr.error('Nomor Telepon harus diisi.🏡');
            @enderror
            @error('kewarganegaraan')
                toastr.error('Kewarga Negaraan harus diisi.🏡');
            @enderror
            @error('tgl_lahir')
                toastr.error('Tanggal Lahir harus diisi.🏡');
            @enderror
        });
    </script>
