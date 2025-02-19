<main>
<div class="container-fluid px-4">
    <h3>Table Portofolio</h3>
    <a href="" class="btn btn-primary">Tambah</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    while($data = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <th scope="row"><?= $no?></th>
      <td><?= $data['judul']?></td>
      <td><?= $data['gambar']?></td>
      <td>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" class="btn btn-danger">Hapus</a>
    </td>
    </tr>
    <?php
        $no++;
        }
    ?>
  </tbody>
</table>
    </div>
</main>