@extends('layouts.master')

@section('title')
    <title>Add Working</title>
@endsection

@section('content')
<div class="row small-spacing">
    <div class="col-xs-12">
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
            <h4>Add Working</h4>
            <form action="{{ route('working.store') }}" method="POST">
                @csrf
                @method('POST')
                    <table class="table table-bordered"> 
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" required placeholder="Name" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Hour</td>
                            <td><input type="text" name="hour" required class="form-control" placeholder="Hour"></td>
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