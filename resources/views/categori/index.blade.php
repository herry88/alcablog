@extends('layouts.admin')

@section('content')


<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name" id="recipient-name" required>
          </div>
          
         
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
        </form>
      </div>
  </div>
</div>
</div>


  <div class="modal fade" id="EditJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Udate Data Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kategori/update" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="#">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="nama" id="recipient-name" value="#" required="">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
        </form>
      </div>
  </div>
</div>
</div>
</div>


<div id="wrapper">
 
 
 
    <div class="main-content">
        <div class="row small-spacing">


<div class="box-content" style="width:100%;">
<!-- DataTales Example -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"></h1>
  <a target="_blank"></a>
  <!-- DataTales Example -->
 
  <div class="card shadow mb-4">
    <div class="card-header-index" style="display: flex; justify-content: space-between; align-items: center;">
      <h6 class="m-0 font-weight-bold"><strong>Data Kategori</strong></h6>
        <a href="#modaladd" data-toggle="modal">
      <button  class="btn btn-primary btn-sm waves-effect waves-light">
          <i class="fas fa-plus"></i>
      </button>
        </a>
    </div><br>
    <div class="card-body">
      @if (session('success'))
        <script>
          swal({
            title: "Good job!",
            message: "{{ session('success') }}",
            icon: "success",
            button: "OK!",
          });
        </script>
      @endif
      <div class="table-responsive">
        <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($errors as $cat)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $cat->name }}</td>
              <td>
                <a data-toggle="modal" data-target="#EditJurusan" class="btn btn-warning btn-sm waves-effect waves-light">
                  <i class="far fa-edit"></i>
                </a>
                <a href="#" class="btn btn-orange btn-sm waves-effect waves-light">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
            @empty
                <tr>
                  <td colspan="3" class="text-center">Tidak Ada Data</td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>




        </div>
  </div>
</div>

@endsection

