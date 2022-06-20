<div class="text-center text-light mt-2">
    <h2>Daftar Rumah Sakit di Kabupaten Kulon Progo</h2>
</div>
<div class="row mt-2 mx-4">
    <div class="col-md-9 position-absolute top-50 start-50 translate-middle">

        <table class="table table-hover table-bordered table table-striped bg-light text-center">
            <thead>
                <th>No</th>
                <th width="25%">Nama Rumah Sakit</th>
                <th>Alamat</th>
                <th width="20%">Kontak</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data->result_array() as $a) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a['nama_rs']; ?></td>
                        <td><?= $a['alamat']; ?></td>
                        <td><?= $a['kontak']; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>