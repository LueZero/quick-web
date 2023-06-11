<?php $this->view("spa-spring-resorts/layouts/header.php"); ?>

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
                                    <?php foreach ($news  as $key => $value) { ?>
                                        <div class="news_content_focus_group">
                                            <div class="news_content_l"></div>
                                            <div class="news_content_r">
                                                <!-- <div class="news_txt_content">
                                                    <div class="news_txt_tit">專案優惠期限</div>
                                                    <span class="news_time"> 2023/4/6~6/30</span>
                                                </div> -->
                                                <div class="news_txt_focus_content">
                                                    <p class="news_txt_focus_tit"><?php echo $value->title; ?></p>
                                                    <div class="news_txt_focus_contents">
                                                    </div>
                                                </div>
                                                <div class="btn_more_group">
                                                    <a class="btn_news_list_more" href="<?php echo base_url('news/'.$value->id); ?>">看更多</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
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

<script>
    $(function() {
        $(function() {
            $(".gotooreder").click(function() {
                $(window).attr('location', 'https://wenpin.ezhotel.com.tw/');
            })
        })
    })
</script>