@extends('admin.templates.default')

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Penulis</h3>
              <a href="{{route('admin.author.create')}}" class="btn btn-app float-sm-right">
                  <i class="fas fa-edit"></i> Tambah
            </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            @include('admin.templates.partials.alerts')
              <table id="example1" class="table table-bordered table-striped col-md-4">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Nama</th>
                  <th>Action</th>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

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

      ajax :'{{route('admin.author.data')}}',
      columns : [
          { data: 'id'},
          { data: 'name'},
          { data: 'action'}
          
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