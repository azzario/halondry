@extends('template.master')
    @section('title', 'Edit Cucian')
    @section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="{{ asset('css/leaflet-search.css') }}">
    @endsection

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
                        Edit Cucian
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

    @section('scripts')
    <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
    integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
    crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="http://labs.easyblog.it/maps/leaflet-search/dist/leaflet-search.min.js"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/cucian.js') }}"></script>
    <script>
        $(document).ready(function() {
            //inisiasi ajax headers
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN' : $('input[name="_token"]').attr('value')
                }
            });


            //tampilkan maps jika butuh kurir
            $('#kurir').on('change', function() {
                if($(this).val() == 'iya') {
                    $('.maps-divider').show('slow', 'easeInOutCirc');
                    $('#maps').show('slow', 'easeInOutCirc');
                    //fungsi get lokasi yg sudah ditentukan di database
                    getLokasi();
                } else {
                    $('.maps-divider').hide('slow', 'easeInOutCirc');
                    $('#maps').hide('slow', 'easeOutBounce');
                }
            });

            //munculkan harga cucian
            $('input[name="berat"]').on('keyup', function() {
                var nama    = 'cucian';
                var qty     = $(this).val();
                //jalankan ajax get harga
                getHarga(nama, qty);
            });
        });
    </script>

    @endsection
