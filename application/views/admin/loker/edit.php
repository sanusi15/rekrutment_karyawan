<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">

            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <form action="<?= base_url('admin/updloker'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= $loker['id_loker']; ?>">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="posisi">Posisi</label>
                                <input type="text" id="posisi" class="form-control" name="posisi" value="<?= $loker['posisi']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="jabatan">Jabatan</label>
                                <input type="text" id="jabatan" class="form-control" name="jabatan" value="<?= $loker['jabatan']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="pendidikan">Minimum Pendidikan</label>
                                <input type="text" id="pendidikan" class="form-control" name="pendidikan" value="<?= $loker['minimum_pendidikan']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="gaji">Range Gaji</label>
                                <input type="text" id="gaji" class="form-control" name="gaji" value="<?= $loker['gaji']; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="persyaratan">Persyaratan</label>
                                <textarea id="persyaratan" class="form-control" name="persyaratan"><?= $loker['persyaratan']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="img">Image</label>
                                <input type="file" id="img" class="form-control" name="img">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="aktif">Aktif</option>
                                    <option value="non aktif">Non Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="<?= base_url('admin/loker'); ?>" class="btn btn-secondary float-right" type="submit">Back</a>
                                <button class="btn btn-primary float-right" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>