<?php 
$attributes = array('id' => 'frmphotogallery','name' => 'frmphotogallery');
echo form_open_multipart('photogallery',$attributes); ?>  
<input type="hidden" name="hidEx1" id="hidEx1"/>


<!DOCTYPE html>
<html lang="en">

<head>

  <title>আমরা ৯০ শতকের</title>


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?=base_url()?>index.php/Welcome">আমরা ৯০ শতকের</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?=base_url()?>index.php/photogallery">আমাদের সম্পর্কে</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?=base_url()?>index.php/photogallery">৯০ এর দিনগুলি</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?=base_url()?>index.php/photogallery">৯০ এর ছড়া</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"  href="<?=base_url()?>index.php/photogallery">ফটো গ্যাল্যারি</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">হারিয়ে যাওয়া আমাদের সোনালি দিনগুলি ধরে রাখার জন্য ছোট্ট প্রয়াস।</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">আহা শৈশব </p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about"></a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">আবার যদি শৈশব ফিরে পেতাম</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">ইশকুল-ছুটি-নানাবাড়ি-পুকুর-টুপাভাতি</p>
         <!--  <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
        </div>
      </div>
    </div>
  </section>



  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
    </div>
  </footer>

</body>

</html>
