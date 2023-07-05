<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="寶格利時尚旅館-西門町第一家精品時尚商務飯店">
    <meta name="subject" content="寶格利時尚旅館-西門町第一家精品時尚商務飯店">
    <meta name="keywords" content="西門町、西門町住宿、西門町出差、觀光、旅遊、住宿、城市之旅、西門捷運站">
    <meta name="description" content="寶格利時尚旅館位於台北西門町，距離捷運西門站僅2分鐘距離，最適合利用捷運暢遊台北。">
    <meta property="og:url" content="" />
    <meta property="og:title" content="寶格利時尚旅館-西門町第一家精品時尚商務飯店" />
    <meta property="og:image" content="預覽圖 URL" />
    <meta property="og:description" content="寶格利時尚旅館位於台北西門町，距離捷運西門站僅2分鐘距離，最適合利用捷運暢遊台北。" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1,user-scalable=0, viewport-fit=cover, shrink-to-fit=no">
    <title>寶格利時尚旅館 - 西門町第一家精品時尚商務飯店</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH. '/bur-gary-hotel/css/style.css'; ?>">
</head>

<body>
    <div class="wrapper">
        <!-- Modal -->
        <div class="modal fade" id="lineIDModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">LINE ID</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        burgaryhotel
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button> -->
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">關閉</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="onlineBookingrGroup" id="onlineBookingrGroup">
            <ul>
                <li>
                    <a href="https://www.facebook.com/burgaryhotel/?locale=zh_TW" class="" target="_blank">
                        線上訂房
                    </a>
                </li>
            </ul>
        </div>
        <div class="customerGroup" id="customerGroup">
            <ul>
                <li>
                    <a href="https://www.instagram.com/burgary2007hotel/?igshid=YjNmNGQ3MDY%3D" class="icon_ig_side">
                        <span class="icon icon_ig_side"></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="icon_line_side" data-bs-toggle="modal" data-bs-target="#lineIDModal">
                        <span class="icon icon_line_side"></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/burgaryhotel" class="icon_fb_side" target="_blank">
                        <span class="icon icon_fb_side"></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="goTop">
                        <span class="icon icon_top"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="contentBox">
            <div class="headerGroup" id="HeaderGroup">
                <div class="header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="mobile_header bd-example">
                                    <nav class="navbar navbar-light bg-light fixed-top">
                                        <div class="container-fluid">
                                            <a class="navbar-brand icon_logo_mobile" href="<?php echo base_url(); ?>"></a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="navGroup" id="NavGroup">
                                    <a class="logo_pc" href="<?php echo base_url(); ?>">
                                        <img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/logo_pc.png'; ?>" alt="寶格利時尚旅館" title="寶格利時尚旅館">
                                    </a>
                                    <ul class="login_group">
                                        <li>
                                            <a class="icon_index" href="<?php echo base_url('#aboutGroup'); ?>">關於我們</a>
                                        </li>
                                        <li>
                                            <a class="icon_about" href="<?php echo base_url('hotel'); ?>">精選房型</a>
                                        </li>
                                        <li>
                                            <a class="icon_cart" href="<?php echo base_url('news'); ?>">最新消息</a>
                                        </li>
                                        <li>
                                            <a class="icon_index" href="<?php echo base_url('#FacilityGroup'); ?>">服務設施</a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/burgaryhotel/?locale=zh_TW" target="_blank">線上訂房</a>
                                        </li>
                                        <li>
                                            <a class="icon_about" href="<?php echo base_url('#TrafficGroup'); ?>">聯絡我們</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>