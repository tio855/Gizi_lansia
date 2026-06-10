@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-4">Manajemen User</h1>
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
<table class="w-full bg-white rounded shadow">
    <thead>
        <tr class="border-b">
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $u)
        <tr class="border-b">
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>

            <td>
                <form action="/admin/users/update/{{ $u->id }}" method="POST">
                    @csrf
                    <select name="role" onchange="this.form.submit()">
                        <option value="user" {{ $u->role=='user'?'selected':'' }}>User</option>
                        <option value="admin" {{ $u->role=='admin'?'selected':'' }}>Admin</option>
                    </select>
                </form>
            </td>

            <td>
                <form action="/admin/users/delete/{{ $u->id }}"
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

@endsection
