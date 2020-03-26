@extends('layouts.master')

@section('title')
    <title>Add Category</title>
@endsection

@section('content')
<div class="row small-spacing">
    <div class="col-xs-12">
        <div class="box-content">
            <h4>Add Category</h4>
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                @method('POST')
                    <table class="table table-bordered"> 
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" required placeholder="Name" class="form-control"></td>
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