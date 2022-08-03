<?php $this->load->helper('url'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() . 'assets/images/favicon.png'?> ">
    <title><?php echo $page_name ?></title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo base_url() . 'public/assets/node_modules/morrisjs/morris.css'?> " rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?php echo base_url() . 'publicassets/node_modules/toast-master/css/jquery.toast.css'?> " rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() . 'public/eliteadmin/dist/css/style.min.css'?> " rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url() . 'public/eliteadmin/dist/css/pages/dashboard1.css'?> " rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link href="<?php echo base_url() . 'public/styles.css'?> " rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Prompt'; /*a name to be used later*/
            src: url('<?php echo base_url() . 'public/fonts/Prompt-Regular.ttf'?>'); /*URL to font*/
        }
        body, html {
            font-family: 'Prompt';
        }
    </style>
</head>
<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url() . 'public/assets/images/logo-icon.png' ?> " alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url() . 'public/assets/images/logo-light-icon.png'?>" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url() . 'public/assets/images/logo-text.png'?>" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url() . 'public/assets/images/logo-light-text.png'?>" class="light-logo" alt="homepage" /></span> </a>
                </div>

                <div class="navbar-collapse">

                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>

                    </ul>
                    
                    <ul class="navbar-nav my-lg-0">
                        
                        <!-- ยังไม่ได้เข้าสู่ระบบ -->
                        <!-- <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="login.php">
                                <span class="hidden-md-down">เข้าสู่ระบบ &nbsp;</span> 
                                <img src="https://th.jobsdb.com/th-th/cms/employer/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="user" class=""> 
                            </a>
                        </li> -->

                        <!-- เข้าสู่ระบบเสร็จสิ้น -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="hidden-md-down" style="color: white;">กิติวัฒน์ อรุญวงษ์ &nbsp;</span> 
                                <img src="https://th.jobsdb.com/th-th/cms/employer/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="user" class=""> 
                            </a>
                            <div class="dropdown-menu dropdown-menu-end animated flipInY">
                                <a href="javascript:void(0)" class="dropdown-item">ข้อมูลส่วนตัว</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item">เปลี่ยนรหัสผ่าน</a>
                                <div class="dropdown-divider"></div>
                                <a href="login.html" class="dropdown-item">ออกจากระบบ</a>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->

                
