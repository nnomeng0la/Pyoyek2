<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        WEB EO | 2SI08
    </title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/logo.png') ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/tailwind.css') ?>" />

    <!-- ==== WOW JS ==== -->
    <script src="<?php echo base_url('assets/js/wow.min.js') ?>"></script>
    <script>
        new WOW().init();
    </script>
</head>

<body>
    <!-- ====== Navbar Section Start -->
    <div class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a href="<?php echo base_url('index.php/front') ?>" class="navbar-logo block w-full py-5">
                        <b>WEB EO | 2SI08</b>
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div>
                        <button id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        </button>
                        <nav id="navbarCollapse" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6">
                            <ul class="blcok lg:flex">
                                <li class="group relative">
                                    <a href="<?php echo base_url('index.php/front/#home') ?>" class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                        Home
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="<?php echo base_url('index.php/front/#about') ?>" class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        About
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="<?php echo base_url('index.php/front/#event') ?>" class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        Event
                                    </a>
                                </li>

                                <li class="group relative">
                                    <a href="<?php echo base_url('index.php/front/#team') ?>" class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        Team
                                    </a>
                                </li>
                                <?php
                                if ($this->session->userdata('ROLE') == 'administrator') {
                                ?>
                                    <li class="group relative">
                                        <a href="<?php echo base_url('index.php/users') ?>" class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-red lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">Backend</a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                    <?php
                    if (!$this->session->has_userdata('USERNAME')) {
                    ?>
                        <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                            <a href="<?php echo base_url('index.php/login') ?>" class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70">
                                Sign In
                            </a>
                            <a href="<?php echo base_url('index.php/registrasi') ?>" class="signUpBtn rounded-lg bg-white bg-opacity-20 py-3 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
                                Sign Up
                            </a>
                        </div>
                    <?php
                    } else {

                    ?>
                        <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                            <a href="<?php echo base_url('index.php/login/logout') ?>" class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70">
                                Logout
                            </a>
                        </div>

                    <?php

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Navbar Section End -->