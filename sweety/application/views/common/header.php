<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header class="main_menu home_menu"> 
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-11">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?= base_url()?>"> <img src="<?php echo site_url('assets/images/1-02.png')?>" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item <?php if($this->uri->segment(2)==""){echo "active";}?>">
                                <a class="nav-link" href="https://alphawizz.org/sweets_ecommerce/">Home</a>
                            </li>
                            <li class="nav-item <?php if($this->uri->segment(2)=="aboutus"){echo "active";}?>">
                                <a class="nav-link" href="<?php echo site_url('welcome/aboutus') ?>">About Us</a>
                            </li>
                            <li class="nav-item <?php if($this->uri->segment(2)=="index"){echo "active";}?>">
                                <a class="nav-link" href="<?php echo site_url('Products/index') ?>">Product</a>
                            </li>
                            <li class="nav-item <?php if($this->uri->segment(2)=="blog"){echo "active";}?>">
                                <a class="nav-link" href="<?php echo site_url('welcome/blog') ?>">Blog</a>
                            </li>
                          <!--   <li class="nav-item <?php if($this->uri->segment(2)=="shop"){echo "active";}?>">
                                <a class="nav-link" href="<?php echo site_url('welcome/shop') ?>">Shop</a>
                            </li> -->
                            <li class="nav-item <?php if($this->uri->segment(2)=="contact"){echo "active";}?>">
                                <a class="nav-link" href="<?php echo site_url('welcome/contact') ?>">Contact</a>
                            </li>
                             <li class="nav-item <?php if($this->uri->segment(1)=="login"){echo "active";}?>">
                                <a class="nav-link" href="<?php echo site_url('login') ?>">Login</a>
                            </li>
                        </ul>
                    </div>

                    <div class="hearer_icon d-flex">
                        <div class="cart">
                            <a class="" href="<?php echo base_url() ?>checkout"  role="button">
                                <i class="fa fa-shopping-bag"  aria-hidden="true"><sup><?php if(!empty($this->session->userdata()['cart_contents']['total_items'])){ echo $this->session->userdata()['cart_contents']['total_items']; } else { echo 0;} ?></sup></i>
                            </a>
                        </div>
                        <a id="search_1" href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner submits" action="<?= base_url() ?>Products/Search" method="post">
                <input type="text" name="search_data" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>

<script>
    //$(document).ready(function() {

  //$('.submits').keydown(function(event) {
    // enter has keyCode = 13, change it if you want to use another button
  //  if (event.keyCode == 13) {
   //   this.form.submit();
     // return false;
  //  }
//  });

//});
    </script>
