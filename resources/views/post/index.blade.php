@extends('layouts.master')

@section('content')
<div class="row small-spacing">
  @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
  @endif
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
                    <td>{{ $pt->category->name }}</td>
                    <td>
                      @if (!empty($pt->images))
                        <img src="{{ asset('uploads/post/' . $pt->images) }}" 
                            alt="{{ $pt->name }}" width="50px" height="50px">
                      @else
                        <img src="http://via.placeholder.com/50x50" alt="{{ $pt->name }}">
                      @endif
                    </td>
                    <td>{{ $pt->description }}</td>
                    <td>
                      <form action="{{ route('post.destroy', $pt->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('post.edit', $pt->id) }}" class="btn btn-warning" title="Edit"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>
              @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div>

@endsection