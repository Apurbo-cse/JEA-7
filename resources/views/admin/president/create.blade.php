@extends('layouts.admin.master')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New President</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('president.index')}}">List Of President</a></li>
                    <li class="active">Create President</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

  <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">President Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('president.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-2 control-label">Type</label>
                            <div class="col-md-10">
                            <select name="type" id="" class="form-control">
                                <option >Select</option>
                                <option >President</option>
                                <option >Vice-President</option>
                            </select>
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input value="{{old('name')}}" name="name" type="text" id="name" class="form-control" placeholder="Mr. John">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label">Digination</label>
                            <div class="col-md-10">
                                <input value="{{old('digination')}}" name="digination" type="text" id="digination" class="form-control" placeholder="Software Engineer">
                                @error('digination')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label">Company/Govt</label>
                            <div class="col-md-10">
                                <input value="{{old('company')}}" name="company" type="text" id="location" class="form-control" placeholder="TFP Solutions Ltd.">
                                @error('location')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Location</label>
                            <div class="col-md-10">
                                <input value="{{old('location')}}" name="location" type="text" id="location" class="form-control" placeholder="Banani, Dhaka">
                                @error('location')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input value="{{old('email')}}" name="email" type="email" id="email" class="form-control" placeholder="info@jea.com">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Phone</label>
                            <div class="col-md-10">
                                <input value="{{old('phone')}}" name="phone" type="phone" id="phone" class="form-control" placeholder="+880 017-32XXXXXX">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Facebook</label>
                            <div class="col-md-10">
                                <input value="{{old('facebook')}}" name="facebook" type="text" id="facebook" class="form-control" placeholder="Facebook Link">
                                @error('facebook')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Linkedin</label>
                            <div class="col-md-10">
                                <input value="{{old('linkedin')}}" name="linkedin" type="text" id="linkedin" class="form-control" placeholder="Linkedin Link">
                                @error('linkedin')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
   
                        <div class="form-group">
                            <label class="col-md-2 control-label">Photo</label>
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
