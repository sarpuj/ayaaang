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


                <?php
                if ($this->session->userdata('id_petugas') == "") {
                ?>
                    <div align="right"><a href="<?= base_url() ?>data_petugas/tambah_data_petugas"><button type=" button" class="btn btn-warning btn-sm">Tambah</button></a></div>

                <?php
                }
                ?>



                <table class="table table-hover table-striped table-bordered text-center">
                    <thead>
                        <th>No</th>
                        <th>Id Petugas</th>
                        <th width="25%">Nama Petugas</th>
                        <th>Nama Rumah Sakit</th>
                        <th width="15%">Email</th>

                        <th width="15%">Opsi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data->result_array() as $a) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $a['id_petugas']; ?></td>
                                <td><?= $a['nama_petugas']; ?></td>
                                <td><?= $a['nama_rs']; ?></td>
                                <td><?= $a['email']; ?></td>

                                <td>

                                    <?php
                                    if ($this->session->userdata('id_petugas') == "") {
                                    ?>
                                        <a href="<?= base_url() ?>data_petugas/edit_data_petugas/<?= $a['id_petugas']; ?>"><button type=" button" class="btn btn-info btn-sm">Edit</button></a>
                                        <a href="<?= base_url() ?>data_petugas/hapus/<?= $a['id_petugas']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');"><button type=" button" class="btn btn-danger btn-sm">Hapus</button></a>

                                    <?php
                                    } else {
                                        echo "Tidak Ada Opsi";
                                    }
                                    ?>


                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>