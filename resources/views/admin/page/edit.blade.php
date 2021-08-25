@extends('layouts.admin.master')
@section('title', 'Update page')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Update page</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('page.index')}}">page List</a></li>
                    <li class="active">Update page</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">page Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('page.update', $page->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-md-2 control-label">Facebook Page Link</label>
                            <div class="col-md-10">
                                <input value="{{$page->title}}" name="title" type="text" id="title" class="form-control" placeholder="Title">
                                @error('title')
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
                                @if($page->image != null)
                                    <img src="{{ asset($page->image) }}" width="20%">
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input  type="radio" id="active" value="active" name="status" @if($page->status == 'active') checked   @endif>
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input  type="radio" id="inactive" value="inactive" name="status" @if($page->status == 'inactive') checked   @endif>
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
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
