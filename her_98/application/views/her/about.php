 <!-- About Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="<?php echo base_url() ?>assets/img/about.jpg">
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-1 text-primary mb-0">25</h1>
                    <p class="text-primary mb-4">Year of Experience</p>
                    <h1 class="display-5 mb-4">We Make Your Home Like A Garden</h1>
                    <p class="mb-4">Dedicated team members have a deep understanding of the client's project and business .Dedicated team members have a deep understanding of the client's project and business goals.</p>
                    <a class="btn btn-primary py-3 px-4" href="<?php echo base_url('Welcome/aboutpage') ?>">Explore More</a>
                </div>
                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">
                    <?php foreach($about as $k=>$v){ ?>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="<?php echo $v->logo ?> text-primary mb-3"></i>
                                <h4 class="mb-3"><?php echo $v->title ?> </h4>
                                <span><?php echo $v->details ?> </span>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Dedicated Team</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span>
                            </div>
                        </div> -->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
