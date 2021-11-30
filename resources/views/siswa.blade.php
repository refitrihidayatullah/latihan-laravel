@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h3>Data siswa</h3>
    <div class="container">
        <table class="table table-bordered table-striped table-over m-auto">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Tanggal Lahir</th>
                </tr>
            </thead>
            <tr>
                <td>Andi</td>
                <td>101</td>
                <td>2000 MEI 19</td>
            </tr>
            <tr>
                <td>Andini</td>
                <td>102</td>
                <td>2000 JUNI 10A</td>
            </tr>
        </table>
    </div>
</div>
@endsection