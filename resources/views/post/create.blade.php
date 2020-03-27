@extends('layouts.master')

@section('title')
    <title>Posting</title>
@endsection

@section('content')
<div class="row small-spacing">
    <div class="col-md-10">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="box-content">
            <h4>Add Posting</h4>
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                @method('POST')
                    <table class="table table-bordered"> 
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" required placeholder="Name" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>
                                <select name="category_id" class="form-control" required>
                                    <option value="0">&mdash;</option>
                                    @foreach ($category as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Images</td>
                            <td><input type="file" name="photo" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea name="description" required class="form-control" cols="30" rows="10"></textarea></td>
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