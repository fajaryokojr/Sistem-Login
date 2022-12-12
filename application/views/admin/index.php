

 
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
               
        <!-- BAGIAN BACKGROUND COVER -->
        <!-- BAGIAN PROFILE PICTURE -->
        <div class="container-fluid">
            <div class="container">
                <div class="row pb-5 header-min-height">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-3 col-sm-5 col-md-4 mb-sm-7">
                                <div
                                    class="wrapper-kelas rounded shadow minus-top logo-center wrapper-kelas-sm user-profile-picture">
                                    <img src="<?= base_url('assets/img/profile/default.jpg'); ?>"
                                        class="img-fluid" alt="Yoko Fajar Santosa">
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-7 col-md-8 pt-3 pl-xl-4 pl-lg-5 pl-sm-4">
                                <div class="d-flex">
                                    <h2><?= $user['name']; ?></h2>
                                </div>


                                <p>
                                    <span class="text-icon" title="XP">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </span>
                                </p>
                                <p>
                                    <span class="text-icon">
                                    <i class="fas fa-heart"></i> 02 Februari 2000 
                                    </span>
                                </p>
                                <p>
                                    <span class="text-icon">
                                    <i class="fas fa-phone"></i> +62 8122-9264-317 
                                    </span>
                                </p>
                                <p>
                                    <span class="text-icon">
                                    <i class="fas fa-envelope"></i> <?= $user['email']; ?>
                                    </span>
                                </p>
                                <p>
                                    <span class="text-icon">
                                        <i class="fas fa-clock"></i> Bergabung sejak <?= date('d-M-Y'); ?>
                                    </span>
                                </p>
                                <p>
                                    <span class="text-icon">
                                    <i class="fas fa-graduation-cap"></i> Ilmu Komputer/Informatika
                                    </span>
                                </p>
                                <p>
                                    <span class="text-icon">
                                        <i class="fas fa-map-marker-alt"></i> Kabupaten Banjarnegara, Jawa Tengah
                                    </span>
                                </p>

                                <div class="container-fluid">
            <div class="container">
                <div class="row text-center text-light row-eq-height">
                    <div class="col-md-4 mt-2 text-dark">
                        <div class="card">
                            <div class="card-body">
                                Study
                                <h3>12 <br><small>Academy</small></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 text-dark">
                        <div class="card">
                            <div class="card-body">
                            Winner
                                <div class="spacer-24-px d-none d-md-block d-lg-none"></div>
                                <h3>5 <br><small>Challenge</small></h3>
                                <div class="spacer-24-px d-none d-md-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 text-dark">
                        <div class="card">
                            <div class="card-body">
                            Attend
                                <div class="spacer-24-px d-none d-md-block d-lg-none"></div>
                                <h3>9 <br><small>Event</small></h3>
                                <div class="spacer-24-px d-none d-md-block d-lg-none"></div>
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
            </div>
        </div>
        <div id="content"></div>

        <!-- TABBED MENU -->
        

                       <!-- End of Main Content -->