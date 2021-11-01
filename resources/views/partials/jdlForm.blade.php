
<form  action="{{url('jadwal')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="inputNama" class="form-label">mahasiswa</label>
    <input type="text" class="form-control" name="mahasiswa" aria-describedby="nama">
    <div id="inputNama" class="form-text">use your full name.</div>
  </div>

  <div class="mb-3">
    <label for="inputNIM" class="form-label">dosen</label>
    <input type="text" class="form-control" name="dosen" aria-describedby="nim">
    <div id="inputNama" class="form-text">use dosen full name.</div>
  </div>

  <div class="mb-3">
    <label for="InputAlamat" class="form-label">judul</label>
    <input type="text" class="form-control" name="judul" aria-describedby="alamat">
  </div>

  <div class="mb-3">
    <label for="InputTTL" class="form-label">deskripsi</label>
    <input type="text" class="form-control" name="deskripsi" aria-describedby="ttl">
  </div>

  <div class="mb-3">
    <label for="InputMasuk" class="form-label">waktu awal</label>
    <input type="date" class="form-control" name="awal" aria-describedby="masuk">
  </div>

  <div class="mb-3">
    <label for="InputMasuk" class="form-label">waktu akhir</label>
    <input type="date" class="form-control" name="akhir" aria-describedby="kluar">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>