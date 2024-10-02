<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=daftar&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">No Telepon</label>
            <input type="text" name="no_tlpn" class="form-control" value="<?=(isset($_POST['no_tlpn']))?$_POST['no_tlpn']:'';?>">
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?=(isset($_POST['nama']))?$_POST['nama']:'';?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" class="form-control" value="<?=(isset($_POST['id']))?$_POST['id']:'';?>">
        </div>
        <div class="form-group">
            <label for="s">Status</label>
            <select name="status" id="s" class="form-control"> 
                <option value="Aktif" <?= (isset($_POST['status']) && $_POST['status'] == 'Aktif') ? 'selected' : ''; ?>>Aktif</option> 
                <option value="Tidak Aktif" <?= (isset($_POST['status']) && $_POST['status'] == 'Tidak Aktif') ? 'selected' : ''; ?>>Tidak Aktif</option>  
            </select> 
        </div>
        <button type="submit" class="btn btn-default btn-primary">Save</button> 
    </div>
</form>