<form  action="{{url('dosen/'.$model->id)}}" method="POST">
    @csrf
    
<input type="hidden" name="_method" value="PATCH">
  <div class="mb-3">
    <label for="inputNama" class="form-label">Name</label>
    <input type="text" class="form-control" name="nama_D" aria-describedby="nama" value ="{{ $model->nama_D }}">
    <div id="inputNama" class="form-text">use your full name.</div>
  </div>

  <div class="mb-3">
    <label for="inputNIM" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nidn" aria-describedby="nim" value ="{{ $model->nidn }}">
  </div>

  <div class="mb-3">
    <label for="InputAlamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat_D" aria-describedby="alamat" value ="{{ $model->alamat_D }}">
  </div>

  <div class="mb-3">
    <label for="InputTTL" class="form-label">kontak</label>
    <input type="text" class="form-control" name="kontak" aria-describedby="ttl" value ="{{ $model->kontak }}">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>