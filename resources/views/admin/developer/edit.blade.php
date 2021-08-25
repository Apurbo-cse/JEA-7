@extends('layouts.admin.master')
@section('title', 'Update developer')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Update developer</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('developer.index')}}">developer List</a></li>
                    <li class="active">Update developer</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">developer Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('developer.update', $developer->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input value="{{$developer->name}}" name="name" type="text" id="name" class="form-control" placeholder="Joypurhat Engineer's Association">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label">Digination</label>
                            <div class="col-md-10">
                                <input value="{{$developer->digination}}" name="digination" type="text" id="digination" class="form-control" placeholder="Anonda Market, Jpypurhat">
                                @error('digination')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label">location</label>
                            <div class="col-md-10">
                                <input value="{{$developer->location}}" name="location" type="text" id="location" class="form-control" placeholder="Anonda Market, Jpypurhat">
                                @error('location')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">degree</label>
                            <div class="col-md-10">
                                <input value="{{$developer->degree}}" name="degree" type="text" id="degree" class="form-control" placeholder="Anonda Market, Jpypurhat">
                                @error('degree')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-md-2 control-label">complete</label>
                            <div class="col-md-10">
                                <input value="{{$developer->complete}}" name="complete" type="text" id="complete" class="form-control" placeholder="Anonda Market, Jpypurhat">
                                @error('complete')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">email</label>
                            <div class="col-md-10">
                                <input value="{{$developer->email}}" name="email" type="email" id="email" class="form-control" placeholder="info@jea.com">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">phone</label>
                            <div class="col-md-10">
                                <input value="{{$developer->phone}}" name="phone" type="phone" id="phone" class="form-control" placeholder="+880 017-32XXXXXX">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">facebook</label>
                            <div class="col-md-10">
                                <input value="{{$developer->facebook}}" name="facebook" type="text" id="facebook" class="form-control" placeholder="Facebook Link">
                                @error('facebook')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Twitter</label>
                            <div class="col-md-10">
                                <input value="{{$developer->twitter}}" name="twitter" type="text" id="twitter" class="form-control" placeholder="Twitter Link">
                                @error('twitter')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Linkedin</label>
                            <div class="col-md-10">
                                <input value="{{$developer->linkedin}}" name="linkedin" type="text" id="linkedin" class="form-control" placeholder="Linkedin Link">
                                @error('linkedin')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <textarea name="description" class="form-control" rows="5" placeholder="Description">{{$developer->description}}</textarea>
                                @error('description')
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
                                @if($developer->image != null)
                                    <img src="{{ asset($developer->image) }}" width="20%">
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
