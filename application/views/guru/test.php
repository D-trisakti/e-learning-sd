<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">nilai</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 1 ?>
        <?php foreach ($nil as $nil) : ?>
            
            <tr>
                <th scope="row"> <?php echo $counter++; ?>
                <td> <?= $nil['mapel'] ?></td>
                <td> <?= $nil['nilai'] ?></td>
                
            
            </tr>
        <?php endforeach ?>
    </tbody>
</table>