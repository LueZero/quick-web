<?php $this->view("spa-spring-resorts/layouts/header.php");?>

<div class="contentGroup">
    <div class="main_Content" id="main_Content">
        <div class="index_page" id="indexPage">
            <div class="banner_group gotooreder">
            </div>
            <div class="banner_group_bg_mobile">
            </div>
            <div class="index_group">
                <div class="ad_content_group">
                    <section class="txt_content_group" id="NewsGroup">
                        <div class="service_group">
                            <p class="txt_tit">最新消息</p>
                            <span class="txt_tip">News</span>
                            <div class="txt_content">
                                <div class="news_content_group">
                                    <div class="newsdetail_content_focus_group">
                                        <div class="news_content_l"></div>
                                        <div class="news_content_r">
                                            <div class="news_txt_content">
                                                <div class="news_txt_tit">專案優惠期限</div>
                                                <span class="news_time">2023/4/6~6/30</span>
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
                                                    <br>
                                                    <p class="news_txt_focus_sub_contents">訂房請撥：02-28979060 </p>
                                                    <p class="news_txt_focus_sub_contents">台北市北投區光明路283號</p>
                                                </div>
                                            </div>
                                            <div class="btn_more_group">
                                                <button class="btn_news_list_more" onclick="history.back()">返回上一頁</button>
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

<?php $this->view("spa-spring-resorts/layouts/footer.php");?>

<script>
    $(function(){
        $(function(){
            $(".gotooreder").click(function(){
                $(window).attr('location','https://wenpin.ezhotel.com.tw/');
            })
        })
    })
</script>