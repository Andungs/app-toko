<section class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <a href="" class="btn btn-primary mb-2" data-target="#modal-default" data-toggle="modal">Tambah Produk</a>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Produk</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Cari Produk">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Kode Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Merek</th>
                                    <th>Model</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <?php if ($this->session->userdata('role_id') == 1) : ?>
                                        <th>Action</th>
                                    <?php endif ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($barang as $b) : ?>
                                    <tr>
                                        <td class="text-uppercase"><?= $b['kode_barang'] ?></td>
                                        <td class="text-uppercase"><?= $b['nama_barang'] ?></td>
                                        <td class="text-uppercase"><?= $b['merek_barang'] ?></td>
                                        <td class="text-uppercase"><?= $b['model_barang'] ?></td>
                                        <td class="text-uppercase"><?= $b['harga'] ?></td>
                                        <td class="text-uppercase"><?= $b['stok'] ?></td>
                                        <?php
                                        $role_id = $this->session->userdata('role_id');
                                        if ($role_id == 1) :
                                        ?>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm text-capitalize" data-target="#modal-edit" data-toggle="modal">
                                                    edit
                                                    <i class="fas fa-fw fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm text-capitalize">
                                                    hapus
                                                    <i class="fas fa-fw fa-trash "></i>
                                                </a>
                                            </td>
                                        <?php endif ?>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="kodeproduk" placeholder="Kode Produk">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="namaproduk" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="merek" placeholder="Merek">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="model" placeholder="Model">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="harga" placeholder="Harga">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="stok" placeholder="Stok">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">edit Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="kodeproduk" placeholder="Kode Produk">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="namaproduk" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="merek" placeholder="Merek">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="model" placeholder="Model">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="harga" placeholder="Harga">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="stok" placeholder="Stok">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->