<?php $this->view("bur-gary-hotels/layouts/header.php"); ?>

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
                                        
                                        <div class="news_content_focus_group" >
                                            <div class="news_content_l" style="background:url('<?php echo $value->header_image; ?>')"></div>
                                            <div class="news_content_r">
                                                <!-- <div class="news_txt_content">
                                                    <div class="news_txt_tit">限定優惠</div>
                                                    <span class="news_time">2023.05.16</span>
                                                </div> -->
                                                <div class="news_txt_focus_content">
                                                    <p class="news_txt_focus_tit"><?php echo $value->title; ?></p>
                                                    <div class="news_txt_focus_contents">
                                                        <p class="news_txt_focus_sub_contents"> </p>
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

<?php $this->view("bur-gary-hotels/layouts/footer.php"); ?>

<script>
    $(function() {
        $(function() {
            $(".gotooreder").click(function() {
                $(window).attr('location', 'https://wenpin.ezhotel.com.tw/');
            })
        })
    })
</script>