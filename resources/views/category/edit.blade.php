@extends('layouts.master')

@section('title')
    <title>Edit Category</title>
@endsection

@section('content')
<div class="row small-spacing">
    <div class="col-xs-12">
        <div class="box-content">
            <h4>Edit Category</h4>
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <table class="table table-bordered"> 
                        <tr>
                            <td>Name</td>
                            <td><input type="text" value="{{ $category->name }}" name="name" required placeholder="Name" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><a href="{{ route('category.index') }}" class="btn btn-info">Back</a>  <button type="submit" class="pull-right btn btn-primary">Save</button></td>
                        </tr>
                    </table>
            </form>
        </div>
    </div>
</div>
@endsection