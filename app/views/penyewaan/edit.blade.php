@extends('layout.bootstrap3.index')
@section('content')

<div class="center-block col-sm-8">
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel panel-heading">
        <i class="glyphicon glyphicon-list-alt"></i> 
        Form Edit data 
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="<?php echo URL::to('/penyewaan/edit/proses'); ?>">
            <input type="hidden" name="id"  
                       class="form-group" value="<?php echo $penyewaan->id ?> ">
                <div class="form-group">
                    <label class="col-sm-2 control-label">ID Member</label>
                    <div class="col-sm-4">
                        <input type="text" name="id_member" 
                                class="form-group" value="<?php echo $penyewaan->id_member ?> ">
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kode</label>
                    <div class="col-sm-4">
                        <input type="text" name="kode" 
                                class="form-group" value="<?php echo $penyewaan->kode ?> ">
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                <label class="col-sm-2 control-label">Jenis</label>
                <div class="col-sm-4">
                <select class="form-control" name="jenis">
                <option value="" disabled="" selected="">Pilih Jenis</option>
                    <option>Komik</option> 
                    <option>Majalah</option> 
                </select>
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Judul</label>
                    <div class="col-sm-4">
                        <input type="text" name="judul" 
                                class="form-group" value="<?php echo $penyewaan->judul ?> ">
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Harga Sewa</label>
                    <div class="col-sm-4">
                        <input type="text" name="harga_sewa" 
                                class="form-group" value="<?php echo $penyewaan->harga_sewa ?> ">
                        <p style="color: red"> </p>
                </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Pinjam</label>
                    <div class="col-sm-4">
                        <input type="date" name="tanggal_pinjam" 
                                class="form-group" value="<?php echo $penyewaan->tanggal_pinjam ?> ">
                        <p style="color: red"> </p>
                </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-xs-4 control-label">Tanggal Kembali</label>
                    <div class="col-sm-4">
                        <input type="date" name="tanggal_kembali" 
                                class="form-group" value="<?php echo $penyewaan->tanggal_kembali ?> ">
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