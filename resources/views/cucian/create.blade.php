@extends('template.master')
    @section('title', 'Tambah Cucian')

    @section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Cucian</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cucian</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Cucian
                    </div>
                    <div class="panel-body">
                        @include('cucian.form')
                    </div>
                </div>
            </div>
        </div><!--/.row-->


        <div class="row">
            {{-- Footer --}}
            @include('partials._footer')
            {{-- End Footer --}}
        </div>
    </div>
    @endsection
