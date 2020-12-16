@extends('admin.templates.default')

@section('content')
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Penulis</h3>
              </div>
              <div class="card-body">
                
                <form action="{{route('admin.author.store')}}" method="post">
                    @csrf
                    <div class="input-group mb-3 invalid-feedback">
                    
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="name" class="form-control"  placeholder="Masukan Nama Penulis" value="{{old('name')}}" required>
    
                    </div>
                    @error('name')
                            <span class="help-block">{{ $message }}</span>
                    @enderror

                    <div class="input-group mb-3 float-sm-right">
                        <button type="submit" value="Tambah" class="btn btn-primary">Simpan</button>
                    </div>
                    <!-- /input-group -->
                
                <!-- /.card-body -->
                </form>
              </div>
        
</div>
@endsection