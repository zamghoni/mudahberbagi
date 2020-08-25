   <!-- Page title -->
   <div class="page-title-wrap">
       <div class="page-title-overlay"></div>
       <div class="page-title-info">
           <ol class="breadcrumb">
               <li><a href="#">Home</a></li>
               <li class="active"><?= $donasi['judul_donasi']; ?></li>
           </ol>
           <h1 class="page-title"><?= $donasi['judul_donasi']; ?></h1>
       </div>
   </div>
   <style>
       /* Chrome, Safari, Edge, Opera */
       input::-webkit-outer-spin-button,
       input::-webkit-inner-spin-button {
           -webkit-appearance: none;
           margin: 0;
       }

       /* Firefox */
       input[type=number] {
           -moz-appearance: textfield;
       }
   </style>

   <!-- Donation Section -->
   <div class="donation-section pd-top-100 pd-bottom-50">
       <div class="container">
           <div class="row">
               <div class="donate-cause-list col-sm-6">
                   <?php foreach ($donasi_lain as $row) {
                    ?>
                       <div class="related-cause equal-height-wrap">
                           <div class="related-cause-img equal-height-inner">
                               <img src="<?php echo base_url(); ?>/assets/img_donasi/<?= $row['img_donasi'] ?>" alt="donate image">
                           </div>
                           <div class="related-cause-content equal-height-inner">
                               <h4 class="related-cause-title"><?= $row['judul_donasi']; ?></h4>
                               <div class="fund-progress">
                                   <div class="media">
                                       <div class="media-left"><?php
                                                                if ($row['total'] == null) {
                                                                    echo '0';
                                                                } else {
                                                                    echo $row['total'] / $row['target_donasi'] * 100;
                                                                }

                                                                ?>%</div>
                                       <div class="media-body">
                                           <div class="x-fundline">
                                               <div class="x-fill" style="width: <?php
                                                                                    if ($row['total'] == null) {
                                                                                        echo '0%';
                                                                                    } else {
                                                                                        echo $row['total'] / $row['target_donasi'] * 100 . '%';
                                                                                    }

                                                                                    ?>"></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <a class="btn mg-top-20" href="<?php echo site_url('haldonasi/read/') . $row['id_donasi']; ?>">Detail</a>
                           </div>
                       </div>
                   <?php } ?>
               </div>
               <div class="col-md-6 mg-bottom-50">
                   <div class="billing-address">
                       <h3 class="address-header">Form Donasi</h3>
                       <form id="contact-form" class="contact-address" action="<?php echo site_url('haldonasi/simpan'); ?>" method="POST">
                           <p class="address-title">Nama Donatur</p>
                           <input class="input" type="text" name="nama_donatur" value="<?= $data['nama_donatur']; ?>" readonly />
                           <p class="address-title">Email Donatur</p>
                           <input class="input" type="text" name="email_donatur" value="<?= $data['email_donatur']; ?>" readonly />
                           <p class="address-title">Nominal</p>
                           <div class="input-group">
                               <span class="input-group-addon" id="basic-addon1">Rp</span>
                               <input type="number" class="form-control" required oninvalid="this.setCustomValidity('Nominal Harus Di Isi')" oninput="setCustomValidity('')" placeholder="Nominal" name="nominal">
                           </div>
                           <p class="address-title">Bank</p>
                           <select name="id_bank" required="this.setCustomValidity('')" oninput="setCustomValidity('')" class="input">
                               <option value="">-- Pilih Bank --</option>
                               <option value="1">Bank BNI Syariah</option>
                               <option value="2">Bank BTN Syarah</option>
                               <option value="3">Bank Syariah Mandiri</option>
                               <option value="4">Bank Muamalat</option>
                           </select>
                           <p class="address-title">Tulis Dukungan Anda (Optional)</p>
                           <textarea name="dukungan" rows="5" placeholder="Tulis dukungan atau doa untuk penggalangan dana ini. Contoh: Semoga cepat sembuh, ya!" class="off boxsize" style="width: 100%;"></textarea>
                           <input type="submit" value="Lanjutkan Pembayaran" class="btn btn-primary btn-block">
                           <input type="hidden" name="id_donasi" value="<?= $donasi['id_donasi']; ?>">
                           <input type="hidden" name="kode_donatur" value="<?= $data['kode_donatur']; ?>">
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
