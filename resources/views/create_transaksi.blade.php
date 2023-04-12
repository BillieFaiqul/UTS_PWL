@extends('layouts.template')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1></h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Transaksi</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ $url_form }}">
            @csrf
            {!! (isset($trs))? method_field('PUT') : '' !!}

            <div class="form-gorup">
                <label>id</label>
                <input class="form-control @error('id') is-invalid @enderror" value="{{ isset($trs)? $trs->id : old('id') }}" name="id" type="text">
                @error('id')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Nama</label>
                <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($trs)? $trs->nama : old('nama') }}" name="nama" type="text">
                @error('nama')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Judul Buku</label>
                <input class="form-control @error('judul_buku') is-invalid @enderror" value="{{ isset($trs)? $trs->judul_buku : old('judul_buku') }}" name="judul_buku" type="text">
                @error('judul_buku')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Tanggal Pinjam</label>
                <input class="form-control @error('tanggal_pinjam') is-invalid @enderror" value="{{ isset($trs)? $trs->tanggal_pinjam : old('tanggal_pinjam') }}" name="tanggal_pinjam" type="date">
                @error('tanggal_pinjam')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Tanggal Kembali</label>
                <input class="form-control @error('tanggal_kembali') is-invalid @enderror" value="{{ isset($trs)? $trs->tanggal_kembali : old('tanggal_kembali') }}" name="tanggal_kembali" type="date">
                @error('tanggal_kembali')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Status</label>
                <input class="form-control @error('Status') is-invalid @enderror" value="{{ isset($trs)? $trs->Status : old('Status') }}" name="Status" type="text">
                @error('Status')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-sm btn-success my-2">Submit</button>
        </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
@endsection
@push('custom_js')
<script>
</script>
@endpush