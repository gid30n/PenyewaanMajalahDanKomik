@extends('layout.bootstrap3.index')
@section('content')

<div class="center-block col-sm-8">
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel panel-heading">
        <i class="glyphicon glyphicon-list-alt"></i> 
        Form Tambah data 
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="<?php echo URL::to('/member/edit/proses'); ?>">
            <input type="hidden" name="id"  
                       class="form-group" value="<?php echo $member->id ?> ">
                <div class="form-group">
                    <label class="col-sm-2 control-label">ID Member</label>
                    <div class="col-sm-4">
                        <input type="text" name="id_member" 
                                class="form-group" value="<?php echo $member->id_member ?> ">
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" 
                                class="form-group" value="<?php echo $member->nama ?> ">
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" name="alamat" 
                                class="form-group" value="<?php echo $member->alamat ?> ">
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <input type="text" name="jenis_kelamin" 
                                class="form-group" value="<?php echo $member->jenis_kelamin ?> ">
                        <p style="color: red"> </p>
                </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">No HP</label>
                    <div class="col-sm-4">
                        <input type="text" name="no_hp" 
                                class="form-group" value="<?php echo $member->no_hp ?> ">
                        <p style="color: red"> </p>
                </div>
                </div>
                
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i>Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop