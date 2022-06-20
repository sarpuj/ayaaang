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

                <form method="POST" action="<?= base_url('data_petugas/tambah_data_petugas_proses') ?>" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Id Petugas</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_petugas" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Petugas</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_petugas" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_rs" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" value="">
                        </div>
                    </div>




                    <div class="mb-3 row">
                        <div class="col-sm-2">
                            <button class="btn btn-primary btn-user btn-block mt-2" type="submit">Tambah</button>
                        </div>
                    </div>

                </form>



            </div>
        </div>
    </div>
</div>