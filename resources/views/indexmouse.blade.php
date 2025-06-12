@extends('template')

@section('content')
	<h3>Mouse Store Official</h3>

	<a href="/mouse/tambahmouse" class="btn btn-primary"> + Tambah Mouse</a>
<br>
</br>
    <p> Cari Mouse :</p>
    <form action="/mouse/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Mouse ..">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Merk Mouse</th>
			<th>Harga Mouse</th>
			<th>Tersedia</th>
			<th>Berat</th>
		</tr>
		@foreach($mouse as $p)
		<tr>
			<td>{{ $p->merkmouse }}</td>
			<td>{{ $p->hargamouse }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>{{ $p->berat }}</td>
			<td>
				<a href="/mouse/edit/{{ $p->mouse_ID }}" class="btn btn-success">Edit</a>
				<a href="/mouse/hapus/{{ $p->mouse_ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $mouse->currentPage() }} <br/>
	Jumlah Data : {{ $mouse->total() }} <br/>
	Data Per Halaman : {{ $mouse->perPage() }} <br/>

    {{ $mouse->links() }}


@endsection
