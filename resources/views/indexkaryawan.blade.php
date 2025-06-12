@extends('template')

@section('content')
	<h2>Data Karyawan</h2>

<br>
</br>
    <p> Cari karyawan :</p>
    <form action="/karyawan/cari" method="GET" class="form-inline">
        <input type="text" class="form-control" name="cari" placeholder="Cari Karyawan ..">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
			<td class="text-uppercase">{{ $p->namalengkap }}</td>
			<td>{{ $p->divisi }}</td>
			<td class="text-lowercase">{{ $p->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <div class="d-flex justify-content-end mt-3 mb-3"> {{-- mt-3 untuk margin atas, mb-3 untuk margin bawah --}}
        <a href="/karyawan/tambahkaryawan" class="btn btn-primary">
            + Tambah Karyawan
        </a>
    </div>

    <br/>
	Halaman : {{ $karyawan->currentPage() }} <br/>
	Jumlah Data : {{ $karyawan->total() }} <br/>
	Data Per Halaman : {{ $karyawan->perPage() }} <br/>

    {{ $karyawan->links() }}


@endsection
