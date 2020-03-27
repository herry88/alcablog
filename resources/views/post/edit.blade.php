@extends('layouts.master')

@section('title')
    <title>Edit</title>
@endsection

@section('content')
    {{-- <h2>Edit</h2> --}}
    {{-- <h4>{{ $post->id }}</h4> --}}
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
                <h4>Edit Posting</h4>
                <form action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                        <table class="table table-bordered"> 
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="name" value="{{ $post->name }}"  placeholder="Name" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>
                                    <select name="category_id" class="form-control" >
                                        <option value="0">&mdash;</option>
                                        @foreach ($category as $c)
                                            @if ($post->category_id == $c->id )
                                                <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                                            @else
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Images</td>
                                <td>
                                    <input type="file" name="images" class="form-control" >

                                    @if (!empty($post->images))
                                        <hr>
                                        <img src="{{ asset('uploads/post/' . $post->images) }}" alt="{{ $post->images }}" width="150px" height="150px">
                                    
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><textarea name="description"  class="form-control" cols="30" rows="10"> {{ $post->description  }} </textarea></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><button type="submit" class="pull-right btn btn-primary">Update</button></td>
                            </tr>
                        </table>
                </form>
            </div>
        </div>
    </div>
@endsection