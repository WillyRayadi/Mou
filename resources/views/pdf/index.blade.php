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
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
            text-align: justify;
        }

        .bold {
            font-weight: 700;
        }

        .parties, .terms, .closure {
            margin-top: 30px;
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
            <h3>PERJANJIAN KERJASAMA PENGADAAN (item barang)</h3>
            <h4>Nomor: 0{{ $Mou->id }}/PROCUREMENT/2024</h4>
        </div>
        <div class="mou">
            <p>Perjanjian Kerjasama ini dibuat di Jakarta, pada tanggal {{ $Mou->waktuMulai }} oleh dan antara:</p>
        </div>
        <div class="parties">
            <ol>
                <li>
                    <span class="bold">Bp xxx</span>, swasta, bertempat tinggal di Makassar.
                    dalam hal ini bertindak dalam kedudukannya selaku Direktur, dari dan oleh karena itu,<br> untuk dan atas nama serta sah dan berwenang mewakili <span class="bold">PT. Indomarco Prismatama</span>,
                    berkedudukan di Gedung Menara Indomaret<br> Jalan Boulevard Untuk selanjutnya disebut sebagai "<span class='bold'>PIHAK PERTAMA</span>".
                </li>
                <li>
                    <span class="bold">Bp xxx</span>, swasta, bertempat di Jakarta.
                    dalam hal ini bertindak dalam kedudukannya selaku Direktur, dari dan oleh karena itu,<br> untuk dan atas nama serta sah dan berwenang mewakili <span class="bold">PT. Kokikit Teknologi Indonesia</span>,
                    berkedudukan di Jakarta Pusat Untuk<br> selanjutnya disebut sebagai "<span class='bold'>PIHAK KEDUA</span>".
                </li>
            </ol>
        </div>

        <div class="terms">
            <p>1. Pihak Pertama membutuhkan Produk sebagaimana Pihak Kedua akan memenuhi kebutuhan pihak Pertama atas produk dengan rincian<br> sebagai berikut:</p>
        </div>

        <div class="table-container">
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
        </div>

        <div class="terms">
            <p>2. Ketentuan dan syarat lain sehubungan dengan kerjasama ini tertuang Syarat dan Ketentuan Umum, yang menjadi satu kesatuan<br> dan tidak terpisahkan dengan Perjanjian ini.</p>
        </div>

        <div class="closure">
            <p>Demikianlah Perjanjian Ini dibuat atas dasar kesepakatan kedua belah pihak, keduanya bermaterai cukup, serta ditandatangani oleh <br>kedua belah pihak. masing masing rangkapnya memiliki kuasa hukum yang sama dan masing-masing pihak akan memegang satu<br> diantaranya sebagai aslinya.</p>
        </div>

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
                    <b>PIHAK PERTAMA</b><br>
                    <b>PT. Indomarco Prismatama</b>
                </td>
                <td></td>
                <td>
                    <b>PIHAK KEDUA</b><br>
                    <b>PT. Kokikit Teknologi Oase</b>
                </td>
            </tr>
            <tr class="sign-line">
                <td><b><br><br><br>(Bp Farhan Sujatmiko)</b></td>
                <td></td>
                <td><b><br><br><br>(Bp Andry Suhaili)</b></td>
            </tr>
        </table>

    </div>

</body>

</html>
