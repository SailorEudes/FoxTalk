<!DOCTYPE html>
<html dir="<?php echo e($currentLang['direction']); ?>" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Son Galaxy" />

    <!-- Stylesheets
============================================= -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin_assets/css/plugins.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/style.css')); ?>">
    <?php if($currentLang['direction'] == 'rtl'): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_assets/css/rtl.css')); ?>">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
============================================= -->
    <title><?php echo e(config('app.name', 'JusTalk')); ?></title>



</head>

<body class="stretched">

    <!-- Document Wrapper
============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
    ============================================= -->
        <header id="header">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
                            ============================================= -->
                        <div id="logo">
                            <a href="<?php echo e(url('/')); ?>" class="standard-logo" data-dark-logo="<?php echo e(asset('front_assets/images/App-icon.png')); ?>"><img src="<?php echo e(asset('front_assets/images/App-icon.png')); ?>" alt="<?php echo e(config('app.name', 'JusTalk')); ?>"></a>

                        </div><!-- #logo end -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
                            ============================================= -->
                        <nav class="primary-menu with-arrows block-mega-menu-4">

                            <ul class="menu-container">
                                <li class="menu-item mega-menu mega-menu-small sub-menu">
                                    <a href="#" class="menu-link">
                                        <div><?php echo e($currentLang['name']); ?><i class="icon-angle-down"></i></div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2 rounded-3" style="display: none;">
                                        <ul class="sub-menu-container mega-menu-column px-2 py-3" style="display: none;">
                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="menu-item">
                                                <a class="menu-link" href="<?php echo e(route('languageSwitch', [$l->code])); ?>">
                                                    <h3 class="mb-0 h6 nott ls0 fw-semibold"><?php echo e($l->name); ?></h3>
                                                </a>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </ul>
                                    </div>
                                    <button class="sub-menu-trigger icon-chevron-right"></button>
                                </li>


                                <li class="menu-item"><a class="menu-link" href="<?php echo e(route('login')); ?>">
                                        <div><?php echo e(__('common.login')); ?></div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="<?php echo e(route('register')); ?>">
                                        <div><?php echo e(__('common.register')); ?></div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Content
    ============================================= -->
        <main>
            <?php echo e($slot); ?>

        </main>
        <!-- #content end -->

        <footer id="footer" class="bg-white border-width-1 border-f5 block-footer-1">
            <div id="copyrights" class="bg-light">
                <div class="container">

                    <div class="row">

                        <div class="col-md-4 text-center text-md-start">
                            <div class="d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="social-icon si-small si-colored si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-colored si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-colored si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-colored si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-colored si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 text-center text-md-center">
                            &copy; 2020 All Rights Reserved by <?php echo e(config('app.name', 'JusTalk')); ?><br>
                        </div>

                        <div class="col-md-4 text-center text-md-end">
                            <div class="copyright-links"><a href="<?php echo e(route('termsCondtions')); ?>"><?php echo e(__('common.terms_conditions')); ?></a> / <a href="<?php echo e(route('privacyPolicy')); ?>"><?php echo e(__('common.privacy_policy')); ?></a> / <a href="<?php echo e(route('aboutUs')); ?>"><?php echo e(__('common.about_us')); ?></a></div>
                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer>
    </div><!-- #wrapper end -->
    <!-- Scripts -->
    <script src="<?php echo e(asset('admin_assets/js/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front_assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>


</html><?php /**PATH C:\Users\Shadow\Documents\Package\admin\resources\views/front/layouts/guest.blade.php ENDPATH**/ ?>