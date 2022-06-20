<!--**********************************
Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4><?= $title ?></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $title ?></a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($data->result_array() as $a) {
                ?>
                    <form method="POST" action="<?= base_url('Data_rs/update_data_rs') ?>" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_rs" value="<?= $a['nama_rs']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" value="<?= $a['alamat']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Kontak</label>
                            <div class="col-sm-10">
                                <input type="text" name="kontak" value="<?= $a['kontak']; ?>">
                            </div>
                        </div>


                        <input type="hidden" name="id_rs" value="<?= $a['id_rs']; ?>">

                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <button class="btn btn-primary btn-user btn-block mt-2" type="submit">Update</button>
                            </div>
                        </div>


                    </form>

                <?php } ?>

            </div>
        </div>
    </div>
</div>