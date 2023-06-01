
<?php $this->view("spa-spring-resorts/layouts/header.php"); ?>

<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH .'/spa-spring-resort/scss/pgwslideshow.css'; ?>">

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
                            <img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images//banner_group_bg.jpg'; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/banner_group_bg.jpg'; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/banner_group_bg.jpg'; ?>" class="d-block w-100" alt="...">
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
                                        <button class="nav-link active" id="standardTwo-personRoom-tab" data-bs-toggle="tab" data-bs-target="#standardTwo-personRoom" type="button" role="tab" aria-controls="standardTwo-personRoom" aria-selected="true">標準(無窗)雙人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="deluxeDoubleRoom-tab" data-bs-toggle="tab" data-bs-target="#deluxeDoubleRoom" type="button" role="tab" aria-controls="deluxeDoubleRoom" aria-selected="false">精緻(有窗)雙人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="garageRoom-tab" data-bs-toggle="tab" data-bs-target="#garageRoom" type="button" role="tab" aria-controls="garageRoom" aria-selected="false">豪華雙人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="executiveSuite-tab" data-bs-toggle="tab" data-bs-target="#executiveSuite" type="button" role="tab" aria-controls="executiveSuite" aria-selected="false">親子4人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="standardRoom-tab" data-bs-toggle="tab" data-bs-target="#standardRoom" type="button" role="tab" aria-controls="standardRoom" aria-selected="false">家庭4人房</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="deluxeFamilRoom-tab" data-bs-toggle="tab" data-bs-target="#deluxeFamilRoom" type="button" role="tab" aria-controls="deluxeFamilRoom" aria-selected="false">VIP 4人房</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="standardTwo-personRoom" role="tabpanel" aria-labelledby="standardTwo-personRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_standardTwo-personRoom_01.jpg'; ?>" alt="北投水都溫泉會館 標準(無窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_standardTwo-personRoom_02.jpg'; ?>" alt="北投水都溫泉會館 標準(無窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_standardTwo-personRoom_03.jpg'; ?>" alt="北投水都溫泉會館 標準(無窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_standardTwo-personRoom_04.jpg'; ?>" alt="北投水都溫泉會館 標準(無窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_standardTwo-personRoom_05.jpg'; ?>" alt="北投水都溫泉會館 標準(無窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_standardTwo-personRoom_06.jpg'; ?>" alt="北投水都溫泉會館 標準(無窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_standardTwo-personRoom_07.jpg'; ?>" alt="北投水都溫泉會館 標準(無窗)雙人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <!-- <div class="sub_txt_title_before"></div> -->
                                                    <div class="sub_txt_title">✤ 標準(無窗)雙人房 ✤</div>
                                                    <!-- <div class="sub_txt_title_after"></div> -->
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床 或 兩小床 床型【平日$3080起、假日$4080起】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、禁菸房、部分有窗無景。</li>
                                                            <li>＊《衛浴設施》雙人浴池(水療浴池或觀音石浴池)、浴巾、毛巾、洗髮沐浴、乳液、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約5-6坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/spaspring" target="_blank"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="deluxeDoubleRoom" role="tabpanel" aria-labelledby="deluxeDoubleRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeDoubleRoom_01.jpg'; ?>" alt="北投水都溫泉會館 精緻(有窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeDoubleRoom_02.jpg'; ?>" alt="北投水都溫泉會館 精緻(有窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeDoubleRoom_03.jpg'; ?>" alt="北投水都溫泉會館 精緻(有窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeDoubleRoom_04.jpg'; ?>" alt="北投水都溫泉會館 精緻(有窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeDoubleRoom_05.jpg'; ?>" alt="北投水都溫泉會館 精緻(有窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeDoubleRoom_06.jpg'; ?>" alt="北投水都溫泉會館 精緻(有窗)雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeDoubleRoom_07.jpg'; ?>" alt="北投水都溫泉會館 精緻(有窗)雙人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <!-- <div class="sub_txt_title_before"></div> -->
                                                    <div class="sub_txt_title">✤ 精緻(有窗)雙人房 ✤</div>
                                                    <!-- <div class="sub_txt_title_after"></div> -->
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床 或 兩小床 床型【平日$3580起、假日$4580起】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、禁菸房。</li>
                                                            <li>＊《衛浴設施》雙人浴池(水療浴池或觀音石浴池)、浴巾、毛巾、洗髮沐浴、乳液、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約5-6坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/spaspring" target="_blank"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="garageRoom" role="tabpanel" aria-labelledby="garageRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_garageRoom_01.jpg'; ?>" alt="北投水都溫泉會館 豪華雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_garageRoom_02.jpg'; ?>" alt="北投水都溫泉會館 豪華雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_garageRoom_03.jpg'; ?>" alt="北投水都溫泉會館 豪華雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_garageRoom_04.jpg'; ?>" alt="北投水都溫泉會館 豪華雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_garageRoom_05.jpg'; ?>" alt="北投水都溫泉會館 豪華雙人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_garageRoom_06.jpg'; ?>" alt="北投水都溫泉會館 豪華雙人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <!-- <div class="sub_txt_title_before"></div> -->
                                                    <div class="sub_txt_title">✤ 豪華雙人房 ✤</div>
                                                    <!-- <div class="sub_txt_title_after"></div> -->
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床 或 兩小床 床型【平日$4580起、假日$5580起】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、沙發、桌子、禁菸房。</li>
                                                            <li>＊《衛浴設施》雙人浴池(水療浴池)、浴巾、毛巾、洗髮沐浴、乳液、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約12坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/spaspring" target="_blank"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="executiveSuite" role="tabpanel" aria-labelledby="executiveSuite-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_executiveSuite_01.jpg'; ?>" alt="北投水都溫泉會館 親子4人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_executiveSuite_02.jpg'; ?>" alt="北投水都溫泉會館 親子4人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_executiveSuite_03.jpg'; ?>" alt="北投水都溫泉會館 親子4人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <!-- <div class="sub_txt_title_before"></div> -->
                                                    <div class="sub_txt_title">✤ 親子4人房 ✤</div>
                                                    <!-- <div class="sub_txt_title_after"></div> -->
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床 + 雙人沙發床 床型【平日$5280起、假日$6280起】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、禁菸房。</li>
                                                            <li>＊《衛浴設施》雙人浴池(水療浴池)、浴巾、毛巾、洗髮沐浴、乳液、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約12坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/spaspring" target="_blank"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="standardRoom" role="tabpanel" aria-labelledby="standardRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_standardRoom_01.jpg'; ?>" alt="北投水都溫泉會館 家庭4人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_standardRoom_02.jpg'; ?>" alt="北投水都溫泉會館 家庭4人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <!-- <div class="sub_txt_title_before"></div> -->
                                                    <div class="sub_txt_title">✤ 家庭4人房 ✤</div>
                                                    <!-- <div class="sub_txt_title_after"></div> -->
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床 + 兩小床 床型【平日$5980起、假日$6980起】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、桌子、椅子、禁菸房。</li>
                                                            <li>＊《衛浴設施》雙人浴池(水療浴池)、浴巾、毛巾、洗髮沐浴、乳液、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約12坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/spaspring" target="_blank"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="deluxeFamilRoom" role="tabpanel" aria-labelledby="deluxeFamilRoom-tab">
                                        <div class="htmleaf-content bgcolor-3">
                                            <ul class="pgwSlideshow">
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeFamilRoom_01.jpg'; ?>" alt="北投水都溫泉會館 VIP 4人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeFamilRoom_02.jpg'; ?>" alt="北投水都溫泉會館 VIP 4人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeFamilRoom_03.jpg'; ?>" alt="北投水都溫泉會館 VIP 4人房"></li>
                                                <li><img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/pic_hotel_deluxeFamilRoom_04.jpg'; ?>" alt="北投水都溫泉會館 VIP 4人房"></li>
                                            </ul>
                                            <div class="sub_group">
                                                <div class="sub_txt_content">
                                                    <!-- <div class="sub_txt_title_before"></div> -->
                                                    <div class="sub_txt_title">✤ VIP 4人房 ✤</div>
                                                    <!-- <div class="sub_txt_title_after"></div> -->
                                                    <div class="sub_txt_contents">
                                                        <ul>
                                                            <li>房型：一大床 + 通鋪區 床型【平日$6980起、假日$7980起】</li>
                                                            <br>
                                                            <li>房間設備</li>
                                                            <li>＊ 樓中樓型式</li>
                                                            <li>＊ 24小時櫃檯客房服務</li>
                                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、桌子、椅子、禁菸房。</li>
                                                            <li>＊《衛浴設施》雙人浴池(水療浴池)、浴巾、毛巾、洗髮沐浴、乳液、吹風機。</li>
                                                            <li>平均尺寸
                                                                坪數 : 約15坪</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_order_group">
                                                <a href="https://www.facebook.com/spaspring" target="_blank"></a>
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

<?php $this->view("spa-spring-resorts/layouts/footer.php"); ?>

<script type="text/javascript" src="<?php echo PUBLIC_PATH .'/spa-spring-resort/js/pgwslideshow.min.js'; ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.pgwSlideshow').pgwSlideshow({
            transitionEffect: 'fading',
            autoSlide: true
        });
    });
</script>