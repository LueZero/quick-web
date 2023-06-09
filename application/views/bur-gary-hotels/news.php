<?php $this->view("bur-gary-hotels/layouts/header.php");?>

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
                                                <a class="btn_news_list_more" href="<?php echo base_url('news/1'); ?>">看更多</a>
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

<script>
    $(function() {
        $(function() {
            $(".gotooreder").click(function() {
                $(window).attr('location', 'https://wenpin.ezhotel.com.tw/');
            })
        })
    })
</script>
