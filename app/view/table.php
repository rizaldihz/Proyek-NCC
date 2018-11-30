<table class="table">
    <thead>
      <tr class="info">
        <th>NRP</th>
        <th>Name</th>
        <th>PC Specification</th>
        <th>Mulai</th>
        <th>Hingga</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php while($daftar=$data->fetch_assoc()):?>
        <?php if($daftar['Status']=='Pending'):?>
        <tr class='warning'>
        <?php elseif($daftar['Status']=='Terima'):?>
        <tr class='success'>
        <?php elseif($daftar['Status']=='Tolak'):?>
        <tr class='danger'>
        <?php endif ?>
            <td><?php echo $daftar['NRP']?></td>
            <td><?php echo $daftar['Nama']?></td>
            <td><?php echo $daftar['Spesifikasi']?></td>
            <td><?php echo $daftar['Awal']?></td>
            <td><?php echo $daftar['Akhir']?></td>
            <?php if($daftar['Status']=='Pending'):?>
            <td class='warning'>Pending <a href="<?php echo $dir?>/monitor?tolak&nrp=<?php echo $daftar['NRP']?>"><button class="btn btn-danger btn-sm">Tolak</button></a></td>
            <?php elseif($daftar['Status']=='Terima'):?>
            <td class='success'>Diterima</td>
            <?php elseif($daftar['Status']=='Tolak'):?>
            <td class='danger'>Ditolak</td>
            <?php endif ?>
        </tr>
    <?php endwhile ?>
    </tbody>
</table>