@extends('layout.bootstrap3.index')
@section('content')

<div class="alert alert-danger alert-success">
    <header>
        <h1>
            FORM PENYEWAAN
        </h1>
    </header>
    <div class="panel panel-collapse">
    </div>
    <table class="table table-bordered"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Member</th>
                <th>Kode</th>
                <th>Jenis</th>
                <th>Judul</th>
                <th>Harga Sewa</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penyewaan as $val) { ?>
                <tr>
                    <td><?php echo $val->id ?></td>
                    <td><?php echo $val->id_member ?></td>
                    <td><?php echo $val->kode ?></td>
                    <td><?php echo $val->jenis ?></td>
                    <td><?php echo $val->judul ?></td>
                    <td><?php echo $val->harga_sewa ?></td>
                    <td><?php echo $val->tanggal_pinjam ?></td>
                    <td><?php echo $val->tanggal_kembali ?></td>
                    <td>
                        <a class="btn btn-info"
                           href="<?php echo URL::to('/penyewaan/edit') . '/' . $val->id; ?>">
                            <i class="glyphicon glyphicon-edit"></i>
                            Edit
                        </a>

                        <a class="btn btn-danger"
                           href="<?php echo URL::to('/penyewaan/delete') . '/' . $val->id; ?>">
                            <i class="glyphicon glyphicon-remove"></i>
                            Delete</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-info"
       href="<?php echo URL::to('/penyewaan/add'); ?>">
        <i class="glyphicon glyphicon-save"></i>
        Tambah
    </a>
</div>
<?php echo $penyewaan->links(); ?>
@stop

