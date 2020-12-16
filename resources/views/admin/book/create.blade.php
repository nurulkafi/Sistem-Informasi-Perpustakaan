@extends('admin.templates.default')

@section('content')
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Buku</h3>
              </div>
              <div class="card-body">
                
                <form action="{{route('admin.book.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                    
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                        </div>
                        <input name="judul" class="form-control"  placeholder="Masukan Judul Buku" value="{{old('judul')}}" required>
    
                    </div>
                    @error('judul')
                            <span class="help-block">{{ $message }}</span>
                    @enderror
                    <div class="input-group mb-3">
                    
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-newspaper"></i></span>
                    </div>
                    <textarea name="deskripsi" class="form-control" placeholder="Masukan Deskripsi Buku">
                    {{old('deskripsi')}}
                    </textarea>
                     </div>
                    @error('deskripsi')
                            <span class="help-block">{{ $message }}</span>
                    @enderror
                    <div class="input-group mb-3">
                    
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <select name="author_id" id="" class="form-control select2">
                        @foreach($author as $author_id)
                          <option value="{{ $author_id->id}}">{{$author_id->name}}</option>
                        @endforeach
                        </select>
                         
                    </div>
                    @error('author_id')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    <div class="input-group mb-3">
                    
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-images"></i></span>
                        </div>
                        <input name="cover" class="form-control-file"  type="file">
    
                    </div>

                    <div class="input-group mb-3">
                    
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                    </div>
                    <input name="qty" class="form-control"  placeholder="Masukan Qty Buku" value="{{old('qty')}}" required>
                    </div>
                    @error('qty')
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

@push('select2css')
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('scripts')
  <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
  <script>
    $('.select2').select2();
  </script>
@endpush