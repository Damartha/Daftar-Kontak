<div class="row">
    <div class="col-md-6 col-sm-6">
        <h4>Daftar Motor</h4>
    </div>
    <div class="col-md-6 col-sm-6 text-right">
        <a href="index.php?mod=daftar&page=add" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Add Kontak
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NO Telepon</th>
                            <th>Nama</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($daftar != null) {
                            
                            foreach ($daftar as $row) { ?>
                                <tr>
                                    
                                    <td><?= $row['no_tlpn'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['status'] ?></td>
                                    <td>
                                        <a href="index.php?mod=daftar&page=edit&id=<?= md5($row['id']) ?>" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a href="index.php?mod=daftar&page=delete&id=<?= md5($row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus motor ini?')">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                        <?php ;
                            }
                        } else { ?>
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data motor</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
