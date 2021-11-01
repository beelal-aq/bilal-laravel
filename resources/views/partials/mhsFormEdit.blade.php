<form  action="{{url('mahasiswa/'.$model->id)}}" method="POST">
    @csrf
    
<input type="hidden" name="_method" value="PATCH">
  <div class="mb-3">
    <label for="inputNama" class="form-label">Name</label>
    <input type="text" class="form-control" name="nama" aria-describedby="nama" value ="{{ $model->nama }}">
    <div id="inputNama" class="form-text">use your full name.</div>
  </div>

  <div class="mb-3">
    <label for="inputNIM" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim" aria-describedby="nim" value ="{{ $model->nim }}">
  </div>

  <div class="mb-3">
    <label for="InputAlamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" aria-describedby="alamat" value ="{{ $model->alamat }}">
  </div>

  <div class="mb-3">
    <label for="InputTTL" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" name="ttl" aria-describedby="ttl" value ="{{ $model->tll }}">
  </div>

  <div class="mb-3">
    <label for="InputMasuk" class="form-label">Tahun Masuk</label>
    <input type="text" class="form-control" name="thn_masuk" aria-describedby="masuk" value ="{{ $model->thn_masuk }}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>