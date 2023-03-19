<div class="container mt-5">
  <div class="card p-2">
    <h3 class="card-header">Daftar Mahasiswa</h3>
    <div class="card-body">
      <?php foreach($data['mhs'] as $m) : ?>
        <ul class="list-unstyled p-2">
        <li>Nama : <?= $m['nama']; ?></li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>