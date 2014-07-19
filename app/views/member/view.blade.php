@extends('layout.bootstrap3.index')
@section('content')

<div class="alert alert-danger alert-success">
    <header>
        <h1>
            FORM MEMBER MAJALAH DAN KOMIK
        </h1>
    </header>
    <div class="panel panel-collapse">
    </div>
    <table class="table table-bordered"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>NO HP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($member as $val) { ?>
                <tr>
                    <td><?php echo $val->id ?></td>
                    <td><?php echo $val->id_member ?></td>
                    <td><?php echo $val->nama ?></td>
                    <td><?php echo $val->alamat ?></td>
                    <td><?php echo $val->jenis_kelamin ?></td>
                    <td><?php echo $val->no_hp ?></td>
                    <td>
                        <a class="btn btn-info"
                           href="<?php echo URL::to('/member/edit') . '/' . $val->id; ?>">
                            <i class="glyphicon glyphicon-edit"></i>
                            Edit
                        </a>

                        <a class="btn btn-danger"
                           href="<?php echo URL::to('/member/delete') . '/' . $val->id; ?>">
                            <i class="glyphicon glyphicon-cog"></i>
                            Delete</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-info"
       href="<?php echo URL::to('/member/add'); ?>">
        <i class="glyphicon glyphicon-import"></i>
        Tambah
    </a>
</div>
<?php echo $member->links(); ?>
@stop

