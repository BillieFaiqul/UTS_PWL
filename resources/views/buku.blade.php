@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Buku</li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">LIST Buku</h3>
          
            </div>
            <form class="row mb-3 mt-5" action="{{ route('cariBuku') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="d-flex flex-row">
                        <input type="text" value="{{ (request()->cariBuku) ? request()->cariBuku : '' }}" name="cariBuku" class="form-control" placeholder="cari buku">
                        <button type="submit" class="btn btn-primary ml-3">Cari</button>
                    </div>
                </div>
            </form>



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
          <table class="table table-bordered tabel-hover">
            <a href="{{url('buku/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
            <thead class="tabel">
                <th class="text-center bg-secondary">ID</th>
                <th class="text-center bg-secondary">Judul </th>
                <th class="text-center bg-secondary">Penulis</th>
                <th class="text-center bg-secondary">Tanggal Terbit</th>
                <th class="text-center bg-secondary">Genre</th>
                <th class="text-center bg-secondary">Opsi</th>
              </thead>
              @foreach ($bk as $buku)
              <tr>
                <td>{{$buku->id}}</td>
                <td>{{$buku->Judul}}</td>
                <td>{{$buku->Penulis}}</td> 
                <td>{{$buku->Tanggal_Terbit}}</td>
                <td>{{$buku->Genre}}</td>
                <td>
                  <!-- Bikin tombol edit dan delete -->
                  <a href="{{ url('/buku/'. $buku->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
  
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
                                      <form method="POST" action="{{ url('/buku/'.$buku->id) }}" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                </td>
              </tr>
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->

        <div class="row">
            <div class="col-md-12">
                {{$bk->links()}}
            </div>
        </div>

        <div class="card-footer">
          Lihat bawah berarti selesai
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

  @endsection

  @push('custom_css')
      <style>
        th{
            
        }
        /* .card{
            background:green;
            color:aliceblue;
            transition: 0.5s;
        }

        .card:hover{
            background: aqua;
            color: blue;
            transform:scale(0.9);
        } */
      </style>
  @endpush

  @push('custom_js')
      {{-- <script>
        alert('Halaman Home')
      </script> --}}
  @endpush