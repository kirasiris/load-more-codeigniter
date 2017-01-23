<?php
    if($detail_berita != NULL) :
?>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-newspaper-o"></i> <?php echo $detail_berita->judul ?></div>
            <div class="panel-body">
            <img src="<?php echo base_url()?>assets/images/berita/<?php echo $detail_berita->thumbnail ?>" class="img-roundered" style="width: 715px;margin-bottom: 10px">
            <?php echo $detail_berita->isi_berita ?>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <ul class="list-group">
            <li class="list-group-item">
              <span class="badge">14</span>
              HTML
            </li>
            <li class="list-group-item">
              <span class="badge">14</span>
              CSS
            </li>
            <li class="list-group-item">
              <span class="badge">14</span>
              JavaScript
            </li>
            <li class="list-group-item">
              <span class="badge">14</span>
              Bootstrap
            </li>                                    
          </ul>
        </div>

      </div>
        <?php
            else:
        ?>

        <?php endif; ?>
      <hr>