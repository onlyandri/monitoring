    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Collapsable Card Example -->
        <div class="row">
            <div class="col-lg-12">
                <?= $this->session->flashdata('message') ?>
            </div>
            <div class="col-sm-12" style="margin-bottom:10px;">
                <div class="card" style="border-color: blue;">
                    <div class="card-body form-group row">
                        <h4 class="card-title"><b><?= $title; ?></b></h4>
                        <a href="<?= base_url('laporan/excel1'); ?>" class="btn btn-success" style="margin-left: auto;"><i class="fa fa-file-excel"></i> Export Excel</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Data Sampling</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample1">
                <div class="card-body">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th>Tanggal Sampling</th>
                                        <th>Kode Kolam</th>
                                        <th>Umur Udang</th>
                                        <th>MBW (gram)</th>
                                        <th>Size (Ek/Kg)</th>
                                        <th>ADG</th>
                                        <th>Pakan (kg)</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sampling as $s) : ?>
                                        <tr>
                                            <td><?= date('d-m-y', strtotime($s['tanggal_s'])); ?></td>
                                            <td><?= $s['kode_kolam']; ?></td>
                                            <td><?= $s['umur_u']; ?></td>
                                            <td><?= $s['mbw']; ?></td>
                                            <td><?= $s['size']; ?></td>
                                            <td><?= $s['adg']; ?></td>
                                            <td><?= $s['pakan']; ?></td>
                                            <td><?= $s['ket']; ?></td>

                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Collapsable Card Example -->


    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->