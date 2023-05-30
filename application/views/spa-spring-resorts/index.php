<?php $this->view("spa-spring-resorts/layouts/header.php");?>

<div class="contentGroup">
    <div class="main_Content" id="main_Content">
        <div class="index_page" id="indexPage">
            <div class="slier_group">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/banner_group_bg.jpg'; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/banner_group_bg_02.jpg'; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/banner_group_bg_03.jpg'; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo PUBLIC_PATH . '/spa-spring-resort/images/banner_group_bg_04.jpg'; ?>" class="d-block w-100" alt="...">
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
                        <p class="txt_tit">水都故事</p>
                        <span class="txt_tip">About</span>
                        <div class="txt_content">
                            <div class="pic_aboutHotel"></div>
                            <div class="sub_txt_content">
                                <div class="sub_txt_title">關於水都</div>
                                <div class="sub_txt_title_after"></div>
                                <div class="sub_txt_contents">座落於地熱谷旁的北投水都溫泉會館，樸素外觀帶有日式簡約風情的雅致，擁有優質硫磺泉，屬特殊泉質，富含多種微量元素，享受泡湯時，宛如死海般的礦物在保養著每一寸肌膚，享受最極致的美體感受。館內結合多種溫馨舒適溫泉客房，可以如湯屋般短暫停留，更歡迎入住一晚以上，體驗盡情享受泡湯樂趣，尤其位於本館頂樓【露天風呂大眾】適合親子或家庭一同同樂的泡湯，極簡的空間中，也可讓需要會議及套裝行程的貴賓完成不同需求。</div>
                                <div class="pic_mark_group">
                                    <div class="pic_mark"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="txt_content_group" id="introGroup">
                        <p class="txt_tit">北投溫泉介紹</p>
                        <span class="txt_tip">Beitou Hot Spring</span>
                        <div class="txt_content">
                            <div class="pic_aboutHotel"></div>
                            <div class="sub_txt_content">
                                <div class="sub_txt_title">北投溫泉</div>
                                <div class="sub_txt_title_after"></div>
                                <div class="sub_txt_contents">早在1697年，清人便曾來到北投採硫製作火藥。遍布於大屯山系的硫穴、溫泉水源所帶來的蒸蒸霧氣，營造出神秘不可知女巫居住般的神祕感，也是【北投（Pataw，平埔族語有女巫之意）】便是地名的由來。而【北投溫泉】更是從日據時代時便有盛名，喜歡泡湯的日本人自然不會錯過，從瀧乃湯、星乃湯、鐵乃湯就是當時日本人依照溫泉的特性與療效給予的名稱，據說對於一些慢性疾病具有一定的療效，也因此成為了北部最著名的泡湯景點之一。北投溫泉的泉質為大磺嘴溫泉，泉質屬硫酸鹽泉，PH值約為3~4之間，水質呈黃白色半透明，泉水溫度約為50-90℃，會帶有些許的硫磺味 。目前依泉質來說，可分為【青磺泉的地熱谷】、【白磺泉的硫磺谷】和位於【頂北投、雙重溪北面】及【南磺溪上游山谷內的鐵磺泉】。</div>
                                <!-- <div class="pic_mark_group">
                                    <div class="pic_mark"></div>
                                </div> -->
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
                                            <li>床型: 一大床 或 兩小床 床型</li>
                                            <br>
                                            <li>房間設備</li>
                                            <li>＊ 24小時櫃檯客房服務</li>
                                            <li>＊ 免費茶包及隨身沖泡咖啡</li>
                                            <li>＊《房內設施》空調、液晶電視、電熱水壺、冰箱、免費瓶裝水、衣櫥、禁菸房。</li>
                                            <li>＊《衛浴設施》雙人浴缸、浴巾、毛巾、洗髮精、沐浴乳、吹風機。</li>
                                            <li>平均尺寸
                                                坪數 : 約9-10坪</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pic_hotel"></div>
                                <div class="btn_group">
                                    <a href="hotel.html"></a>
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
                                                <div class="news_txt_tit">專案優惠期限</div>
                                                <span class="news_time"> 2023/4/6~6/30</span>
                                            </div>
                                            <div class="news_txt_focus_content">
                                                <p class="news_txt_focus_tit">『樂活北投．漫步輕旅行』專案 一泊二食 雙人價只要$2099元😍，快為自己安排一趟自然生態、步道、古蹟、歷史建築、宗教建築和美食的微旅行。</p>
                                                <div class="news_txt_focus_contents">
                                                    <p class="">活動條件：入住人只需一位年滿50歲即可享有此優惠</p>
                                                    <p class="news_txt_focus_sub_contents">專案包含：溫泉套房住宿一晚、雙人份早餐、雙人份晚餐、住宿期間不限次數使用露天風呂大眾池</p>
                                                    <p class="news_txt_focus_sub_contents">飯店特色：</p>
                                                    <p class="news_txt_focus_sub_contents">位於北投中心點 。靠近地熱谷、北投親水公園、全球第一座綠建築北投圖書館、凱達格蘭文化館、新北投捷運站、溫泉博物館、普濟寺、北投文物館。每個房間都有泡湯池 。搭捷運即可到達</p>
                                                    <p class="news_txt_focus_sub_contents">北投超濃優質的白硫磺泉，宛如死海般的礦物保養，給您最極致的美體享受。</p>
                                                    <p class="news_txt_focus_sub_contents">訂房Q&A</p>
                                                    <p class="news_txt_focus_sub_contents">1. 星期六及連續假日每房需加收$800 元</p>
                                                    <p class="news_txt_focus_sub_contents">2. 可以使用國民旅遊卡</p>
                                                    <p class="news_txt_focus_sub_contents">3. 加住12歲(含)以下可免費入住，13歲(含)以上每人$1000(含餐)</p>
                                                    <p class="news_txt_focus_sub_contents">4. 本館提供付費停車場100元/次，另有代客停車之服務，無服務時需自行停車或本館專人引導至停車場停放</p>
                                                    <p class="news_txt_focus_sub_contents">訂房請撥：02-28979060 </p>
                                                    <p class="news_txt_focus_sub_contents">台北市北投區光明路283號</p>
                                                </div>
                                            </div>
                                            <div class="btn_more_group">
                                                <a class="btn_news_list_more" href="news.html">看更多</a>
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
                                    <a href="news.html"></a>
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
                                        <li>*7F  </li>
                                        <li>露天風呂 (大眾池)【開放時間:12:00-23:00】</li>
                                        <br>
                                        <li>*5F  </li>
                                        <li>水悅樓 景觀餐廳 </li>
                                        <li>【目前僅提供早餐及場地租借】</li>
                                        <br>
                                        <li>*1F 【開放時間:12:00-20:00】</li>
                                        <li>FU  KITCHEN(福氣廚房) / FULL  COFFEE / 兒童遊戲區 / 溫泉煮蛋體驗</li>
                                        <br>
                                        <li>網際網路服務</li>
                                        <li>*1F</li>
                                        <li>*24小時</li>
                                        <br>
                                        <li class="red">營業時間:24小時</li>
                                        <li class="red">營業項目：住宿、客房泡湯、露天風呂大眾湯(需著泳裝)、餐飲、會議、場地租借，各式套裝行程等。</li>
                                    </ul>
                                </div>
                                <!-- <div class="sub_txt_title">FU  KITCHEN(福氣廚房)</div>
                                <div class="sub_txt_contents">
                                    <ul>
                                        <li>*1F</li>
                                        <li>我們用【輕鬆】定義用餐心情，利用中式食材與西式料理方式結合，多角
                                            度的經營，複合式的食材，不分國界的料理，碰撞出不一樣的感受。
                                            </li>
                                    </ul>
                                </div>
                                <div class="sub_txt_title">FULL  COFFEE</div>
                                <div class="sub_txt_contents">
                                    <ul>
                                        <li>*1F</li>
                                        <li>濃厚滑順的香醇咖啡 繽紛浪漫的自然花草茶。
                                            暇逸午後，輕輕享用身心、味覺，讓身體回歸最純摯的放鬆。
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub_txt_title">溫泉煮蛋體驗</div>
                                <div class="sub_txt_contents">
                                    <ul>
                                        <li>*1F入口處</li>
                                        <li>*體驗價:$50元(2顆雞蛋)</li>
                                        <li>北投兒時回憶，帶你體驗當年北投獨有地熱谷煮蛋樂趣，重回兒時時光。</li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="btn_group">
                                <a href="facility.html"></a>
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

<?php $this->view("spa-spring-resorts/layouts/footer.php");?>