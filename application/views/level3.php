<!-- team-area start -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/levels/levels.css">
  <div class="team-area">
      <div class="container">
          <div class="row d-flex justify-content-center">
                <div class="card container-fluid level-area">
                  <div class="card-body">
                    <form name="frmLevel3" method="POST" action="<?php echo site_url('level3/submit');?>" id="frm_level3">
                      <p class="h2 text-center py-4"><?php echo $level; ?></p>
                      <label for="defaultFormCardNameEx" class="grey-text">Hint</label>
                      <input type="text" id="defaultFormCardNameEx" class="form-control" name="flag">
                      <label for="defaultFormCardNameEx" class="text-danger"><?php echo $error; ?></label>
                      <div class="text-center py-4 mt-3">
                        <button class="btn btn-outline-purple" type="submit">Submit<i class="fa fa-paper-plane-o ml-2"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
          </div>
      </div>
  </div>
  <!-- team-area end -->
