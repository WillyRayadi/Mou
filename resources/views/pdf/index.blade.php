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

        .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .parties {
            display: flex;
            justify-content: center;
        }

        .mou {
            margin-top: 20px;
            text-align: left;
        }

        ol {
            list-style-type: numeric;
        }

        li {
            margin-bottom: 10px;
        }

        .bold {
            font-weight: 700;
        }

        .parties {
            width: 30%;
            text-align: justify;
            margin-top: 10px;
        }

        .terms {
            width: 32%;
            text-align: justify;
            margin-top: 10px;
        }

        .table {
            margin-top: 15px;
            width: 30%;
            text-align: justify;
        }

        .closure {
            width: 32%;
            text-align: justify;
        }

        .sign {
            width: 32%;
            margin-top: 30px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            text-align: left;
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
            <p>Perjanjian Kerjasama ini dibuat di Jakarta, pada tanggal {{ $Mou->waktuMulai }} <br> oleh dan antara:</p>
        </div>
        <div class="parties">
            <ol>
                <li>
                    <span class="bold">Bp xxx</span>, swasta, bertempat tinggal di Makassar.
                    dalam hal ini bertindak dalam kedudukannya selaku Direktur, dari dan oleh karena itu, untuk dan atas nama serta sah dan berwenang mewakili <span class="bold">PT...</span>
                    , berkedudukan di Gedung Menara Indomaret Jalan Boulevard Untuk selanjutnya disebut sebagai "<span class='bold'>PIHAK PERTAMA</span>".
                </li>
                <li>
                    <span class="bold">Bp xxx</span>, swasta, bertempat di Jakarta.
                    dalam hal ini bertindak dalam kedudukannya selaku Direktur, dari dan oleh karena itu, untuk dan atas nama serta sah dan berwenang mewakili <span class="bold">PT...</span>
                    , berkedudukan di Jakarta Pusat Untuk selanjutnya disebut sebagai "<span class='bold'>PIHAK KEDUA</span>".
                </li>
            </ol>

        </div>
        <span class="terms">
            Pihak Pertama membutuhkan Produk sebagaimana Pihak Kedua akan memenuhi kebutuhan pihak Pertama atas produk dengan rincian sebagai berikut:
        </span>

        <span class="table">
            <ol>
                <li>
                    Pihak Pertama dan Pihak Kedua setuju dan sepakat untuk mengikatkan diri dalam perjanjian kerjasama ini dengan ketentuan sebagai berikut:
                    <table border="1" style="margin-top: 5px; width: 100%;">
                        <tbody>
                            <tr style="text-align: center;">
                                <td>1</td>
                                <td>Jenis Produk</td>
                                <td>:</td>
                                <td>Item Barang</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td>2</td>
                                <td style="text-align: justify">
                                    Spesifikasi Produk <br>
                                    a. Jenis <br>
                                    b. Ukuran <br>
                                    c. Jumlah <br>
                                    d. Warna <br>

                                </td>
                                <td>:</td>
                                <td style="text-align: justify">
                                    <br>
                                    <br>
                                    {{ $Item->products }} <br>
                                    {{ $Item->product_size }} <br>
                                    {{ $Item->quantity }} <br>
                                    {{ $Item->product_color }}
                                </td>
                            </tr>
                            <tr style="text-align: justify;">
                                <td>3</td>
                                <td>Jangka Waktu Kerjasama</td>
                                <td>:</td>
                                <td>{{ $Mou->waktuMulai}} - {{ $Mou->waktuSelesai }}</td>
                            </tr>
                            <tr style="text-align: justify;">
                                <td>4</td>
                                <td>Jangka Waktu Pembayaran (TOP)</td>
                                <td>:</td>
                                <td>30 Hari setelah tukar faktur</td>
                            </tr>
                            <tr style="text-align: justify;">
                                <td>5</td>
                                <td>Sanksi dan Denda</td>
                                <td>:</td>
                                <td>
                                    Pihak Pertama berhak mengenakan sanksi dan denda terhadap Pihak kedua dengan ketentuan sebagai berikut: <br><br>
                                    a. Pihak Pertama berhak mengenakan denda sebesar 2% dari total seluruh Surat Pesanan pada periode promosi tersebut
                                    untuk keterlambatan pengiriman Produk teritung 8 hari kalender sebelum tanggal periode promosi yang ditetapkan Pihak Pertama. <br>
                                    b.Pihak Pertama berhak mengenakan denda sebesara 50% dari total seluruh Surat Pesanan pada periode promosi tersebut apabila Produk yang diterima
                                    tidak sesuai dengan contoh yang telah disetujui oleh Pihak Pertama.
                                </td>
                            </tr>
                            <tr style="text-align: justify;">
                                <td>6</td>
                                <td>Pengakhiran Perjanjian</td>
                                <td>:</td>
                                <td>
                                    a. Pihak Pertama secara sepihak dapat mengakhiri pernjanjian ini apabila Pihak Kedua Lalai atau tidak melaksanakan sebagaian/keseluruhan
                                    ketentuan perjanjian ini. <br>
                                    b. Dalam hal perjanjian ini berakhir karena sebab apapun.
                                    Para Pihak masih berkewajiban untuk memenuhi kewajibannya yang masih timbul sebelum perjanjian ini diakhiri.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                <li>
                    Ketentuan dan Syarat lain sehubungan dengan kerjasama ini tertuang Syarat dan Ketentuan Umum, yang menjadi satu kesatuan dan tidak terpisahkan dengan Perjanjian Ini.
                </li>
            </ol>
        </span>

        <span class="closure">
            Demikianlah Perjanjian Ini dibuat atas dasar kesepakatan kedua belah pihak, keduanya bermaterai cukup. serta ditandatangani oleh kedua belah pihak. masing masing rangkapnya memiliki
            kuasa hukum yang sama dan masing-masing pihak akan memegang satu diantaranya sebagai aslinya.
        </span>

        <div class="sign">
            <div class="firstSign">
                <span class="bold">
                    Pihak Pertama <br>
                    PT...
                </span>
            </div>
            <span class="bold">
                Pihak Kedua <br>
                PT...
            </span>
        </div>

        <div class="sign" style="margin-top: 80px">
            <div class="firstSign">
                <span class="bold">
                    (BP xxxxxxxxx)
                </span>
            </div>
            <span class="bold">
                (BP xxxxxxxxx)
            </span>
        </div>
    </div>
    </div>

</body>

</html>