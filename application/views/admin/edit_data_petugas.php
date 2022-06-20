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
                    <form method="POST" action="<?= base_url('Data_petugas/update_data_petugas') ?>" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Id Petugas</label>
                            <div class="col-sm-10">
                                <input type="text" name="id_petugas" value="<?= $a['id_petugas']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Petugas</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_petugas" value="<?= $a['nama_petugas']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_rs" value="<?= $a['nama_rs']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="<?= $a['email']; ?>">
                            </div>
                        </div>


                        <input type="hidden" name="id_petugas" value="<?= $a['id_petugas']; ?>">

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