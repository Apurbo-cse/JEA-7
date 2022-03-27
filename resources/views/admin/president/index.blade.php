@extends('layouts.admin.master')
@section('title', 'president List')
@section('table_css')
    <!-- DataTables -->
    <link href="{{asset('admin/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List of President</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="active">president List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    <!-- Page-Title -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">president List</h3>
                </div>
                <div class="panel-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 10px">SL#</th>
                            <th class="text-center" >Type</th>
                            <th class="text-center" >Name</th>
                            <th class="text-center " >Digination</th>
                            <th class="text-center " >Company/Govt.</th>
                            <th class="text-center " >Work Place</th>
                            <th class="text-center " >Phone</th>
                            <th class="text-center " >Email</th>
                            <th class="text-center" >Facebook</th>
                            <th class="text-center" >Linkedin</th>
                            <th class="text-center" style="40%" >Image</th>
                            <th class="text-center" style="width: 12%">Actions</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($presidents as $president)
                            <tr>
                                <td>{{$serial++ }}</td>
                                <td>{{$president->type}}</td>
                                <td>{{$president->name}}</td>
                                <td>{{$president->digination}}</td>
                                <td>{{$president->company}}</td>
                                <td>{{$president->location}}</td>
                                <td>{{$president->phone}}</td>
                                <td>{{$president->email}}</td>
                                <td>{{Str::limit($president->facebook,10)}}...</td>
                                <td>{{Str::limit($president->linkedin,10)}}...</td>
                                <td class="text-center">
                                    <div  style="max-width: 70px; max-height:70px;overflow:hidden">
                                        <img src="{{ asset($president->image) }}" class="img-fluid img-rounded" alt="">
                                    </div>
                                </td>
                                <td class="d-flex">
                                    <a class="btn btn-info d-inline-block" href="{{ route('president.edit', $president->id) }}"><i class="fa fa-edit"></i></a>
                                    <form class="d-inline-block pull-right" method="post" action="{{ route('president.destroy',$president->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('Are you confirm to delete?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->

@endsection

@section('table_script')
    <!-- Datatables-->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.scroller.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('admin/pages/datatables.init.js')}}"></script>

@endsection
