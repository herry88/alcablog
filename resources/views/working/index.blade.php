@extends('layouts.master')

@section('title')
    <title>Working Hour</title>
@endsection

@section('content')
<div class="row small-spacing">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    <div class="col-xs-12">
      <div class="box-content">
  
        <h4 class="box-title">Data Working</h4>
          <table id="example" class="table table-striped table-bordered display" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Hour</th>
                <th>Tools</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Hour</th>
                <th>Tools</th>
              </tr>
            </tfoot>
            <tbody>
                @foreach ($working as $wk)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $wk->name }}</td>
                      <td>{{ $wk->hour }}</td>
                      <td>
                        <form action="{{ route('working.destroy', $wk->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <a href="{{ route('working.edit', $wk->id) }}" class="btn btn-warning" title="Edit"><i class="fa fa-edit"></i></a>
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
  @include('components.toastSession')
@endsection