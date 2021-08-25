@extends('layouts.admin.master')
@section('title', 'blog Details')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">blog Details Page</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="active">Show blog</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">blog Details</h3>
                </div>
                <div class="panel-body">
                @if($blog->image != null)
                    <p>
                        
                            <img src="{{asset($blog->image)}}" alt="Image" width="100%">
                        
                    </p>
                    @endif

                    <h1>
                       {{$blog->sub_title}}
                    </h1> 
                    <h1>
                       {{$blog->title}}
                    </h1>
                    <div style="clear:both;">
                        <p class="text-muted m-b-30">
                            {{$blog->description}}
                        </p>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('blog.index')}}" class="btn btn-danger waves-effect waves-light">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
