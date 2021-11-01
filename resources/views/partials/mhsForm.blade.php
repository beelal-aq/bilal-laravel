
<form  action="{{url('mahasiswa')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="inputNama" class="form-label">Name</label>
    <input type="text" class="form-control" name="nama" aria-describedby="nama">
    <div id="inputNama" class="form-text">use your full name.</div>
  </div>

  <div class="mb-3">
    <label for="inputNIM" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim" aria-describedby="nim">
  </div>

  <div class="mb-3">
    <label for="InputAlamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" aria-describedby="alamat">
  </div>

  <div class="mb-3">
    <label for="InputTTL" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" name="ttl" aria-describedby="ttl">
  </div>

  <div class="mb-3">
    <label for="InputMasuk" class="form-label">Tahun Masuk</label>
    <input type="text" class="form-control" name="thn_masuk" aria-describedby="masuk">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>