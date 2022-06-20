<div class="text-center text-light mt-2">
    <h2>Data Stock Darah Beserta Lokasinya</h2>
</div>
<div class="row mt-2 mx-4">
    <div class="col-md-7 position-absolute top-50 start-50 translate-middle">

        <table class="table table-hover table-bordered table-striped bg-light text-center">
            <thead>
                <th>No</th>
                <th>Golongan Darah</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
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

                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>