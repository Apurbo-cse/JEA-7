@extends('layouts.admin.master')
@section('title', 'Create Aboutm')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New M-V-H</h4>
                <ol class="breadcrumb pull-right">
                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('aboutm.index')}}">M-V-H List</a></li>
                    <li class="active">Create M-V-H</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

      <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">M-V-H Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('aboutm.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">Choose Tilte</label>
                            <div class="col-md-10">
                                <div class="checkbox checkbox-inline">
                                    <input name="title" type="checkbox" id="title" value="Mission">
                                    <label for="title"> Mission</label>
                                </div>
                                <div class="checkbox checkbox-inline">
                                    <input name="title" type="checkbox" id="title" value="Vission">
                                    <label for="title"> Vission </label>
                                </div>
                                <div class="checkbox checkbox-inline">
                                    <input name="title" type="checkbox" id="title" value="History">
                                    <label for="title"> History </label>
                                </div>
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <textarea name="description" class="form-control" rows="5" placeholder="Description">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>  
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" id="inactive" value="inactive" name="status">
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
                                <input name="image" type="file" id="image" class="form-control">
                                @error('image')
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

@endsection
