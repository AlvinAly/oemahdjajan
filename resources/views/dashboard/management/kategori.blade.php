@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Item</h1>
    </div>

    {{-- Alert dari Session dari create --}}
    @if (session()->has('success'))
        <div class="alert alert-info col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- Alert dari deleted --}}
    @if (session()->has('deleted'))
        <div class="alert alert-danger col-lg-8" role="alert">
            {{ session('deleted') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <table class="table table-striped table-sm col-lg-8">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Tanggal dibuat</th>
                    <th scope="col">Tanggal diupdate</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($kategori as $x)
                    {{-- @for ($i = 0; $i < 5; $i++) --}}
                    <tr>
                        <td>{{ $x->id }}</td>
                        <td>{{ $x->nama_kategori }}</td>
                        <td>{{ $x->created_at }}</td>
                        <td>{{ $x->updated_at }}</td>



                    </tr>
                    {{-- @endfor --}}
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
