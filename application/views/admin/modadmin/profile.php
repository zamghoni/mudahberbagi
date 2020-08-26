<div class="single-pro-review-area mt-t-30 mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="profile-info-inner">
          <div class="profile-img">
            <?php if ($data['img_admin'] != null){ ?>
              <img src="<?php echo base_url('assets/img_admin/'.$data['img_admin']) ?>" alt="<?php echo $data['nama_admin'] ?>">
            <?php } else { ?>
              <img src="<?php echo base_url(); ?>assets/backend/images/profile/1.jpg" alt="" />
            <?php } ?>
          </div>
          <div class="profile-details-hr">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <div class="address-hr">
                  <p><b>Kode Admin</b><br /> <?php echo $data['kd_admin'] ?></p>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                  <p><b>Nama</b><br /> <?php echo $data['nama_admin'] ?></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <div class="address-hr">
                  <p><b>Email ID</b><br /> <?php echo $data['email_admin'] ?></p>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                  <p><b>Phone</b><br /> <?php echo $data['hp_admin'] ?></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="address-hr">
                  <p><b>Address</b><br /> Jl. Purwitasari No.34 RT 12/04, Pecabean, Pangkah, Tegal, Jawa Tengah, 52471</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="address-hr">
                  <a href="<?php echo base_url(); ?>/assets/backend/#"><i class="fa fa-facebook"></i></a>
                  <h3>500</h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="address-hr">
                  <a href="<?php echo base_url(); ?>/assets/backend/#"><i class="fa fa-twitter"></i></a>
                  <h3>900</h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="address-hr">
                  <a href="<?php echo base_url(); ?>/assets/backend/#"><i class="fa fa-google-plus"></i></a>
                  <h3>600</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
          <ul id="myTabedu1" class="tab-review-design">
            <li class="active"><a href="#description">Activity</a></li>
            <li><a href="#INFORMATION">Update Details</a></li>
          </ul>
          <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
            <div class="product-tab-list tab-pane fade active in" id="description">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="review-content-section">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="address-hr biography">
                          <p><b>Full Name</b><br /> <?php echo $data['nama_admin'] ?></p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="address-hr biography">
                          <p><b>Mobile</b><br /> <?php echo $data['hp_admin'] ?></p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="address-hr biography">
                          <p><b>Email</b><br /> <?php echo $data['email_admin'] ?></p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="address-hr biography">
                          <p><b>Location</b><br /> Tegal, Jawa Tengah</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-tab-list tab-pane fade" id="INFORMATION">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="review-content-section">
                    <div class="row">
                      <div class="col-lg-12">
                        <form method="post" action="<?php echo site_url('admin/update_profile/'.$data['kd_admin']) ?>" enctype="multipart/form-data">
                          <div class="form-group">
                            <input name="kd_admin" type="text" class="form-control" value="<?php echo $data['kd_admin'] ?>" disabled>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="nama_admin" value="<?php echo $data['nama_admin'] ?>">
                          </div>
                          <div class="form-group">
                            <input type="number" class="form-control" name="hp_admin" value="<?php echo $data['hp_admin'] ?>">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="email_admin" value="<?php echo $data['email_admin'] ?>">
                          </div>
                          <input type="file" class="form-control" name="img_admin">
                          <input type="hidden" name="old_img_admin" value="<?=$data['img_admin']?>">
                        </div>
                      </div>
                      <div class="row" style="margin-top:10px">
                        <div class="col-lg-12">
                          <div class="payment-adress mg-t-15">
                            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Perbaharui</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
