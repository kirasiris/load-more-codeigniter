        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Data Berita</h4>
                        </div>
                        <div class="content">


                            <a href="<?php echo base_url() ?>admin/berita/tambah/"  class="btn btn-success btn-fill">Tambah Berita</a>


                                <table class="table table-bordered table-striped" style="margin-top:20px;font-family: Roboto;font-weight: 300;">
                                    <tbody>
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="color: #000;">No.</th>
                                        <th class="text-center" style="color: #000;"> JUDUL BERITA</th>
                                        <th class="text-center" style="color: #000;"> OPTIONS</th>
                                    </tr>
                                    </thead>
                                    <?php
                                        if($berita != NULL):
                                            $no = $this->uri->segment(4) + 1;
                                            foreach($berita->result() as $hasil):
                                    ?>
                                     <tr>
                                         <td class="text-center"><?php echo $no++; ?></td>
                                         <td><?php echo $hasil->judul ?></td>
                                         <td class="text-center">
                                             <a class='badge badge-success' style="font-family: Roboto;font-weight: 400;background-color: #358420;" href='<?php echo base_url() ?>admin/berita/edit/<?php echo $hasil->id_berita ?>'> Edit</a>
                                             ||
                                             <a class='badge badge-danger' style="font-family: Roboto;font-weight: 400;background-color: #842020;" href='<?php echo base_url() ?>admin/berita/delete/<?php echo $hasil->id_berita ?>'> Delete</a>
                                         </td>
                                     </tr>
                                    <?php
                                         endforeach;
                                    ?>
                                    </tbody>
                                </table>
                                <?php echo $paging ?>
                                    <?php else : ?>
                                            </tbody>
                                        </table>
                                    <?php endif; ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>