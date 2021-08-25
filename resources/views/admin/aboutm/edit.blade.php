@extends('layouts.admin.master')
@section('title', 'Update Aboutm')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Update M-V-H</h4>
                <ol class="breadcrumb pull-right">
                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('aboutm.index')}}">M-V-H List</a></li>
                    <li class="active">Update M-V-H</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">M-V-H Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('aboutm.update', $aboutm->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-md-2 control-label">Title</label>
                            <div class="col-md-10">
                                <input value="{{$aboutm->title}}" name="title" type="text" id="title" class="form-control" placeholder="Title">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <textarea name="description" class="form-control" rows="5" placeholder="Content">{{$aboutm->description}}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input  type="radio" id="active" value="active" name="status" @if($aboutm->status == 'active') checked   @endif>
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input  type="radio" id="inactive" value="inactive" name="status" @if($aboutm->status == 'inactive') checked   @endif>
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="image" >
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @if($aboutm->image != null)
                                    <img src="{{ asset($aboutm->image) }}" width="20%">
                                @endif
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                        </div>



                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
