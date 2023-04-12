@extends('layouts.template')
@section('content')
<div class="card-body" style="margin-left: 250px;">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($bk))? method_field('PUT') : '' !!}

    <div class="form-group">
        <label>Judul</label>
        <input class="form-control" @error('Judul') is-invalid @enderror type="text" value="{{ isset($bk)? $bk->Judul : old('Judul') }}" name="Judul">
        @error('Judul')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Penulis</label>
        <input class="form-control" @error('Penulis') is-invalid @enderror type="text" value="{{ isset($bk)? $bk->Penulis : old('Penulis') }}" name="Penulis">
        @error('Penulis')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <div class="form-group">
            <label>Genre</label>
            <select class="form-control" @error('Genre') is-invalid @enderror value="{{ isset($bk)? $bk->Genre : old('Genre') }}" name="Genre">
              <option value="">--Genre--</option>
              <option value="komedi">komedi</option>
              <option value="aksi">aksi</option>
              <option value="horor">horor</option>
            </select>
            @error('Genre')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
    </div>
    
    <div class="form-group">
        <div class="form-group">
             <label>Tangal Terbit</label>
             <input class="form-control" @error('Tanggal_Terbit') is-invalid @enderror type="date" value="{{ isset($mhs)? $mhs->Tanggal_Terbit : old('Tanggal_Terbit') }}" name="Tanggal_Terbit">
             @error('Tanggal_Terbit')
                 <span class="error invalid-feedback">{{ $message }}</span>
             @enderror
           </div>
         </div>
     </div>
    
    
    <button type="submit" class="btn btn-primary btn-block">submit</button>

@endsection
@push('custom_js')
    <script>
        
    </script>
@endpush