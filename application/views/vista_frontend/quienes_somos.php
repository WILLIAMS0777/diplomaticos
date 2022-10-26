<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="<?php echo base_url();?>assets/vista/template/assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">QUINES SOMOS</h1>
        <ul>
            <li>
                <a class="active" href="index.html">Sobre</a>
            </li>
            <li>Nosotros</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->  

<div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 pr-50 md-pr-15">
                <div class="about-part">
                    <div class="sec-title mb-40">
                        <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms" style=" text-align:center">MISION</h2>
                        <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms" style=" text-align:center"><?php echo $institucion->in_mision ?></div>
                    </div>
                    <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pr-50 md-pr-15">
                <div class="about-part">
                    <div class="sec-title mb-40">
                        <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms" style=" text-align:center">VISION</h2>
                        <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms" style=" text-align:center"><?php echo $institucion->in_vision ?></div>
                    </div>
                    <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 pr-50 md-pr-15">
                <div class="about-part">
                    <div class="sec-title mb-40">
                        <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms" style=" text-align:center">OBJETIVO</h2>
                        <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms" style=" text-align:center"><?php echo $institucion->in_objetivo ?></div>
                    </div>
                    <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 pr-50 md-pr-15">
                <div class="about-part">
                    <div class="sec-title mb-40">
                        <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms" style=" text-align:center">OBICACION</h2>
                        <iframe src="<?php echo $institucion->in_google_maps; ?>" width="100%" height="500" frameborder="0" style=" border-radius: 20px 20px 20px 20px; border: white 8px solid;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> 
