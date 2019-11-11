<div class ="container">
<div class= "row mt-2 mb-2">
<div class="col-md-6">
        <h3>Data jadwal kelas 1</h3>
        <?php $counter = 1?>
  <?php foreach ($jadwalsenin as $senin) : ?>  
    
    </div>
</div>
<table class="table table-hover">
  <thead>
    <tr>
    <h5>Hari <?=$senin ['hari']?></h5>
      <th scope="col">No</th>
      <th scope="col">Mata Pelajaran</th>
      <th scope="col">Nama Guru</th>
      <th scope="col">Jam</th>
    </tr>
  </thead>
  <tbody>
  <thead>
 
    <tr>
    <th scope="row"> <?php echo $counter ++;?>
      <td><?= $senin ['mapel']?></td>
      <td><?= $senin ['nama_guru']?></td>
      <td><?= $senin ['hari']?></td>
    </tr>
    <?php endforeach?> </tbody>
</table>
<div class ="container">
<div class= "row mt-2 mb-2">
        <h5>Hari Selasa</h5>
    </div>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Mata Pelajaran</th>
      <th scope="col">Nama Guru</th>
      <th scope="col">Jam</th>
    </tr>
  </thead>
  <tbody>
  <thead>
  <?php $counter = 1?>
  <?php foreach ($jadwalselasa as $selasa) : ?>  
    <tr>
    <th scope="row"> <?php echo $counter ++;?>
      <td><?= $selasa ['mapel']?></td>
      <td><?= $selasa ['nama_guru']?></td>
      <td><?= $selasa ['hari']?></td>
    </tr>
    <?php endforeach?> </tbody>
</table>
