<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use App\Models\MoU;
use App\Models\MouItem;
use App\Models\Category;
use App\Models\Signature;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use setasign\Fpdi\Fpdi;
use setasign\Fpdf\Fpdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class MoUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (request('kerjasama')) {
        //     $kerjasama = Kerjasama::firstWhere('id', request('kerjasama'));
        //     $title = ' pada jenis ' . $kerjasama->nama;
        // }

        // return view('contents.MoU.index', [
        //     "title" => "Semua MoU" . $title,
        //     "MoUs" => MoU::latest()->filter(request(['search', 'kerjasama']))->paginate(9)->withQueryString(),
        //     "kerjasamas" => Kerjasama::all(),
        // ]);

        return view('contents.MoU.index', [
            'title' => 'Semua MoU',
            'MoUs' => MoU::all(),
            'Category' => Category::all()
            // 'kerjasamas' => Kerjasama::all(),
        ]);
    }

    public function dashboard()
    {
        return view('contents.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'fileMoU' => 'required|mimes:pdf',
            'denganPihak' => 'required',
            'waktuMulai' => 'required',
            'waktuSelesai' => 'required',
            'textMoU' => 'max:1000',
        ]);

        $waktuSelesai = $request['waktuSelesai'];

        if ($request['howLong'] === "Tahun") {
            $validatedData['waktuSelesai'] = \Carbon\Carbon::create($validatedData['waktuMulai'])->addYears($waktuSelesai);
        } else if ($request['howLong'] === "Bulan") {
            $validatedData['waktuSelesai'] = \Carbon\Carbon::create($validatedData['waktuMulai'])->addMonths($waktuSelesai);
        } else {
            $validatedData['waktuSelesai'] = \Carbon\Carbon::create($validatedData['waktuMulai'])->addWeeks($waktuSelesai);
        }

        if ($request->file('fileMoU')) {
            $file = $request->file('fileMoU');
            $randomName = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/fileMoU', $randomName);

            $validatedData['fileMoU'] = $randomName;
        }

        // Tambahkan 'denganPihak' ke dalam $validatedData
        $validatedData['denganPihak'] = $request->input('denganPihak');

        $mou = MoU::create($validatedData);

        // Tambahkan log untuk memeriksa $validatedData
        //Log::info('Validated Data:', $validatedData);

        $data = [
            'mou_id' => $mou->id,
            'category' => $request->input('category'),
            'nama_hotel' => $request->input('nama_hotel'),
            'jumlah_siswa' => $request->input('jumlah_siswa'),
            'alamat_hotel' => $request->input('alamat_hotel')
        ];

        MouItem::create($data);
        Alert::toast('Data MoU Berhasil Ditambahkan!', 'success');
        return redirect('/MoU');
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'judul' => 'required|max:255',
    //         'fileMoU' => 'required|mimes:pdf',
    //         'denganPihak' => 'required',
    //         // 'kerjasama_id' => 'required',
    //         'waktuMulai' => 'required',
    //         'waktuSelesai' => 'required',
    //         'textMoU' => 'max:1000',
    //     ]);

    //     // Tambahkan 'denganPihak' ke dalam $validatedData
    //     $validatedData['denganPihak'] = $request->input('denganPihak');

    //     $waktuSelesai = $request['waktuSelesai'];
    //     if ($request['howLong'] === "Tahun") {
    //         $validatedData['waktuSelesai'] = \Carbon\Carbon::create($validatedData['waktuMulai'])->addYears($waktuSelesai);
    //     } else if ($request['howLong'] === "Bulan") {
    //         $validatedData['waktuSelesai'] = \Carbon\Carbon::create($validatedData['waktuMulai'])->addMonths($waktuSelesai);
    //     } else {
    //         $validatedData['waktuSelesai'] = \Carbon\Carbon::create($validatedData['waktuMulai'])->addWeeks($waktuSelesai);
    //     }

    //     if ($request->file('fileMoU')) {
    //         $validatedData['fileMoU'] = $request->file('fileMoU')->store('FileMoU');
    //     }

    //     MoU::create($validatedData);
    //     Alert::toast('Data MoU Berhasil Ditambahkan!', 'success');
    //     return redirect('/MoU');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MoU  $moU
     * @return \Illuminate\Http\Response
     */
    public function show(MoU $MoU)
    {
        // Eager load relasi
        $MoU->load('category', 'items');

        return view('contents.MoU.show', [
            'title' => 'Detail MoU',
            'MoU' => $MoU,
            'Product' => MouItem::where('mou_id', $MoU->id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MoU  $moU
     * @return \Illuminate\Http\Response
     */
    public function edit(MoU $MoU)
    {
        return view('contents.MoU.edit', [
            'title' => 'Perubahan MoU',
            'MoU' => $MoU,
            'Product' => MouItem::where('mou_id', $MoU->id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MoU  $moU
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, MoU $MoU)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'fileMoU' => 'mimes:pdf',
            'denganPihak' => 'required',
            'waktuMulai' => 'required',
            'waktuSelesai' => 'required',
            'textMoU',
        ]);

        $validateProduct = $request->validate([
            "category" => 'required',
            "nama_hotel" => 'required',
            "jumlah_siswa" => 'required',
            "alamat_hotel" => 'required',
        ]);

        if ($request->file('fileMoU')) {
            if ($request->oldFileMoU) {
                Storage::delete($request->oldFileMoU);
            }
            $validatedData['fileMoU'] = $request->file('fileMoU')->store('FileMoU');
        }

        MoU::where('id', $MoU->id)->update($validatedData);
        MouItem::where('mou_id', $MoU->id)->update($validateProduct);

        Alert::toast('Data MoU Berhasil Diubah!', 'success');
        return redirect('/MoU');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MoU  $moU
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function showApproveForm($id)
    {
        $mou = MoU::findOrFail($id);
        $moutItem = MouItem::where('mou_id', $id)->first();

        MoU::where('id', $id)->update(["status" => "Selesai"]);

        // return view('contents.MoU.approve', compact('mou'));

        // return redirect('/MoU');

        // MoU::where('id', $id)->update(["status" => "Selesai"]) ;

        // for testing
        // return view('pdf.index', [
        //     'Mou' => $mou,
        //     "Item" => $moutItem
        // ]);

        $pdf = Pdf::loadView('pdf.index', [
            'Mou' => $mou,
            "Item" => $moutItem
        ]);

        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
        ]);

        return $pdf->stream('mou.pdf');
    }

    public function approve(Request $request, $id)
    {
        $request->validate([
            'signature' => 'required',
        ]);

        $mou = MoU::findOrFail($id);

        // Simpan tanda tangan
        $signature = new Signature();
        $signature->user_id = Auth::id();
        $signature->mou_id = $mou->id;
        $signature->signature = $request->signature; // Misal: base64 string dari tanda tangan
        $signature->save();

        // Kondisi cek
        // $mou->status = 'Selesai';
        // $mou->save();

        return redirect()->route('mous.index')->with('success', 'MoU approved successfully.');
    }

    public function reject($id)
    {
        $mou = MoU::find($id);

        if (!$mou) {
            abort(404);
        }

        $mou->status = 'Ditolak';
        $mou->save();

        // Kirim notifikasi ke WhatsApp
        $mitraUser = User::where('role', 'mitra')->first(); // Asumsi hanya satu user dengan role mitra
        if ($mitraUser) {
            $this->sendWhatsAppNotification($mitraUser->phone_number, "Maaf untuk pengajuan MoU Anda untuk saat ini Kami tolak dan tidak dapat Kami tindaklanjuti");
        }

        return redirect('/MoU')->with('status', 'MoU berhasil ditolak.');
    }

    protected function sendWhatsAppNotification($phoneNumber, $message)
    {
        // Logika untuk mengirim pesan WhatsApp menggunakan API pilihan Anda
        // Contoh dengan menggunakan API
        $response = Http::post('https://api.whatsapp.com/send', [
            'phone' => $phoneNumber,
            'message' => $message,
        ]);

        if ($response->successful()) {
            // Pesan berhasil dikirim
        } else {
            // Gagal mengirim pesan
        }
    }
}
