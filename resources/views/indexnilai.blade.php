@extends('template')

@section('content')
	<h3>NILAI KULIAH</h3>

	<a href="/eas/tambahdatanilai" class="btn btn-primary"> + Tambah Data</a>
<br>
</br>
    <p> Cari Data :</p>
    <form action="/eas/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Data ..">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>NRP</th>                <th>Nilai Angka</th>        <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $p)
		<tr>
			<td>{{ $p->normorinduksiswa }}</td>
			<td>{{ $p->nilaiangka }}</td>
			<td>{{ $p->sks }}</td>
			 <td>
                @php
                    $nilaiHuruf = '';
                    if ($p->nilaiangka >= 81) {
                        $nilaiHuruf = 'A';
                    } elseif ($p->nilaiangka >= 61 && $p->nilaiangka <= 80) {
                        $nilaiHuruf = 'B';
                    } elseif ($p->nilaiangka >= 41 && $p->nilaiangka <= 60) {
                        $nilaiHuruf = 'C';
                    } else { // <= 40
                        $nilaiHuruf = 'D';
                    }
                @endphp
                {{ $nilaiHuruf }}
            </td>

            {{-- Kolom Bobot (NilaiAngka x SKS) --}}
            <td>
                {{ $p->nilaiangka * $p->sks }}
            </td>
		</tr>
		@endforeach
	</table>



@endsection
