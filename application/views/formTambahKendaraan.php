<div class="modal-body">
    <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Unit</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <?php echo form_open_multipart('Member/tambahPosting');?>
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Judul</label>
        <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Merek</label>
        <input type="text" name="merek" class="form-control" id="merek" placeholder="Merek">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tipe</label>
        <input type="text" name="tipe" class="form-control" id="tipe" placeholder="Tipe">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Warna</label>
        <input type="text" name="warna" class="form-control" id="warna" placeholder="Warna">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Jenis</label>
        <select name="jenis" id="jenis">
          <option value="mobil">Mobil</option>
          <option value="motor">Motor</option>
          <option value="kendaraanbesar">Kendaraan Besar</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Kota</label>
        <input type="text" name="kota" class="form-control" id="kota" placeholder="Kota">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Jumlah Tempat Duduk</label>
        <input type="number" name="seater" class="form-control" id="seat">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Deskripsi</label>
        <input type="textbox" name="deskripsi" class="form-control" id="textbox">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Harga</label>
        <input type="number" name="harga" class="form-control" id="harga">
      </div>
      <div class="checkbox">
        <label>
          <input name="driver" type="checkbox" value=1> Sopir <br>
          <input name="antar" type="checkbox" value=1> Antar <br>
          <input name="jemput" type="checkbox" value=1> Ambil <br>
        </label>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Foto Kendaraan</label>
        <input type="file" name="file" id="exampleInputFile">

        <p class="help-block">ukuran file max 2MB</p>
      </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
