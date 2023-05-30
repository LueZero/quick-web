<?php $this->view("backstage/fixed/casesone/header.php"); ?>
<form action="<?php echo site_url("/backstage/casesone/web_management/basicset_post"); ?>" class="dropzone dropzone-custom needsclick add-professors" method="POST" enctype="multipart/form-data">
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description" class="JhengHei">基礎設定</a></li>
                        </ul>
                        <div style="float:right;">
                            <div class="">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">更新</button>
                            </div>
                        </div>
                        <div class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <div class="row" id="basicset_view">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="JhengHei">網頁標題</label>
                                                            <input name="title"" type=" text" class="form-control" value="<?php echo (empty($Display_Management["title"]) == true ? "" : $Display_Management["title"]); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="JhengHei">Line連結</label>
                                                            <input name="line" type="text" class="form-control" value="<?php echo (empty($Display_Management["line"]) == true ? "" : $Display_Management["line"]); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="JhengHei">FaceBook連結</label>
                                                            <input name="facebook" type="text" class="form-control" value="<?php echo (empty($Display_Management["facebook"]) == true ? "" : $Display_Management["facebook"]); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="JhengHei">GoogleMap地圖</label>
                                                            <input name="googlemap" type="text" class="form-control" value="<?php echo (empty($Display_Management["googlemap"]) == true ? "" : $Display_Management["googlemap"]); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="btn-box">
                                                                <label for="file-upload" class="custom-file-upload">
                                                                    上傳 LOGO 點我
                                                                </label>
                                                                <input id="file-upload" name="file" type="file" id="file" accept="image/*" class="file-ipt" style="display: none;">
                                                            </div>
                                                            <img src="<?php echo (empty($Display_Management["logo"]) == true ? "https://teameowdev.files.wordpress.com/2016/04/avatar-01.png" : base_url("/public/uploads_logo/" . $Display_Management["logo"])) . "?" . date("YmdHis"); ?>" style=" width: 80px; height: 80px; border: 1px solid rgb(143, 59, 59);" class="img" id="img">
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="JhengHei">模版選擇</label>
                                                            <select name="template_id" class="form-control" id="SelectTemplate">
                                                                <option value="">請選擇</option>
                                                                <?php foreach ($Template as $key => $v) { ?>
                                                                    <?php if ($Display_Management["template_id"] == $v["id"]) { ?>
                                                                        <option value="<?php echo $v["id"]; ?>" selected><?php echo $v["template"]; ?></option>
                                                                    <?php } else { ?>
                                                                        <option value="<?php echo $v["id"]; ?>"><?php echo $v["template"]; ?></option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="JhengHei">電話專線</label>
                                                            <input name="dedicatedline" type="text" class="form-control" value="<?php echo (empty($Display_Management["dedicatedline"]) == true ? "" : $Display_Management["dedicatedline"]); ?>">
                                                        </div>

                                                        <!-- <div class="form-group">
                                                                <label class="JhengHei">電話</label>
                                                                <input name="phone" type="text" class="form-control" value="<?php echo (empty($Display_Management[""]) == true ? "" : $Display_Management[""]); ?>">
                                                            </div> -->

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                    <label class="JhengHei">網頁類型</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                                    <div class="bt-df-checkbox pull-left">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="i-checks pull-left">
                                                                                    <label>
                                                                                        <?php if (!empty($Display_Management["typesof"])) { ?>
                                                                                            <input name="typesof" type="radio" value="1" <?php if (!empty($Display_Management["typesof"]) && $Display_Management["typesof"] == 1) {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?>>
                                                                                        <?php } else { ?>
                                                                                            <input name="typesof" type="radio" value="1" checked>
                                                                                        <?php } ?>
                                                                                        <i></i>
                                                                                        無
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="i-checks pull-left">
                                                                                    <label>
                                                                                        <input name="typesof" type="radio" value="2" <?php if (!empty($Display_Management["typesof"]) && $Display_Management["typesof"] == 2) {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?>> <i></i>
                                                                                        建案、房地產
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description" class="JhengHei">Meta 網站介紹</a></li>
                        </ul>
                        <div class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <div class="row" id="basicset_view">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                        <div class="form-group">
                                                            <label class="JhengHei">標題</label>
                                                            <input name="meta_title" type="text" class="form-control" value="<?php echo (empty($Display_Management["meta_title"]) == true ? "" : $Display_Management["meta_title"]); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="JhengHei">關鍵字介紹</label>
                                                            <input name="meta_content" type="text" class="form-control" value="<?php echo (empty($Display_Management["meta_content"]) == true ? "" : $Display_Management["meta_content"]); ?>">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php if (!empty($Display_Management)) {
                $styles = ($Display_Management["typesof"] == 2 ? "style='display:block';" : "style='display:none';");
            } else {
                $styles = "style='display:none';";
            } ?>

            <div class="row building_information" <?php echo $styles; ?>>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description" class="JhengHei">文案基本介紹</a></li>
                        </ul>
                        <div class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <div class="form-group">
                                                    <label class="JhengHei">基地位置</label>
                                                    <input name="baselocation" type="text" class="form-control" value="<?php echo (empty($Display_Building_Information["baselocation"]) == true ? "" : $Display_Building_Information["baselocation"]); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="JhengHei">接待中心</label>
                                                    <input name="receptioncenter" type="password" class="form-control" value="<?php echo (empty($Display_Building_Information["receptioncenter"]) == true ? "" : $Display_Building_Information["receptioncenter"]); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="JhengHei">投資興建</label>
                                                    <input name="Investmentandconstruction" type="text" class="form-control" value="<?php echo (empty($Display_Building_Information["Investmentandconstruction"]) == true ? "" : $Display_Building_Information["Investmentandconstruction"]); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="JhengHei">建築設計</label>
                                                    <input name="architecturaldesign" type="text" class="form-control" value="<?php echo (empty($Display_Building_Information["architecturaldesign"]) == true ? "" : $Display_Building_Information["architecturaldesign"]); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="JhengHei">公設設計</label>
                                                    <input name="publicdesign" type="text" class="form-control" value="<?php echo (empty($Display_Building_Information["publicdesign"]) == true ? "" : $Display_Building_Information["publicdesign"]); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="JhengHei">景觀設計</label>
                                                    <input name="landscapedesign" type="text" class="form-control" value="<?php echo (empty($Display_Building_Information["landscapedesign"]) == true ? "" : $Display_Building_Information["landscapedesign"]); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="JhengHei">建築代銷</label>
                                                    <input name="constructionsales" type="text" class="form-control" value="<?php echo (empty($Display_Building_Information["constructionsales"]) == true ? "" : $Display_Building_Information["constructionsales"]); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="JhengHei">樓層規劃</label>
                                                    <input name="floorplan" type="text" class="form-control" value="<?php echo (empty($Display_Building_Information["floorplan"]) == true ? "" : $Display_Building_Information["floorplan"]); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="JhengHei">貴賓專線</label>
                                                    <input name="viphotline" type="text" class="form-control" value="<?php echo (empty($Display_Building_Information["viphotline"]) == true ? "" : $Display_Building_Information["viphotline"]); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="JhengHei">地坪</label>
                                                    <input name="floor" type="text" class="form-control" value="<?php echo (empty($Display_Building_Information["floor"]) == true ? "" : $Display_Building_Information["floor"]); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url("/public/kiaalap-master/js/vendor/jquery-1.12.4.min.js"); ?>"></script>
<script>
    $("input[name=typesof]").on("click", function() {
        var typesof = $(this).val();
        if (typesof == 2) {
            $(".building_information").show();
        } else {
            $(".building_information").hide();
        }
    });
</script>
<?php $this->view("backstage/fixed/casesone/bottom.php"); ?>