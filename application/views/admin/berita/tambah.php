        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Tambah Berita</h4>
                        </div>
                        <div class="content">
                           <?php
                               echo form_open_multipart('admin/berita/simpan')
                           ?>
                            <div class="form-group">
                                <label>Gambar Berita</label>
                                <input type="file" class="form-control" name="userfile">
                                <input type="hidden" name="type" value="<?php echo $type ?>">
                            </div>                           
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" class="form-control" name="judul" placeholder="Judul Berita">
                            </div>
                            <div class="form-group">
                                <label>Isi Berita</label>
                                <textarea class="ckeditor" name="isi"></textarea>
                            </div>                            
                            <button type="submit" class="btn btn-success btn-fill">Simpan Berita</button>
                           <?php echo form_close(); ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>