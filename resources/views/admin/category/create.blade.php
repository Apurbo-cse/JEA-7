@extends('layouts.admin.master')
@section('title', 'Category')
@section('content')
     <!-- Page-Title -->
     <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New category</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="active">Create category</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

  <!-- Page-Title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
           

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="panel-heading"><h3 class="panel-title">category Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">name</label>
                            <div class="col-md-10">
                                <input value="{{old('name')}}" name="name" type="text" id="name" class="form-control" placeholder="name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <textarea name="description" class="form-control" rows="5" placeholder="Description">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>     
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                        </div>



                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->
    <!-- End Row -->

@endsection
