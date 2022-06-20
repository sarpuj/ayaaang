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
                if ($this->session->userdata('id_stockdarah') == "") {
                ?>
                    <div align="right"><a href="<?= base_url() ?>data_stock/tambah_data_stock"><button type=" button" class="btn btn-warning btn-sm">Tambah</button></a></div>

                <?php
                }
                ?>



                <table class="table table-hover table-striped table-bordered text-center">
                    <thead>
                        <th>No</th>
                        <th>Golongan Darah</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>

                        <th>Opsi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data->result_array() as $a) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $a['goldar']; ?></td>
                                <td><?= $a['jumlah']; ?></td>
                                <td><?= $a['keterangan']; ?></td>

                                <td>

                                    <?php
                                    if ($this->session->userdata('id_stockdarah') == "") {
                                    ?>
                                        <a href="<?= base_url() ?>data_stock/edit_data_stock/<?= $a['id_stockdarah']; ?>"><button type=" button" class="btn btn-info btn-sm">Edit</button></a>
                                        <a href="<?= base_url() ?>data_stock/hapus/<?= $a['id_stockdarah']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');"><button type=" button" class="btn btn-danger btn-sm">Hapus</button></a>

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