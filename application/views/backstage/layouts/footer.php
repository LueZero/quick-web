        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>網頁專案 © 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery
        ============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/vendor/jquery-1.12.4.min.js"); ?>"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/bootstrap.min.js"); ?>"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/wow.min.js"); ?>"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/jquery-price-slider.js"); ?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/jquery.meanmenu.js"); ?>"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/owl.carousel.min.js"); ?>"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/jquery.sticky.js"); ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/jquery.scrollUp.min.js"); ?>"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/counterup/jquery.counterup.min.js"); ?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/counterup/waypoints.min.js"); ?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/counterup/counterup-active.js"); ?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/scrollbar/jquery.mCustomScrollbar.concat.min.js");?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/scrollbar/mCustomScrollbar-active.js");?>"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/metisMenu/metisMenu.min.js");?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/metisMenu/metisMenu-active.js");?>"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/morrisjs/raphael-min.js");?>"></script>
    <!-- <script src="<?php echo base_url("public/kiaalap-master/js/morrisjs/morris.js");?>"></script> -->
    <!-- <script src="<?php echo base_url("public/kiaalap-master/js/morrisjs/morris-active.js");?>"></script> -->
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/sparkline/jquery.sparkline.min.js");?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/sparkline/jquery.charts-sparkline.js");?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/sparkline/sparkline-active.js");?>"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/calendar/moment.min.js");?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/calendar/fullcalendar.min.js");?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/calendar/fullcalendar-active.js");?>"></script>
    <!-- summernote JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/summernote/summernote.min.js");?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/summernote/summernote-active.js");?>"></script>
    <script src="<?php echo base_url("public/kiaalap-master/js/tab.js");?>"></script>

    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/plugins.js");?>"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url("public/kiaalap-master/js/main.js");?>"></script>
    <!-- tawk chat JS
		============================================ -->
    <!-- <script src="<?php echo base_url("public/kiaalap-master/js/tawk-chat.js");?>"></script> -->

    <?php if(8.0 <= floatval(phpversion())) {?>
      <script src="<?php echo base_url(); ?>ckfinder_php8.0/ckfinder.js"></script>
    <?php }?>
    <?php if(5.6 <= floatval(phpversion())) {?>
      <script src="<?php echo base_url(); ?>ckfinder_php5.6/ckfinder.js"></script>
    <?php }?>

    <!-- <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script> -->
    <script src="<?php echo base_url(); ?>public/ckeditor/ckeditor.js"></script>

    <script>
      var editor = CKEDITOR.replace('textarea', {
        scayt_autoStartup: true,
        customConfig: '<?php echo base_url('ckfinder/config.js') ?>',
        toolbarStartupExpanded: false,
        height: '400px',
      });
      CKFinder.setupCKEditor(editor, '<?php echo base_url('ckfinder/') ?>');
    </script>

    <!-- <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/vendor/jquery.ui.widget.js");?>"></script>
    <script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/jquery.iframe-transport.js");?>"></script>
    <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/jquery.fileupload.js");?>"></script>
    <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/jquery.fileupload-process.js");?>"></script>
    <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/jquery.fileupload-image.js");?>"></script>
    <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/jquery.fileupload-audio.js");?>"></script>
    <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/jquery.fileupload-video.js");?>"></script>
    <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/jquery.fileupload-validate.js");?>"></script>
    <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/jquery.fileupload-ui.js");?>"></script>
    <script src="<?php echo base_url("public/jQuery-File-Upload-master/js/demo.js");?>"></script> -->
</body>
</html>