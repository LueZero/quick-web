<?php $this->view("spa-spring-resorts/layouts/header.php");?>

<style>
    .news_txt_focus_sub_contents, img {
        max-width: 100%;
        height: auto !important;
    }
</style>

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
                                            <!-- <div class="news_txt_content">
                                                <div class="news_txt_tit">專案優惠期限</div>
                                                <span class="news_time">2023/4/6~6/30</span>
                                            </div> -->
                                            <div class="news_txt_focus_content">
                                                <p class="news_txt_focus_tit"><?php echo $news->title; ?></p>
                                                <div class="news_txt_focus_contents">
                                                    <?php echo $news->content; ?>
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