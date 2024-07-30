@extends('layouts.template')
@section('contents')

<h1 class="text-center mt-5">Semua MoU</h1>
<div class="text-center mb-3">
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalTambahMoU"><i class="bi bi-clipboard-plus-fill"></i> Tambah MoU</button>
</div>
<p class="text-center">Catatan : Jika Anda ingin mereview file pdf tanpa download, diwajibkan mematikan akses Internet Download Manager untuk URL ini</p>
<div class="container">
    <table id="example" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Bekerjasama dengan</th>
                {{-- <th>Jenis MoU</th> --}}
                <th>Masa Berlaku</th>
                <th>Status</th>
                <th>
                    @if (isset(Auth::user()->role) && Auth::user()->role == 'admin')
                    Aksi
                    @endif
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($MoUs as $MoU)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a target="_blank" href="storage/fileMoU/{{ $MoU->fileMoU }}">{{ $MoU->judul }}</a></td>
                <td>{{ $MoU->denganPihak }}</td>
                {{-- <td>{{ $MoU->kerjasama->nama }}</td> --}}
                <td>{{ \Carbon\Carbon::create($MoU->waktuSelesai)->diffForHumans() }}</td>
                <td><span class="badge rounded-pill {{ ($MoU->status === "Berlaku") ? "bg-success" : (($MoU->status === "Hampir Berakhir") ? "bg-warning" : "bg-danger") }}">{{ $MoU->status }}</span></td>
                <td>
                    <div class="btn-group">
                        {{-- @if (isset(Auth::user()->role) && Auth::user()->role == 'admin') --}}
                        @if (Auth::user()->role == 'admin')
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/MoU/{{ $MoU->id }}/edit">Edit</a></li>
                            <li><a class="dropdown-item" href="/MoU/{{ $MoU->id }}">Detail</a></li>
                            {{-- <li>
                                    @if ($MoU->status != 'Selesai')
                                    <a href="{{ route('mous.showApproveForm', $MoU->id) }}" class="btn btn-success">Approve</a></li>
                            @endif
                            <li>
                                @if ($MoU->status != 'Selesai' && $MoU->status =='Ditolak')
                                <form action="{{ route('mous.reject', $MoU->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Reject</button>
                                </form>
                            </li>
                            @endif --}}
                            <li>
                                @if ($MoU->status != 'Selesai' && $MoU->status != 'Ditolak')
                                <form action="{{ route('mous.reject', $MoU->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Reject</button>
                                </form>
                                <a href="{{ route('mous.showApproveForm', $MoU->id) }}" class="dropdown-item">Approve</a>
                                @endif
                            </li>
                        </ul>
                        @endif
                        {{-- <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                        {{-- <i class="bi bi-three-dots"></i> --}}
                        {{-- </button> --}}
                        {{-- <ul class="dropdown-menu">
                                @if (Auth::user()->role =='mitra')
                                
                                @elseif (Auth::user()->role == 'admin')
                                <li><a class="dropdown-item" href="/MoU/{{ $MoU->id }}/edit">Edit</a></li>
                        <li><a class="dropdown-item" href="/MoU/{{ $MoU->id }}">Detail</a></li>
                        @endif

                        </ul> --}}
                        {{-- <ul class="dropdown-menu"> --}}
                        {{-- <li><a class="dropdown-item" href="/MoU/{{ $MoU->id }}/edit">Edit</a></li> --}}
                        {{-- <li><a class="dropdown-item" href="/MoU/{{ $MoU->id }}">Detail</a></li> --}}
                        {{-- </ul> --}}
                        {{-- @endif --}}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Bekerjasama dengan</th>
                {{-- <th>Jenis MoU</th> --}}
                <th>Masa Berlaku</th>
                <th>Status</th>
                <th>
                    @if (isset(Auth::user()->role) && Auth::user()->role == 'admin')
                    Aksi
                    @endif
                </th>
            </tr>
        </tfoot>
    </table>
</div>

@include('modals.tambahMoU')

@endsection