@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <form class="row mb-3 mt-5" action="{{ route('cariTransaksi') }}" method="POST">
        @csrf
        <div class="col-md-6">
            <div class="d-flex flex-row">
                <input type="text" value="{{ (request()->cariTransaksi) ? request()->cariTransaksi : '' }}" name="cariTransaksi" class="form-control" placeholder="cari Transaksi">
                <button type="submit" class="btn btn-primary ml-3">Cari</button>
            </div>
        </div>
    </form>
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

            <a href="{{url('transaksi/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
  
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Judul Buku</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if($trs->count() > 0)
                  @foreach($trs as $i => $t)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$t->nama}}</td>
                      <td>{{$t->judul_buku}}</td>
                      <td>{{$t->tanggal_pinjam}}</td>
                      <td>{{$t->tanggal_kembali}}</td>
                      <td>{{$t->Status}}</td>
                      <td>
                        <!-- Bikin tombol edit dan delete -->
                        <a href="{{ url('/transaksi/'. $t->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirm-delete">Hapus</button>
                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title" id="myModalLabel">Konfirmasi Penghapusan Data</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  </div>
                                  <div class="modal-body">
                                      <p>Anda yakin ingin menghapus data ini?</p>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                      <form method="POST" action="{{ url('/transaksi/'.$t->id) }}" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
                @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        <!-- /.card-body -->
        <div class="row">
          <div class="col-md-12">
              {{ $trs->links() }}
          </div>
      </div>
        <div class="card-footer">
          footer
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