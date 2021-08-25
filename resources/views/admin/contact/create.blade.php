@extends('layouts.admin.master')
@section('title', 'Create Contact')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New Contact</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('contact.index')}}">List Of Contact</a></li>
                    <li class="active">Create contact</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

  <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Contact Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">Title</label>
                            <div class="col-md-10">
                                <input value="{{old('name')}}" name="name" type="text" id="name" class="form-control" placeholder="Joypurhat Engineer's Association">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">email</label>
                            <div class="col-md-10">
                                <input value="{{old('email')}}" name="email" type="email" id="email" class="form-control" placeholder="info@jea.com">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">phone</label>
                            <div class="col-md-10">
                                <input value="{{old('phone')}}" name="phone" type="phone" id="phone" class="form-control" placeholder="+880 017-32XXXXXX">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">location</label>
                            <div class="col-md-10">
                                <input value="{{old('location')}}" name="location" type="text" id="location" class="form-control" placeholder="Anonda Market, Jpypurhat">
                                @error('location')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Time</label>
                            <div class="col-md-10">
                                <input value="{{old('time')}}" name="time" type="text" id="time" class="form-control" placeholder="Sat - Thurs (10:00 AM to 5:00 PM)">
                                @error('time')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">facebook</label>
                            <div class="col-md-10">
                                <input value="{{old('facebook')}}" name="facebook" type="text" id="facebook" class="form-control" placeholder="Facebook Link">
                                @error('facebook')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Instagram</label>
                            <div class="col-md-10">
                                <input value="{{old('instagram')}}" name="instagram" type="text" id="instagram" class="form-control" placeholder="Instagram Link">
                                @error('instagram')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Twitter</label>
                            <div class="col-md-10">
                                <input value="{{old('twitter')}}" name="twitter" type="text" id="twitter" class="form-control" placeholder="Twitter Link">
                                @error('twitter')
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
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <textarea name="description" class="form-control" rows="5" placeholder="Description">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>     
                        <div class="form-group">
                            <label class="col-md-2 control-label">Contact Photo</label>
                            <div class="col-md-10">
                                <input name="image" type="file" id="image" class="form-control">
                                @error('image')
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
