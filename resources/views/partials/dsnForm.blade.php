<form  action="{{url('dosen')}}" method="POST">
    @csrf
    
  <div class="mb-3">
    <label for="inputNama" class="form-label">Name</label>
    <input type="text" class="form-control" name="nama_D" aria-describedby="nama">
    <div id="inputNama" class="form-text">use your full name.</div>
  </div>

  <div class="mb-3">
    <label for="inputNIM" class="form-label">NIDN</label>
    <input type="text" class="form-control" name="nidn" aria-describedby="nim">
  </div>

  <div class="mb-3">
    <label for="InputAlamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat_D" aria-describedby="alamat">
  </div>

  <div class="mb-3">
    <label for="InputTTL" class="form-label">kontak</label>
    <input type="text" class="form-control" name="kontak" aria-describedby="ttl">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>