@extends('template.master')
    @section('title', 'Cucian')

    @section('styles')
      <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
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
              @if(Session::has('success'))
              <div class="alert bg-success" role="alert">
                <em class="fa fa-lg fa-check">&nbsp;</em>
                {{ Session::get('success') }} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a>
              </div>
              @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Cucian
                        <a href="{{ url('/cucian/create') }}" class="btn btn-primary pull-right">Tambah Cucian</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Berat</th>
                                    <th>Kurir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($cucian as $i => $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->nama_pelanggan }}</td>
                                    <td>{{ $data->berat }} Kg</td>
                                    <td>{{ $data->kurir == '0' ? 'tidak' : 'iya' }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-info">Detail</button>
                                        <button class="btn btn-sm btn-warning">Edit</button>
                                        <button data-id="{{ $data->id }}" data-nama="{{ $data->nama_pelanggan }}" class="btn btn-del btn-sm btn-danger">Hapus</button>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
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
      <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
      <script type="text/javascript">
        $(document).ready(() => {
          const delButton = $('.btn-del');
          checkAlert();

          delButton.on('click', function() {
            var nama = $(this).data('nama');
            var id = $(this).data('id');
            var row = $(this).closest('tr');
            delDialog(nama, id, row);
          });
        });

        function checkAlert() {
          var alert = $('.alert');
          if(alert) {
            setTimeout(() => {
              alert.hide('slow', 'easeOutBounce');
            }, 5000);
          }
        }

        function delDialog(nama, id, row) {
          swal({
            title: 'Apakah kamu yakin menghapus '+ nama +' ?',
            text: "Data akan dihapus secara permanen",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
              swal(
                'Sukses',
                'Data berhasil dihapus.',
                'success'
              )

              $.ajax({
                url: '/api/cucian/delete',
                method: 'post',
                data: {
                  id: id
                },
                success: () => {
                  row.remove();
                }
              });
            }
          })
        }
      </script>
    @endsection
