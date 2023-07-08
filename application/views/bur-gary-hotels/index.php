<?php $this->view("bur-gary-hotels/layouts/header.php");?>

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
            <!-- <div class="banner_group gotooreder">
            </div>
            <div class="banner_group_bg_mobile">
            </div> -->
            <div class="index_group">
                <div class="ad_content_group">
                    <section class="txt_content_group" id="aboutGroup">
                        <p class="txt_tit">關於我們</p>
                        <span class="txt_tip">About</span>
                        <div class="txt_content">
                            <div class="pic_aboutHotel"></div>
                            <div class="sub_txt_content">
                                <div class="sub_txt_title">寶格利</div>
                                <div class="sub_txt_contents">07年，西門町第一家精品時尚商務飯店～【寶格利時尚旅館】誕生，出自擁有溫泉的北投水都溫泉會館(SPA SPRING RESORT)創辦人建立，再以都會時尚概念為輔佐，打造了，樓高十五層，46間客房，以舒適放鬆為概念，在遊玩、逛街疲憊之餘，可以在自己獨立私人的空間裡，享受泡澡，消除一整天活動後的痠痛感！將舒適放鬆概念進駐市區形的商務精品飯店裡，是首創，最希望給入住的客人更多的享受、更多新的體驗，時尚休閒快速是現代人生活，可以悠閒的度假，又可以無負擔，不須舟車勞頓的便利，享受舒適放鬆的假期---這就是我們要給你最新的驚豔！</div>
                                <div class="pic_mark_group">
                                    <div class="pic_mark"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="txt_content_group" id="HotelGroup">
                        <div class="hotel_group">
                            <p class="txt_tit">精選房型</p>
                            <span class="txt_tip">Room</span>
                            <div class="txt_content">
                                <div class="sub_txt_content">
                                    <div class="sub_txt_title">豪華雙人房</div>
                                    <div class="sub_txt_contents">
                                        <ul>
                                            <li>床型: 一大床房型【平日$3680、假日$4680】 / 兩小床【平日$3980、假日$4980】</li>
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
                                <div class="pic_hotel"></div>
                                <div class="btn_group">
                                    <a href="<?php echo base_url('hotel'); ?>">看更多</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="txt_content_group" id="NewsGroup">
                        <div class="service_group">
                            <p class="txt_tit">最新消息</p>
                            <span class="txt_tip">News</span>
                            <div class="txt_content">
                                <div class="news_content_group">
                                    <div class="news_content_focus_group">
                                        <div class="news_content_l"></div>
                                        <div class="news_content_r">
                                            <div class="news_txt_content">
                                                <div class="news_txt_tit">限定優惠</div>
                                                <span class="news_time">2023.05.16</span>
                                            </div>
                                            <div class="news_txt_focus_content">
                                                <p class="news_txt_focus_tit">最新消息</p>
                                                <div class="news_txt_focus_contents">
                                                    <p class="news_txt_focus_sub_contents">寶格利是一間坐落於台北市西門町，擁有絕佳方便的地理位置的城市旅館，簡潔溫馨的空間，舒適自在的客房，搭配俯瞰城市美景的浴室設計，可以在自己獨立私人的空間裡，享受泡澡，打造難得的城市居家環境。經歷疫情後，寶格利重新出發，規劃了不同空間，讓回來台灣的朋友有一個可以旅遊時暫時休憩的家。</p>
                                                </div>
                                            </div>
                                            <div class="btn_more_group">
                                                <a class="btn_news_list_more" href="<?php echo base_url('news'); ?>">看更多</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="news_content_list_group">
                                        <p class="pic_news_content_list"></p>
                                        <ul class="news_content_list">
                                            <li>
                                                <span class="news_time">2023.01.01</span>
                                                <div class="news_list">
                                                    限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案
                                                </div>
                                                <a class="btn_news_list_more" href="javascript:;">看更多</a>
                                            </li>
                                            <li>
                                                <span class="news_time">2023.01.01</span>
                                                <div class="news_list">
                                                    限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案
                                                </div>
                                                <a class="btn_news_list_more" href="javascript:;">看更多</a>
                                            </li>
                                            <li>
                                                <span class="news_time">2023.01.01</span>
                                                <div class="news_list">
                                                    限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案
                                                </div>
                                                <a class="btn_news_list_more" href="javascript:;">看更多</a>
                                            </li>
                                            <li>
                                                <span class="news_time">2023.01.01</span>
                                                <div class="news_list">
                                                    限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案
                                                </div>
                                                <a class="btn_news_list_more" href="javascript:;">看更多</a>
                                            </li>
                                            <li>
                                                <span class="news_time">2023.01.01</span>
                                                <div class="news_list">
                                                    限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案 限定優惠雙享 高鐵聯票專案
                                                </div>
                                                <a class="btn_news_list_more" href="javascript:;">看更多</a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="btn_group">
                                    <a href="<?php echo base_url('news'); ?>">看更多</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="txt_content_group" id="FacilityGroup">
                        <p class="txt_tit">服務設施</p>
                        <span class="txt_tip">Service Facilities</span>
                        <div class="txt_content">
                            <div class="pic_facility"></div>
                            <div class="sub_txt_content">
                                <div class="sub_txt_title">服務設施</div>
                                <div class="sub_txt_contents">
                                    <ul>
                                        <li>交誼廳</li>
                                        <li>*2F</li>
                                        <li>*提供免費點心吧</li>
                                        <li>*簡約休憩區，可以暫時休息及訪客拜訪</li>
                                        <br>
                                        <li>網際網路服務</li>
                                        <li>*2F-17F</li>
                                        <li>*24小時</li>
                                        <br>
                                        <li>營業時間:24小時</li>
                                        <li>營業項目：住宿、時段住房、場地租借，各式套裝行程等。</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="txt_content_group" id="TrafficGroup">
                        <p class="txt_tit">聯絡我們</p>
                        <span class="txt_tip">Contact Us</span>
                        <div class="txt_content">
                            <div class="sub_txt_content">
                                <div class="form_group">
                                    <div class="form_Groups">
                                        <div class="w_50">
                                            <label for="" class="form-label">貴賓姓名</label>
                                            <input type="text" class="form-control" id="" placeholder="請填寫您的姓名">
                                        </div>
                                        <div class="w_50">
                                            <label for="" class="form-label">聯絡電話</label>
                                            <input type="tel" class="form-control" id="" placeholder="請填寫您的電話" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form_Groups">
                                        <div class="w_50">
                                            <label for="" class="form-label">聯絡信箱</label>
                                            <input type="email" class="form-control" id="" placeholder="請填寫您的email">
                                        </div>
                                        <div class="w_50">
                                            <label for="" class="form-label">入住日期</label>
                                            <input type="date" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="form_Groups">
                                        <div class="w-100">
                                            <label for="exampleFormControlTextarea1" class="form-label">需求說明</label>
                                            <textarea class="form-control" placeholder="我還想說" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="btn_group">
                                        <a class="btn_success" href="javascript:;">確定</a>
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