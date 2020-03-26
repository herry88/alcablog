@extends('layouts.master')

@section('title')
    <title>Category</title>
@endsection

@section('content')
        
        {{-- @if(Session::has('success'))
            <script>
                swal({
                    title:'Success!',
                    text:"{{Session::get('success')}}",
                    timer:5000,
                    type:'success'
                }).then((value) => {
                //location.reload();
                }).catch(swal.noop);
            </script>
        @endif --}}
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
                                    <td>&nbsp;</td>
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