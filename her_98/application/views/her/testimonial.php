
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Testimonial</p>
                    <h1 class="display-5 mb-5">What Our Clients Say About Us!</h1>
                    <p class="mb-4">Testimonial is a statement from a past customer that describes how a product or service helped them. Testimonials are often written by the business based on specific questions they ask satisfied customers</p>
                    <a class="btn btn-primary py-3 px-4" href="">See More</a>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <?php  foreach ($review as $k => $v) {?>
                         
                     
                        <div class="testimonial-item">
                            <img class="img-fluid rounded mb-3" src="<?php  echo base_url( 'upload_something/'.$v->photo); ?>" alt="">
                            <p class="fs-5"><?php echo $v->details ?></p>
                            <h4><?php echo $v->name?></h4>
                            <span><?php echo $v->desig?></span>
                        </div>
             
                  <?php   }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->