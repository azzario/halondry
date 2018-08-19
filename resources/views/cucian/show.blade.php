@extends('template.master')
    @section('title', 'Detail Cucian')

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
                        Detail Cucian
                        <a href="#" class="btn btn-primary pull-right">Lihat Struk</a>
                    </div>
                    <div class="panel-body">
                      <div class="col-md-6">
                        <table class="table">
                          <tr>
                            <th>Nama :</th>
                            <td>{{ $cucian->nama_pelanggan }}</td>
                          </tr>
                          <tr>
                            <th>Berat Cucian :</th>
                            <td>{{ $cucian->berat }} KG</td>
                          </tr>
                          <tr>
                            <th>Kurir :</th>
                            <td>{{ $cucian->kurir }}</td>
                          </tr>
                        </table>
                        <hr>
                        <table class="table">
                          <tr>
                            <th>Harga :</th>
                            <td></td>
                          </tr>
                          <tr>
                            <th>Kurir :</th>
                            <td></td>
                          </tr>
                          <tr>
                            <th>Diskon :</th>
                            <td></td>
                          </tr>
                          <tr>
                            <th>Total Harga :</th>
                            <td></td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-md-6">
                        <div id="maps" style="width:100%; height:300px"></div>
              						<ul class="timeline">
              							<li>
              								<div class="timeline-badge"><i class="glyphicon glyphicon-send"></i></div>
              								<div class="timeline-panel">
              									<div class="timeline-heading">
              										<h4 class="timeline-title">Kurir sedang mengirim ke alamat</h4>
              									</div>
              									<div class="timeline-body">
              										<p>Jl Ahmad Yani no 45 Subang. 19:00</p>
              									</div>
              								</div>
              							</li>
              							<li>
              								<div class="timeline-badge primary"><i class="glyphicon glyphicon-ok"></i></div>
              								<div class="timeline-panel">
              									<div class="timeline-heading">
              										<h4 class="timeline-title">Halondry sudah sampai</h4>
              									</div>
              									<div class="timeline-body">
              										<p>struk no <a href="#">411544543</a> telah dibayar. 19.30</p>
              									</div>
              								</div>
              							</li>
              						</ul>
              				</div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->


        <div class="row">
            <!-- Footer -->
            @include('partials._footer')
            <!-- End Footer -->
        </div>
    </div>
    @endsection

    @section('scripts')
      <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
      integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
      crossorigin=""></script>
      <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
      <script type="text/javascript" src="{{ asset('js/function/maps.js') }}"></script>
      <script>
          $(document).ready(function() {
            var latlng = [51.505, -0.09];
            getMaps(latlng);
          });
      </script>
    @endsection
