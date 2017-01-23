        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Berita</h4>
                        </div>
                        <div class="content">
                           <?php
                               echo form_open_multipart('admin/berita/simpan')
                           ?>
                            <div class="form-group">
                                <label>Gambar Berita</label>

                                <input type="file" class="form-control" name="userfile">

                                <input type="hidden" name="type" value="<?php echo $type ?>">

                                <input type="hidden" name="id_berita" value="<?php echo $data_berita['id_berita'] ?>">

                            </div>  

                            <div class="form-group">
                                <label>Judul Berita</label>

                                <input type="text" class="form-control" name="judul" value="<?php echo $data_berita['judul'] ?>"  placeholder="Judul Berita">

                            </div>

                            <div class="form-group">
                                <label>Isi Berita</label>

                                <textarea class="ckeditor" name="isi">
                                    <?php echo $data_berita['isi_berita'] ?>
                                </textarea>

                            </div>                            
                            <button type="submit" class="btn btn-success btn-fill">Update Berita</button>
                           <?php echo form_close(); ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>