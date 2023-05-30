<?php $this->view("backstage/fixed/casesone/header.php");?>

    <link rel="stylesheet" href="<?php echo base_url("/public/casesone/dropzone/dropzone.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("/public/casesone/dropzone/basic.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/summernote/summernote.css");?>">

    <script src="<?php echo base_url("/public/kiaalap-master/js/vendor/jquery-1.12.4.min.js"); ?>"></script>
    <script src="<?php echo base_url("/public/casesone/dropzone/dropzone.js");?>"></script>
    
    <?php if(!empty($Display_Management_Block_Style)){ ?>

    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="sparkline8-graph">
                            <div class="static-table-list">
                                <?php foreach( $Display_Management_Block_Style as $key=>$Management_Block_Style){ ?>
                                    
                                    <?php if($Management_Block_Style[0]["block_type"] == 3){ ?>

                                        <div class="review-content-section EidtViewlist">
                                            <div class="form-group">
                                                <label class="JhengHei"><?php echo $Management_Block_Style[0]["block"].' - '. $Management_Block_Style[0]["block_int"]; ?></label>
                                                <button type="button" style="float:right;"
                                                class="btn btn-primary waves-effect waves-light block_update<?php echo $Management_Block_Style[0]["block_int"];?>">
                                                    更新
                                                </button>
                                                <button type="button" style="float:right;"
                                                class="btn btn-danger block_delete<?php echo $Management_Block_Style[0]["block_int"];?>">
                                                    刪除
                                                </button>
                                                <?php foreach ($Management_Block_Style as $int => $value) { ?>
                                                    <?php if( $value["style"] == "color"){ ?>  
                                                     <input type="color" id="colorpicker<?php echo $Management_Block_Style[0]["block_int"];?>" 
                                                      class="form-control" value="<?php echo $value["html"]; ?>">
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <div class="dropzone" id="dropzone<?php echo $Management_Block_Style[0]["block_int"];?>" style="border:0px;">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </div>  
                                        </div>
                                        
                                            <script>

                                                $(function(){

                                                    var id = '<?php echo $Management_Block_Style[0]["id"];?>';
                                                    var block_int = '<?php echo $Management_Block_Style[0]["block_int"];?>';
                                                    var template_id = '<?php echo $Management_Block_Style[0]["template_id"];?>';
                                                    var block_id = '<?php echo $Management_Block_Style[0]["block_id"];?>';
                                                    var block_type = '<?php echo $Management_Block_Style[0]["block_type"];?>';

                                                    $('#texts'+block_int).summernote({
                                                        height: 200,
                                                        fontNames: [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
                                                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact',
                                                        'Lucida Grande', 'Sacramento','標楷體','新細明體','微軟正黑體'],
                                                        toolbar: [
                                                            ['style', ['style']],
                                                            ['font', ['bold', 'italic', 'underline', 'clear']],
                                                            ['fontsize', ['fontsize']],
                                                            ['fontname', ['fontname']],
                                                            ['color', ['color']],
                                                            ['para', ['ul', 'ol', 'paragraph']],
                                                            ['height', ['height']],
                                                            ['view', ['fullscreen', 'codeview']],
                                                        ],
                                                    });

                                                    var image = JSON.parse('<?php echo json_encode($image);?>')[block_int];

                                                    Dropzone.autoDiscover = false;

                                                    var DropzoneS = new Dropzone("#dropzone"+block_int, {
                                                        url: "<?php echo site_url("/backstage/casesone/web_management/blockedit_post");?>",
                                                        method:"POST",
                                                        maxFiles:2,
                                                        autoProcessQueue: false,
                                                        maxFilesize: 20,
                                                        acceptedFiles: ".jpg,.gif,.png,.jpeg",
                                                        uploadMultiple:true,//關鍵
                                                        parallelUploads: 2,
                                                        dictDefaultMessage:'圖片上傳，拖動文件至此或者點擊上傳',
                                                        dictMaxFilesExceeded: "您最多只能上傳2個文件！",
                                                        dictResponseError: '文件上傳失敗!',
                                                        dictInvalidFileType: "文件類型只能是*.jpg,*.gif,*.png,*.jpeg。",
                                                        dictFallbackMessage:"瀏覽器不受支持",
                                                        dictFileTooBig:"文件過大上傳文件最大支持",
                                                        dictRemoveLinks: "刪除",
                                                        timeout: 180000,
                                                        dictCancelUpload: "取消",
                                                        init:function(){
                                                            this.on("success",function(file,data){
                                                                console.log("成功");
                                                                location.reload();
                                                            });
                                                            this.on("error",function (file,data) {
                                                                console.log('fail');
                                                                alert("系統錯誤");
                                                            });
                                                        }
                                                    });

                                                    image.forEach(function(val){
                                                        imgUrl = "<?php echo base_url("/public/uploads/");?>"
                                                        DropzoneS.options.addedfile.call(DropzoneS, val);
                                                        DropzoneS.options.thumbnail.call(DropzoneS, val, imgUrl+val.name)
                                                    });

                                                    $(".block_delete"+block_int).on("click",function(e) {
                                                        e.preventDefault();
                                                        var data = {
                                                            id : id,
                                                            template_id : template_id,
                                                            block_id : block_id,
                                                            block_int : block_int,
                                                            type : "刪除",
                                                        };
                                                        $.ajax({
                                                            type : "POST", //傳送方式
                                                            url : "<?php echo site_url("/backstage/casesone/web_management/blockedit_post");?>", //傳送目的地
                                                            dataType : "json", //資料格式
                                                            data : data,
                                                            success: function(data) {
                                                                if(data.status == 200){
                                                                    alert("刪除成功");
                                                                    location.reload();
                                                                }
                                                            },
                                                            error: function(jqXHR) {
                                                               
                                                            }
                                                        })
                                                    });

                                                    $(".block_update"+block_int).on("click",function(e) {
                                                        e.preventDefault();
                                                        if(block_type == 3){
                                                            var html = ( $("#colorpicker"+block_int).val() == undefined ? "" :  $("#colorpicker"+block_int).val() );
                                                        }else if(block_type  == 4){
                                                            var html = ( typeof($('#texts'+block_int).summernote('code')) == "object" ? "" : $('#texts'+block_int).summernote('code') );
                                                        }else if(block_type  == 7){
                                                            var html = "";
                                                        }
                                                        if( DropzoneS.files.length == 0 ){
                                                            var data = {
                                                                id : id,
                                                                template_id : template_id,
                                                                block_id : block_id,
                                                                block_int : block_int,
                                                                block_type : block_type,
                                                                file : DropzoneS.files.length,
                                                                html : html,
                                                                type : "更新",
                                                            };
                                                            return ajaxs(data);
                                                        }else{
                                                            DropzoneS.options.params = {
                                                                id : id,
                                                                template_id : template_id,
                                                                block_id : block_id,
                                                                block_int : block_int,
                                                                block_type : block_type,
                                                                file : DropzoneS.files.length,
                                                                html : html,
                                                                type : "更新",
                                                            };
                                                            DropzoneS.processQueue();
                                                        }
                                                    })
                                                });

                                                function ajaxs(data) {
                                                    $.ajax({
                                                        type : "POST", //傳送方式
                                                        url : "<?php echo site_url("/backstage/casesone/web_management/blockedit_post");?>", //傳送目的地
                                                        dataType : "json", //資料格式
                                                        data : data,
                                                        success: function(data) {
                                                            if(data.status == 200){
                                                                alert("更新成功");
                                                                location.reload();
                                                            }
                                                        },
                                                        error: function(jqXHR) {
                                                            
                                                        }
                                                    })
                                                }

                                            </script>


                                    <?php }else if($Management_Block_Style[0]["block_type"] == 4 || $Management_Block_Style[0]["block_type"] == 8){ ?>

                                        <div class="review-content-section EidtViewlist" >
                                                <div class="form-group">
                                                    <label class="JhengHei"><?php echo $Management_Block_Style[0]["block"].' - '. $Management_Block_Style[0]["block_int"]; ?></label>
                                                    <button type="button" style="float:right;"
                                                    class="btn btn-primary waves-effect waves-light block_update<?php echo $Management_Block_Style[0]["block_int"];?>">
                                                        更新
                                                    </button>
                                                    <button type="button" style="float:right;"
                                                    class="btn btn-danger block_delete<?php echo $Management_Block_Style[0]["block_int"];?>">
                                                        刪除
                                                    </button>
                                                </div>
                                                <div class="form-group">
                                                    <div id="texts<?php echo $Management_Block_Style[0]["block_int"]; ?>" class="texts">
                                                    <?php foreach ($Management_Block_Style as $int => $value) { ?>
                                                        <?php if( $value["style"] == "text"){ ?>  
                                                            <?php echo $value["html"]; ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="dropzone" id="dropzone<?php echo $Management_Block_Style[0]["block_int"];?>" style="border:0px;">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                                                </div>
                                               
                                            <script>

                                                $(function(){

                                                    var id = '<?php echo $Management_Block_Style[0]["id"];?>';
                                                    var block_int = '<?php echo $Management_Block_Style[0]["block_int"];?>';
                                                    var template_id = '<?php echo $Management_Block_Style[0]["template_id"];?>';
                                                    var block_id = '<?php echo $Management_Block_Style[0]["block_id"];?>';
                                                    var block_type = '<?php echo $Management_Block_Style[0]["block_type"];?>';
                                                                                                        
                                                    $('#texts<?php echo $Management_Block_Style[0]["block_int"];?>').summernote({
                                                        height: 200,
                                                        fontNames: [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
                                                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact',
                                                        'Lucida Grande', 'Sacramento','標楷體','新細明體','微軟正黑體'],
                                                        toolbar: [
                                                            ['style', ['style']],
                                                            ['font', ['bold', 'italic', 'underline', 'clear']],
                                                            ['fontsize', ['fontsize']],
                                                            ['fontname', ['fontname']],
                                                            ['color', ['color']],
                                                            ['para', ['ul', 'ol', 'paragraph']],
                                                            ['height', ['height']],
                                                            ['view', ['fullscreen', 'codeview']],
                                                        ],
                                                    });

                                                    var image = JSON.parse('<?php echo json_encode($image);?>')[block_int];
                                                    Dropzone.autoDiscover = false;

                                                    var DropzoneS = new Dropzone("#dropzone<?php echo $Management_Block_Style[0]["block_int"];?>", {
                                                        url: "<?php echo site_url("/backstage/casesone/web_management/blockedit_post");?>",
                                                        method:"POST",
                                                        maxFiles:8,
                                                        autoProcessQueue: false,
                                                        maxFilesize: 20,
                                                        acceptedFiles: ".jpg,.gif,.png,.jpeg",
                                                        uploadMultiple:true,//關鍵
                                                        parallelUploads: 8,
                                                        dictDefaultMessage:'圖片上傳，拖動文件至此或者點擊上傳',
                                                        dictMaxFilesExceeded: "您最多只能上傳8個文件！",
                                                        dictResponseError: '文件上傳失敗!',
                                                        dictInvalidFileType: "文件類型只能是*.jpg,*.gif,*.png,*.jpeg。",
                                                        dictFallbackMessage:"瀏覽器不受支持",
                                                        dictFileTooBig:"文件過大上傳文件最大支持",
                                                        dictRemoveLinks: "刪除",
                                                        timeout: 180000,
                                                        dictCancelUpload: "取消",
                                                        init:function(){
                                                            this.on("success",function(file,data){
                                                                console.log("成功");
                                                                location.reload();
                                                            });
                                                            this.on("error",function (file,data) {
                                                                console.log('fail');
                                                                alert("系統錯誤");
                                                            });
                                                        }
                                                    });
                                                    
                                                    image.forEach(function(val){
                                                        imgUrl = "<?php echo base_url("/public/uploads/");?>"
                                                        DropzoneS.options.addedfile.call(DropzoneS, val);
                                                        DropzoneS.options.thumbnail.call(DropzoneS, val, imgUrl+val.name)
                                                    });

                                                    $(".block_delete"+block_int).on("click",function(e) {
                                                        e.preventDefault();
                                                        var data = {
                                                            id : id,
                                                            template_id : template_id,
                                                            block_id : block_id,
                                                            block_int : block_int,
                                                            type : "刪除",
                                                        };

                                                        $.ajax({
                                                            type : "POST", //傳送方式
                                                            url : "<?php echo site_url("/backstage/casesone/web_management/blockedit_post");?>", //傳送目的地
                                                            dataType : "json", //資料格式
                                                            data : data,
                                                            success: function(data) {
                                                                if(data.status == 200){
                                                                    alert("刪除成功");
                                                                    location.reload();
                                                                }
                                                            },
                                                            error: function(jqXHR) {
                                                               
                                                            }
                                                        })
                                                    });

                                                    $(".block_update"+block_int).on("click",function(e) {
                                                        e.preventDefault();
                                                        if(block_type == 3){
                                                            var html = ( $("#colorpicker"+block_int).val() == undefined ? "" :  $("#colorpicker"+block_int).val() );
                                                        }else if(block_type  == 4){
                                                            var html = ( typeof($('#texts'+block_int).summernote('code')) == "object" ? "" : $('#texts'+block_int).summernote('code') );
                                                        }else if(block_type  == 8){
                                                            var html = ( typeof($('#texts'+block_int).summernote('code')) == "object" ? "" : $('#texts'+block_int).summernote('code') );
                                                            if(Number(DropzoneS.files.length) != 0){
                                                                if(Number(DropzoneS.files.length) < 4){
                                                                    alert("請至少要四張照片");
                                                                    return;
                                                                }
                                                            }
                                                        }else if(block_type  == 7){
                                                            var html = "";
                                                        }
                                                        if( DropzoneS.files.length == 0 ){
                                                            var data = {
                                                                id : id,
                                                                template_id : template_id,
                                                                block_id : block_id,
                                                                block_int : block_int,
                                                                block_type : block_type,
                                                                file : DropzoneS.files.length,
                                                                html : html,
                                                                type : "更新",
                                                            };
                                                            return ajaxs(data);
                                                        }else{
                                                            DropzoneS.options.params = {
                                                                id : id,
                                                                template_id : template_id,
                                                                block_id : block_id,
                                                                block_int : block_int,
                                                                block_type : block_type,
                                                                file : DropzoneS.files.length,
                                                                html : html,
                                                                type : "更新",
                                                            };
                                                            DropzoneS.processQueue();
                                                        }
                                                    })
                                                });
                                                
                                                function ajaxs(data) {
                                                    $.ajax({
                                                        type : "POST", //傳送方式
                                                        url : "<?php echo site_url("/backstage/casesone/web_management/blockedit_post");?>", //傳送目的地
                                                        dataType : "json", //資料格式
                                                        data : data,
                                                        success: function(data) {
                                                            if(data.status == 200){
                                                                alert("更新成功");
                                                                location.reload();
                                                            }
                                                        },
                                                        error: function(jqXHR) {
                                                            
                                                        }
                                                    })
                                                }

                                            </script>
                                        </div>

                                    <?php }else if($Management_Block_Style[0]["block_type"] == 5){ ?>

                                        <div class="review-content-section EidtViewlist">
                                            <div class="form-group">
                                                <button type="button" style="float:right;" class="btn btn-primary waves-effect waves-light 
                                                block_update<?php echo $Management_Block_Style[0]["block_int"];?>">
                                                     更新
                                                </button>
                                                <button type="button" style="float:right;"
                                                class="btn btn-danger block_delete<?php echo $Management_Block_Style[0]["block_int"];?>">
                                                    刪除
                                                </button>
                                                <?php foreach ($Management_Block_Style as $int => $value) { ?>
                                                    <input placeholder="插入youtube影片網址" id="texts<?php echo $Management_Block_Style[0]["block_int"];?>"
                                                    class="form-control" value="<?php echo $value["html"];?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <script>
                                            $(function(){

                                                var id = '<?php echo $Management_Block_Style[0]["id"];?>';
                                                var block_int = '<?php echo $Management_Block_Style[0]["block_int"];?>';
                                                var template_id = '<?php echo $Management_Block_Style[0]["template_id"];?>';
                                                var block_id = '<?php echo $Management_Block_Style[0]["block_id"];?>';
                                                var block_type = '<?php echo $Management_Block_Style[0]["block_type"];?>';

                                                $(".block_delete"+block_int).on("click",function(e) {

                                                    e.preventDefault();
                                                    var data = {
                                                        id : id,
                                                        template_id : template_id,
                                                        block_id : block_id,
                                                        block_int : block_int,
                                                        type : "刪除",
                                                    };

                                                    $.ajax({
                                                        type : "POST", //傳送方式
                                                        url : "<?php echo site_url("/backstage/casesone/web_management/blockedit_post");?>", //傳送目的地
                                                        dataType : "json", //資料格式
                                                        data : data,
                                                        success: function(data) {
                                                            if(data.status == 200){
                                                                alert("刪除成功");
                                                                location.reload();
                                                            }
                                                        },
                                                        error: function(jqXHR) {
                                                        
                                                        }
                                                    })
                                                });

                                                $(".block_update"+block_int).on("click",function(e) {
                                                    e.preventDefault();
                                                    if(block_type == 3){
                                                        var html = ($("#colorpicker"+block_int).val() == undefined ? "" :  $("#colorpicker"+block_int).val());
                                                    }else if(block_type  == 4){
                                                        var html = ( typeof($('#texts'+block_int).summernote('code')) == "object" ? "" : $('#texts'+block_int).summernote('code') );
                                                    }else if(block_type  == 5){
                                                        var html = ($('#texts'+block_int).val() == undefined ? "" : $('#texts'+block_int).val());
                                                    }else{
                                                        var html = "";
                                                    }
                                                    
                                                    var data = {
                                                        id : id,
                                                        template_id : template_id,
                                                        block_id : block_id,
                                                        block_int : block_int,
                                                        block_type : block_type,
                                                        file : 0,
                                                        html : html,
                                                        type : "更新",
                                                    };
                                                    return ajaxs(data);
                                                });

                                                function ajaxs(data) {
                                                    $.ajax({
                                                        type : "POST", //傳送方式
                                                        url : "<?php echo site_url("/backstage/casesone/web_management/blockedit_post");?>", //傳送目的地
                                                        dataType : "json", //資料格式
                                                        data : data,
                                                        success: function(data) {
                                                            if(data.status == 200){
                                                                alert("更新成功");
                                                                location.reload();
                                                            }
                                                        },
                                                        error: function(jqXHR) {
                                                            
                                                        }
                                                    })
                                                }
                                            });

                                        </script>
                                    <?php } ?>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>      

<?php $this->view("backstage/fixed/casesone/bottom.php");?>