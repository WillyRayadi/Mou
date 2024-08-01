<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .container {
            padding: 40px;
            width: 100%;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .mou {
            margin: 20px 0;
            text-align: justify;
        }

        ol {
            list-style-type: decimal;
            padding-left: 15px;
        }

        li {
            margin-bottom: 10px;
            text-align: justify;
        }

        .bold {
            font-weight: 700;
        }

        .parties, .terms, .closure {
            margin-top: 25px;
            text-align: justify;
        }

        .table-container {
            width: 90%;
            margin-top: 15px;
        }

        .table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .table th, .table td {
            border: 1px solid black;
            padding: 15px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        /* .sign {
        width: 100%;
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        text-align: center;
        flex-direction: row;
        }

        .sign div {
        width: 45%;
        text-align: center;
        }

        .sign div span {
        display: block;
        margin-bottom: 20px;
        font-size: 16px;
        font-weight: bold;
        }

        .sign div span:first-child {
        margin-bottom: 10px;
        }

        .sign div span:last-child {
        font-size: 14px;
        margin-bottom: 0;
        }

        .sign div span:last-child b {
        font-size: 12px;
        } */

        .signature-table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            margin-top: 50px;
        }
        .signature-table td {
            padding: 20px;
            vertical-align: bottom;
            text-align: left;
        }
        .signature-table .sign-line {
            margin-top: 80px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="title">
            <h3>SURAT PERJANJIAN KERJASAMA</h3>
            {{-- <h4>Nomor: 0{{ $Mou->id }}/PROCUREMENT/2024</h4> --}}
        </div>
        <?php
        use Carbon\Carbon;

        // Set locale to Indonesian
        Carbon::setLocale('id');

        // Parse and format the date
        $formattedDate = Carbon::parse($Mou->waktuMulai)->translatedFormat('l, d F Y');
        ?>
        <div class="mou">
            <p>Pada hari ini <?php echo $formattedDate; ?> masing-masing pihak yang bertanda tangan dibawah ini :</p>
        </div>
        <div class="parties">
            <span>Nama:</span> <b>Rahardian Agus M.Pd</b><br><br>
            <span>Jabatan:</span> Kepala Sekolah SMKP Cipta Karya                    <br><br>
            <span>Alamat Sekolah:</span> Jl. Swasembada Timur XIII No.14-15 , Jakarta Utara Telepon (021) 430541 –               
                    430506 Fax. (021) 700506
        </div>        

        <div class="terms">
            <p>Dalam hal ini bertindak untuk dan atas nama sekolah SMKP Cipta Karya yang selanjutnya disebut sebagai <b>Pihak I (Pertama)</b></p>
        </div>

        <div class="parties">
            <span>Nama:</span> <b>Rico Sutanto</b><br><br>
            <span>Nama Hotel:</span> {{ $Item->nama_hotel }}<br><br>
            <span>Jabatan:</span> General Manager<br><br>
            <span>Alamat:</span> {{ $Item->alamat_hotel }}
        </div>
        
        <div class="terms">
            <p>Dalam hal ini bertindak untuk dan atas nama HOTEL xxxxxx Yang selanjutnya disebut sebagai <b>Pihak II (Kedua)</b></p>
        </div>

        <div class="terms">
            <p>Bahwa Pihak Pertama dan Pihak Kedua <b>Sepakat Untuk Mengadakan Perjanjian Kerjasama</b> di bidang penyaluran On The Job<br> Training Siswa/i SMKP Cipta Karya. Adapun isi perjanjian yang disepakati oleh Pihak Pertama dan Pihak Kedua<br> adalah sebagai berikut :</p>
            <p class="title"><br><b>Pasal 1</b></p>
        </div>
        
        <div class="terms">
            <p>Pihak Pertama bersedia mempersiapkan dan mengirimkan Siswa/Siswi untuk melaksanakan On The Job Training di Hotel Pihak<br> Kedua sesuai dengan permintaan Pihak Kedua.</p>
            <p class="title"><br><b>Pasal 2</b></p>
        </div>

        <div class="terms">
            <p>Pihak Pertama bersedia menyerahkan tanggung-jawab pelatihan sepenuhnya kepada Pihak Kedua, selama masa Prakerin.</p>
            <p class="title"><br><b>Pasal 3</b></p>
        </div>

        <div class="terms">
            <p>Pihak Pertama bersedia memenuhi semua prosedur dan persyaratan Prakerin di Hotel Pihak Kedua, dengan prinsip sama-sama<br> menguntungkan.</p>
            <p class="title"><br><b>Pasal 4</b></p>
        </div>

        <div class="terms">
            <p>Pihak Pertama bersedia mengantar Trainee, mengadakan monitoring dan menjemputnya pada akhir masa On The Job Training<br><br><br><br></p>
            <p class="title"><br><b>Pasal 5</b></p>
        </div>

        <div class="terms">
            <p>Pihak Kedua bersedia menerima dan mengatur pelaksanaan On The Job Training sesuai dengan permintaan Pihak Pertama serta<br> menyesuaikannya dengan situasi dan kondisi Hotel pada saat tersebut.</p>
            <p class="title"><br><b>Pasal 6</b></p>
        </div>

        <div class="terms">
            <p>Pihak Kedua berhak menegur dan atau mengembalikan Trainee kepada Pihak Pertama apabila yang bersangkutan melakukan<br> tindakan-tindakan indisipliner.</p>
            <p class="title"><br><b>Pasal 7</b></p>
        </div>

        <div class="terms">
            <p>Pihak Kedua berkewajiban memberikan Certifikat kepada Trainee pada akhir masa On TheJob Training.</p>
            <p class="title"><br><b>Pasal 8</b></p>
        </div>

        <div class="terms">
            <p>Pihak Kedua bersedia memprioritaskan tamatan Pihak Pertama untuk menjadi karyawan diHotel Pihak Kedua. Apabila keadaan<br> memungkinkan dan apabila yang bersangkutan dapat memenuhi persyaratan yang ditetapkan Pihak Kedua.</p>
            <p class="title"><br><b>Pasal 9</b></p>
        </div>

        <div class="terms">
            <p>Perjanjian ini berlaku sejak disetujui dan ditanda-tangani oleh kedua Pihak.</p>
            <p class="title"><br><b>Pasal 10</b></p>
        </div>

        <div class="terms">
            <p>Hal-hal yang belum tercantum dalam perjanjian kerjasama ini akan diatur kemudian dengan jalan musyawarah antara kedua Pihak.</p>
        </div>

        <div class="terms">
            <p>Demikianlah Perjanjian Kerjasama ini dibuat dengan sebenar-benarnya dan tanpa paksaan dari pihak manapun.</p>
        </div>

        {{-- <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>:</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jenis Produk</td>
                        <td>:</td>
                        <td>Item Barang</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            Spesifikasi Produk
                            <ul>
                                <li>Jenis</li>
                                <li>Ukuran</li>
                                <li>Jumlah</li>
                                <li>Warna</li>
                            </ul>
                        </td>
                        <td>:</td>
                        <td>
                            <ul>
                                <li>{{ $Item->products }}</li>
                                <li>{{ $Item->product_size }}</li>
                                <li>{{ $Item->quantity }}</li>
                                <li>{{ $Item->product_color }}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Jangka Waktu Kerjasama</td>
                        <td>:</td>
                        <td>{{ $Mou->waktuMulai }} - {{ $Mou->waktuSelesai }}</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Jangka Waktu Pembayaran (TOP)</td>
                        <td>:</td>
                        <td>30 Hari setelah tukar faktur</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Sanksi dan Denda</td>
                        <td>:</td>
                        <td>
                            <p>Pihak Pertama berhak mengenakan sanksi dan denda terhadap Pihak kedua dengan ketentuan sebagai berikut:</p>
                            <ul>
                                <li>Pihak Pertama berhak mengenakan denda sebesar 2% dari total seluruh Surat Pesanan pada periode promosi tersebut
                                    untuk keterlambatan pengiriman Produk teritung 8 hari kalender sebelum tanggal periode promosi yang ditetapkan Pihak Pertama.</li>
                                <li>Pihak Pertama berhak mengenakan denda sebesar 50% dari total seluruh Surat Pesanan pada periode promosi tersebut apabila Produk yang diterima
                                    tidak sesuai dengan contoh yang telah disetujui oleh Pihak Pertama.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Pengakhiran Perjanjian</td>
                        <td>:</td>
                        <td>
                            <ul>
                                <li>Pihak Pertama secara sepihak dapat mengakhiri pernjanjian ini apabila Pihak Kedua Lalai atau tidak melaksanakan sebagaian/keseluruhan
                                    ketentuan perjanjian ini.</li>
                                <li>Dalam hal perjanjian ini berakhir karena sebab apapun.
                                    Para Pihak masih berkewajiban untuk memenuhi kewajibannya yang masih timbul sebelum perjanjian ini diakhiri.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> --}}

        {{-- <div class="terms">
            <p>2. Ketentuan dan syarat lain sehubungan dengan kerjasama ini tertuang Syarat dan Ketentuan Umum, yang menjadi satu kesatuan<br> dan tidak terpisahkan dengan Perjanjian ini.</p>
        </div>

        <div class="closure">
            <p>Demikianlah Perjanjian Ini dibuat atas dasar kesepakatan kedua belah pihak, keduanya bermaterai cukup, serta ditandatangani oleh <br>kedua belah pihak. masing masing rangkapnya memiliki kuasa hukum yang sama dan masing-masing pihak akan memegang satu<br> diantaranya sebagai aslinya.</p>
        </div> --}}

        {{-- <div class="sign">
            <div>
              <span><b>Pihak Pertama</b></span>
              <span><b>PT. Indomarco Prismatama</b></span>
              <span><b><br><br><br>(Bp Farhan Sujatmiko)</b></span>
            </div>
            <div>
              <span><br><br><b>Pihak Kedua</b></span>
              <span><b>PT. Kokikit Teknologi Oase</b></span>
              <span><b><br><br><br>(BP Andry Suhaili)</b></span>
            </div>
        </div> --}}

        <table class="signature-table">
            <tr>
                <td>
                    <b>Pihak II,</b><br>
                    General Manager<br>
                    Cipta Karya {{ $Item->nama_hotel }}
                </td>
                <td></td>
                <td>
                    Jakarta, <?php echo $formattedDate; ?><br><br><br>
                    <b>Pihak I,</b><br>
                    Kepala Sekolah SMKP<br>
                </td>
            </tr>
            <tr class="sign-line">
                <td><b><br><br><br>(Rico Sutanto)</b></td>
                <td></td>
                <td><b><br><br><br>(Rahardian Agus M.Pd)</b></td>
            </tr>
        </table>

    </div>

</body>

</html>
