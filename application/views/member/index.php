<div class="container my-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card border-0 shadow mx-3 bg-white">
                <div class="card-body">
                    <h3 class="mb-3">Data Member</h3>    
                    <a href="<?php echo site_url('member/input'); ?>" class="btn btn-primary btn-sm mb-4 rounded-pill shadow"><i class="fa fa-plus-circle"></i> Tambah</a>
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $counter = 1; ?>
                            <?php foreach ( $member as $item ) : ?>
                                <tr>
                                    <td scope="row"> <?php echo $counter; ?> </td>
                                    <td> <?php echo $item->nama; ?> </td>
                                    <td> <?php echo $item->alamat; ?></td>
                                    <td> <?php echo $item->no_hp; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo site_url('member/edit/' . $item->id_member)?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?=base_url('member/hapus/' . $item->id_member)?>" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php $counter++; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#dataTable').DataTable()
</script>