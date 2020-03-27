@extends('layouts.master')

@section('content')
<div class="row small-spacing">
  <div class="col-xs-12">
    <div class="box-content">
      <h4 class="box-title">Data Post</h4>
        <table id="example" class="table table-striped table-bordered display" style="width:100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Category</th>
              <th>Gambar</th>
              <th>Description</th>
              <th>Tools</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Category</th>
              <th>Images</th>
              <th>Description</th>
              <th>Tools</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($post as $pt)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pt->name }}</td>
                    <td>{{ $pt->category_id }}</td>
                    <td>{{ $pt->images }}</td>
                    <td>{{ $pt->description }}</td>
                    <td>&nbsp;</td>
                  </tr>
              @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div>

@endsection