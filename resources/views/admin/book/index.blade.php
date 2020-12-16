@extends('admin.templates.default')

@section('content')
<div class="card text-white bg-dark mb-3">
            <div class="card-header">
              <h3 class="card-title">Buku</h3>
              <a href="{{route('admin.book.create')}}" class="btn btn-app float-sm-right">
                  <i class="fas fa-edit"></i> Tambah
            </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            @include('admin.templates.partials.alerts')
              <table id="example1" class="table table-bordered table-dark">
                <thead class="thead-dark">
                <tr>
                  <th>Id</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Penulis</th>
                  <th>Cover</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
<img src=""  alt="">
          <form action="" method="post" id="deleteForm">
            @csrf
            @method("delete")
            <input type="submit" value="Hapus" class="btn btn-danger" style="display: none">
          </form>
@endsection

@push('scripts')

<script src="{{ asset('assets/plugins/bootstrap-notify/bs-notify.min.js')}}"></script>

<script>
  
  $(function () {
    $("#example1").DataTable({
        processing: true,
      serverSide : true,

      ajax :'{{route('admin.book.data')}}',
      columns : [
          { data: 'id'},
          { data: 'judul'},
          { data: 'deskripsi'},
          { data: 'author'},
          { data: 'cover'},
          { data: 'qty'},
          { data: 'action'},
          
      ],
//       columnDefs: [
//     {
//         targets: -1,
//         className: 'dt-body-center'
//     }
//   ]
    });
  });
</script>
@endpush