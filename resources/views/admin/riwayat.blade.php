@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-4">Semua Riwayat</h1>
@if(session('success'))
<div id="successAlert"
     class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded-lg">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div id="errorAlert"
     class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg">
    {{ session('error') }}
</div>
@endif

<script>
setTimeout(() => {
    document.getElementById('successAlert')?.remove();
    document.getElementById('errorAlert')?.remove();
}, 3000);
</script>
<div class="overflow-x-auto">
<table class="w-full bg-white rounded shadow text-sm">
    <thead>
        <tr class="border-b">
            <th>Nama</th>
            <th>Usia</th>
            <th>BB</th>
            <th>TB</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>JK</th>
            <th>Tensi</th>
            <th>Nadi</th>
            <th>Pernapasan</th>
            <th>Status</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $d)
        <tr class="border-b text-center">

            <td>{{ $d->nama }}</td>
            <td>{{ $d->usia }}</td>
            <td>{{ $d->bb }}</td>
            <td>{{ $d->tb }}</td>
            <td>{{ $d->alamat }}</td>
            <td>{{ $d->pekerjaan }}</td>
            <td>{{ $d->jk }}</td>
            <td>{{ $d->sistolik }}/{{ $d->diastolik }}</td>
            <td>{{ $d->nadi }}</td>
            <td>{{ $d->pernapasan }}</td>

            <!-- STATUS -->
            <td>
                @if($d->hasil == 'Normal')
                    <span class="text-green-600 font-bold">Normal</span>
                @elseif($d->hasil == 'Kurang')
                    <span class="text-red-600 font-bold">Kurang</span>
                @else
                    <span class="text-yellow-600 font-bold">{{ $d->hasil }}</span>
                @endif
            </td>

            <td>{{ $d->created_at }}</td>

            <td>
                <form action="/admin/riwayat/delete/{{ $d->id }}"
                    method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus riwayat ini?')">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="text-red-500">
                        Hapus
                    </button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
