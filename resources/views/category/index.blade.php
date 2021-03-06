@extends('layouts.master')

@section('title')
    <title>Category</title>
@endsection

@section('content')
        <div class="row small-spacing">
            <div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Data Category</h4>
					<!-- /.box-title -->
					
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Tools</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#</th>
                                <th>Name</th>
                                <th>Tools</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach ($category as $ct )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ct->name }}</td>
                                    <td><form action="{{ route('category.destroy', $ct->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('category.edit', $ct->id) }}" class="btn btn-sm btn-warning " title="Edit"><i class="fa fa-edit"></i></a>    
                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash" ></i></button>
                                    </form></td>
                                </tr>
                            @endforeach
							
						</tbody>
					</table>
				</div>
				<!-- /.box-content -->
			</div>
        </div>
    @include('components.toastSession')
@endsection