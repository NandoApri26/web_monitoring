@extends('templates.master')
@yield('title', 'Data Gerbang')

@section('main')
<div id="main">
<header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Petugas Kantor</h3>
                    <p class="text-subtitle text-muted">PT Pertamina Patra Niaga Regional Sumbagsel</p>
                    <div class="row">
                        <div class="col">                            
                            @if (session('status'))                           
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <center>{{ session('status') }}</center>
                            </div>
                            
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <a href="{{ url('/master-data/officer/create')}}" class="btn btn-primary" role="button">
                            <span style="margin-right: 10px;"><span class="fa-fw select-all fas"></span></span> Tambah Petugas 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Tabel Petugas
                </div>
                <div class="card-body">

                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Petugas</th>
                                <th>No Pegawai</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gerbang as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_petugas }}</td>
                                <td>{{ $item->no_pegawai }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ (strlen($item->password)>10) ? substr($item -> password, 0,8) . '...':$item->password }}</td>

                                
                                <td>
                                    <a href="{{url('/master-data/officer/'.$item->id).'/edit'}}" class="btn btn-info"><span class="fa-fw select-all fas"></span></a>
                                    <form method="POST" action="{{url('/master-data/officer/'.$item->id)}}">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-danger mt-3"><span class="fa-fw select-all fas"></span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

</div>
@endsection