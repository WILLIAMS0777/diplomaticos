<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="<?php echo base_url();?>assets/vista/template/assets/images/breadcrumbs/fondo2.png" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">COMUNICADOS</h1>
        <ul>
            <li>
                <a class="active" href="index.html">Nuestro</a>
            </li>
            <li>Comunicados</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->


<!-- Blog Section Start -->
<div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
<div class="container">
    <div class="row">
        
        <div class="col-lg-8 pr-50">
            <div class="row">

                <div class="col-lg-12 mb-70">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a ><img src="<?php echo base_url();?>assets/imagenes_comunicado/<?php echo $comunicado->imagen;?>" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="#"><?php echo $comunicado->titulo; ?></a></h3>
                            <div class="blog-meta">
                                <ul class="btm-cate">
                                    <li>
                                        <div class="blog-date">
                                            <i class="fa fa-calendar-check-o"></i> <?php echo $comunicado->fecha_registro;?>                                                       
                                        </div>
                                    </li>   
                                    
                                </ul>
                            </div>
                            <div class="blog-desc">   
                            <?php echo $comunicado->descripcion;?>                                
                            </div>
                            
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
    </div> 
</div>
</div>
<!-- Blog Section End -->  
