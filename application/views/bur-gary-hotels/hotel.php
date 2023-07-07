<?php $this->view("bur-gary-hotels/layouts/header.php");?>

<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH .'/bur-gary-hotel/scss/pgwslideshow.css'; ?>">

<div class="contentGroup">
    <div class="main_Content" id="main_Content">
        <div class="index_page" id="indexPage">
            <div class="slier_group">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/banner_group_bg.jpg'; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/banner_group_bg_02.jpg'; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/banner_group_bg_03.jpg'; ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="index_group">
                <div class="ad_content_group">
                    <section class="txt_content_group" id="HotelGroup">
                        <div class="hotel_group">
                            <p class="txt_tit">精選客房</p>
                            <span class="txt_tip">Hotel</span>
                            <div class="hotel_tit_tab_group">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="standardTwo-personRoom-tab" data-bs-toggle="tab" data-bs-target="#standardTwo-personRoom" type="button" role="tab" aria-controls="standardTwo-personRoom" aria-selected="true">標準雙人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="deluxeDoubleRoom-tab" data-bs-toggle="tab" data-bs-target="#deluxeDoubleRoom" type="button" role="tab" aria-controls="deluxeDoubleRoom" aria-selected="false">精緻雙人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="garageRoom-tab" data-bs-toggle="tab" data-bs-target="#garageRoom" type="button" role="tab" aria-controls="garageRoom" aria-selected="false">豪華雙人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="executiveSuite-tab" data-bs-toggle="tab" data-bs-target="#executiveSuite" type="button" role="tab" aria-controls="executiveSuite" aria-selected="false">頂級雙人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="standardRoom-tab" data-bs-toggle="tab" data-bs-target="#standardRoom" type="button" role="tab" aria-controls="standardRoom" aria-selected="false">精緻四人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="deluxeFamilRoom-tab" data-bs-toggle="tab" data-bs-target="#deluxeFamilRoom" type="button" role="tab" aria-controls="deluxeFamilRoom" aria-selected="false">豪華四人房</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="standardTwo-personRoom" role="tabpanel" aria-labelledby="standardTwo-personRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_standardTwo-personRoom_01.jpg'; ?>" alt="寶格利時尚旅館 標準雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_standardTwo-personRoom_02.jpg'; ?>" alt="寶格利時尚旅館 標準雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_standardTwo-personRoom_03.jpg'; ?>" alt="寶格利時尚旅館 標準雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_standardTwo-personRoom_04.jpg'; ?>" alt="寶格利時尚旅館 標準雙人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <div class="sub_txt_title_before"></div>
                                                    <div class="sub_txt_title">標準雙人房</div>
                                                    <div class="sub_txt_title_after"></div>
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床房型【平日$2680、假日$3680】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 免費wifi</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、小書桌、禁菸房。</li>
                                                            <li>＊《衛浴設施》大理石浴缸、浴巾、毛巾、洗髮精、沐浴乳、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約3坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/burgaryhotel/?locale=zh_TW" target="_blank">我要訂房</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="deluxeDoubleRoom" role="tabpanel" aria-labelledby="deluxeDoubleRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeDoubleRoom_01.jpg'; ?>" alt="寶格利時尚旅館 精緻雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeDoubleRoom_02.jpg'; ?>" alt="寶格利時尚旅館 精緻雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeDoubleRoom_03.jpg'; ?>" alt="寶格利時尚旅館 精緻雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeDoubleRoom_04.jpg'; ?>" alt="寶格利時尚旅館 精緻雙人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <div class="sub_txt_title_before"></div>
                                                    <div class="sub_txt_title">精緻雙人房</div>
                                                    <div class="sub_txt_title_after"></div>
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床房型【平日$2980、假日$3980】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 免費wifi</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、化妝台、禁菸房。</li>
                                                            <li>＊《衛浴設施》雙人浴缸、乾溼分離衛浴、浴巾、毛巾、洗髮精、沐浴乳、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約5-6坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/burgaryhotel/?locale=zh_TW" target="_blank">我要訂房</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="garageRoom" role="tabpanel" aria-labelledby="garageRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_garageRoom_01.jpg'; ?>" alt="寶格利時尚旅館 豪華雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_garageRoom_02.jpg'; ?>" alt="寶格利時尚旅館 豪華雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_garageRoom_03.jpg'; ?>" alt="寶格利時尚旅館 豪華雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_garageRoom_04.jpg'; ?>" alt="寶格利時尚旅館 豪華雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_garageRoom_05.jpg'; ?>" alt="寶格利時尚旅館 豪華雙人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <div class="sub_txt_title_before"></div>
                                                    <div class="sub_txt_title">豪華雙人房</div>
                                                    <div class="sub_txt_title_after"></div>
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床房型【平日$3680、假日$4680】 / 兩小床【平日$3980、假日$4980】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 免費wifi</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、衣櫥、禁菸房。</li>
                                                            <li>＊《衛浴設施》單人浴缸、浴巾、毛巾、洗髮精、沐浴乳、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約9-10坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/burgaryhotel/?locale=zh_TW" target="_blank">我要訂房</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="executiveSuite" role="tabpanel" aria-labelledby="executiveSuite-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_executiveSuite_01.jpg'; ?>" alt="寶格利時尚旅館 頂級雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_executiveSuite_02.jpg'; ?>" alt="寶格利時尚旅館 頂級雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_executiveSuite_03.jpg'; ?>" alt="寶格利時尚旅館 頂級雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_executiveSuite_04.jpg'; ?>" alt="寶格利時尚旅館 頂級雙人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <div class="sub_txt_title_before"></div>
                                                    <div class="sub_txt_title">頂級雙人房</div>
                                                    <div class="sub_txt_title_after"></div>
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床房型【平日$5980、假日$6980】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 免費wifi</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、衣櫥、禁菸房。</li>
                                                            <li>＊《衛浴設施》雙人浴缸、乾溼分離衛浴、浴巾、毛巾、洗髮精、沐浴乳、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約14坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/burgaryhotel/?locale=zh_TW" target="_blank">我要訂房</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="standardRoom" role="tabpanel" aria-labelledby="standardRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_standardRoom_01.jpg'; ?>" alt="寶格利時尚旅館 精緻四人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_standardRoom_02.jpg'; ?>" alt="寶格利時尚旅館 精緻四人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_standardRoom_03.jpg'; ?>" alt="寶格利時尚旅館 精緻四人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <div class="sub_txt_title_before"></div>
                                                    <div class="sub_txt_title">精緻四人房</div>
                                                    <div class="sub_txt_title_after"></div>
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：兩大床房型【平日$4680、假日$5680】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 免費wifi</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、禁菸房。</li>
                                                            <li>＊《衛浴設施》淋浴設備、浴巾、毛巾、洗髮精、沐浴乳、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約12坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/burgaryhotel/?locale=zh_TW" target="_blank">我要訂房</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="deluxeFamilRoom" role="tabpanel" aria-labelledby="deluxeFamilRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeFamilRoom_01.jpg'; ?>" alt="寶格利時尚旅館 豪華四人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeFamilRoom_02.jpg'; ?>" alt="寶格利時尚旅館 豪華四人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeFamilRoom_03.jpg'; ?>" alt="寶格利時尚旅館 豪華四人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeFamilRoom_04.jpg'; ?>" alt="寶格利時尚旅館 豪華四人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeFamilRoom_05.jpg'; ?>" alt="寶格利時尚旅館 豪華四人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/images/pic_hotel_deluxeFamilRoom_06.jpg'; ?>" alt="寶格利時尚旅館 豪華四人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <div class="sub_txt_title_before"></div>
                                                    <div class="sub_txt_title">豪華四人房</div>
                                                    <div class="sub_txt_title_after"></div>
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：兩大床房型【平日$5680、假日$6680】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 免費wifi</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、禁菸房。</li>
                                                            <li>＊《衛浴設施》單人浴缸、乾溼分離衛浴、浴巾、毛巾、洗髮精、沐浴乳、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約14坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/burgaryhotel/?locale=zh_TW" target="_blank">我要訂房</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->view("bur-gary-hotels/layouts/footer.php");?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo PUBLIC_PATH . '/bur-gary-hotel/js/pgwslideshow.min.js'; ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.pgwSlideshow').pgwSlideshow({
            transitionEffect: 'fading',
            autoSlide: true
        });
    });
</script>