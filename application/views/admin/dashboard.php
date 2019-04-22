      <?php 
      if ($this->session->flashdata('error')!==null) {
        ?>
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?php echo $this->session->flashdata('error') ?>
        </div>
        <?php
      }

      if ($this->session->flashdata('success')!==null) {
        ?>
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?php echo $this->session->flashdata('success') ?>
        </div>
        <?php
      }
      ?>
      <div class="content-body"><section id="timeline" class="timeline-left timeline-wrapper">
        <div class="card border-grey border-lighten-2">
          <div class="card-header">
            <h4 class="card-title">VMD Indonesia</h4>
            <p class="card-subtitle text-muted pt-1">
              <span class="font-small-3">Selamat datang</span>
            </p>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            <div class="heading-elements">
            </div>
          </div>
          <div class="card-body collapse in">
            <div class="card-block">
              <div class="row">
                <div class="col-lg-5 col-xs-12">
                  <!-- <img class="img-fluid" src="<?php echo base_url() ?>assets/app-assets/images/carousel/06.jpg" alt="Timeline Image 1" style="width: 100%; height: 100%"> -->
                  <ul class="list-inline mb-1">
                  </ul>
                </div>
                <div class="col-lg-7 col-xs-12">
                  <h1>VMD Indonesia </h1>
                  <p>Welcome to dashboard VMD </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>