@extends('layouts.master')

@section('title')
    <title>Posting</title>
@endsection

@section('content')
<div class="row small-spacing">
    <div class="col-md-10">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="box-content">
            <h4>Add Posting</h4>
            <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                
                    <table class="table table-bordered"> 
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name"  placeholder="Name" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>
                                <select name="category_id" class="form-control" >
                                    <option value="0">&mdash;</option>
                                    @foreach ($category as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Images</td>
                            <td><input type="file" name="images" class="form-control" ></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea name="description"  class="form-control" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><button type="submit" class="pull-right btn btn-primary">Save</button></td>
                        </tr>
                    </table>
            </form>
        </div>
    </div>
</div>
@endsection