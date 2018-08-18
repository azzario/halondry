<form class="form-horizontal row-border" action="{{ url('/cucian') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-4 control-label">ID Pelanggan</label>
            <div class="col-md-8">
                <input type="number" name="id_pelanggan" placeholder="isi jika punya kartu member" class="form-control">
            </div>
        </div>
        <div class="form-group {{ $errors->has('nama_pelanggan') ? 'has-error' : '' }}">
            <label class="col-md-4 control-label">Nama Pelanggan</label>
            <div class="col-md-8">
                <input type="text" name="nama_pelanggan" class="form-control">
                @if($errors->has('nama_pelanggan'))
                <p class="help-block">{{ $errors->first('nama_pelanggan') }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('berat') ? 'has-error' : '' }}">
            <label class="col-md-4 control-label">Berat Cucian</label>
            <div class="col-md-4">
                <input type="number" name="berat" class="form-control" placeholder="KG">
                @if($errors->has('berat'))
                <p class="help-block">{{ $errors->first('berat') }}</p>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Kurir</label>
            <div class="col-md-4">
                <select name="kurir" id="kurir" class="form-control">
                    <option value="tidak">Tidak</option>
                    <option value="iya">Iya</option>
                </select>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <hr class="maps-divider" style="display:none">
    <div id="maps" style="width:100%; height:400px; display:none"></div>
    <hr>
    <div class="col-md-6">
        <table>
            <tr>
                <th>Harga : </th>
                <td>&nbsp; Rp. <span class="harga">0</span>,-</td>
            </tr>
            <tr>
                <th>Kurir : </th>
                <td>&nbsp; Rp. 0,-</td>
            </tr>
            <tr>
                <th>Diskon : </th>
                <td>&nbsp; Rp. 0,-</td>
            </tr>
            <tr>
                <th>Total Harga : </th>
                <td>&nbsp; Rp. 4000,-</td>
            </tr>
        </table>
    </div>
    <div class="col-md-6">
        <button class="btn btn-danger">Batal</button>
        <button type="reset" class="btn btn-default">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
