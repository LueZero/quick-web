<?php $this->view("backstage/fixed/casesone/header.php");?>

    <link rel="stylesheet" href="<?php echo base_url("/public/casesone/dropzone/dropzone.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("/public/casesone/dropzone/basic.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("/public/kiaalap-master/css/summernote/summernote.css");?>">

    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description" class="JhengHei">模版設定</a></li>
                        </ul>
                        <div class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="pro-ad">
                                                <div class="form-group">
                                                    <label class="JhengHei">模版選擇</label>
                                                    <select name="slecttype" class="form-control" id="SelectTemplate">
                                                        <option value="">請選擇</option>
                                                        <?php foreach ($Template as $key => $v) { ?>
                                                            <option value="<?php echo $v["id"];?>"><?php echo $v["template"];?></option>
                                                        <?php } ?>
                                                    </select> 
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

    <!-- 區塊選擇-->
    <div class="single-pro-review-area mt-t-30 mg-b-15" id="BlockView" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description" class="JhengHei">區塊選擇</a></li>
                        </ul>
                        <div class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="pro-ad">
                                                <div class="form-group">
                                                    <label class="JhengHei">區塊選擇</label>
                                                    <select name="slecttype" id="SelectBlock" class="form-control">
                                                        <option value="0" block-type="0">請選擇</option>
                                                    </select> 
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

    <!-- 區塊編輯 -->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description" class="JhengHei">區塊編輯</a></li>
                        </ul>
                        <!-- <button type="button" id="AddEdit" style="float:right;" class="btn btn-primary waves-effect waves-light">增加</button> -->
                        <div class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="EidtView">
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url("/public/kiaalap-master/js/vendor/jquery-1.12.4.min.js"); ?>"></script>
    <script src="<?php echo base_url("/public/casesone/dropzone/dropzone.js");?>"></script>
    <script>
        
        // 選擇模版
        $("#SelectTemplate").change(function () {
           var template_id = $(this).val();
            $("#SelectBlock").find("option").each(function() {
                if( $(this).val() != "0" ){
                    $(this).remove();
                }
            });
            $("#EidtView").find(".EidtViewlist").remove();
           $.ajax({
                type: "GET", //傳送方式
                url: "<?php echo site_url("/backstage/casesone/ajax/get_blocks"); ?>", //傳送目的地
                dataType: "json", //資料格式
                data: { //傳送資料
                    template_id: template_id,
                },
                success: function(data) {
                    for (let index = 0; index < data.length; index++) {
                      let block = data[index]["block"];
                      let id = data[index]["id"];
                      let block_type = data[index]["block_type"];
                      var template_id = data[index]["template_id"];
                      $("#SelectBlock").each(function() {
                         $(this).append("<option block-type="+block_type+" template-id="+template_id+"  value="+id+">"+block+"</option>");
                      })
                    }
                },
                error: function(jqXHR) {
                  alert("系統異常");
                }
            });
        });

        // 選擇區塊
        $("#SelectBlock").change( function () {
            
            $(".EidtViewlist").remove();
            var block_id = $(this).val();
            var template_id = $(this).find(":selected").attr("template-id"); 
            var block_type = $(this).find(":selected").attr("block-type");

            if( block_id != 0 ){
                
                if(block_type == 4){
                    
                    // style="border:2px dashed #0087F7"
                    html = '<div class="review-content-section EidtViewlist">'+
                    '<div class="form-group"><button type="button" style="float:right;" template-id='+block_id+' block_type='+block_id+' class="btn btn-primary waves-effect waves-light blockpost">新增</button><br></div>'+
                    '<div class="form-group">'+
                        '<input type="hidden" class="block_int" name="block_int" value='+block_id+'>' +
                        '<div id="texts"></div>'+
                    '</div>' + 
                    '<div class="dropzone" id="dropzone'+block_id+'" style="border:0px;">'+
                        '<div class="fallback">' +
                            '<input name="file" type="file" multiple />' +
                        '</div>' + 
                    '</div>';

                }else if(block_type == 3){
                    
                    html = '<div class="review-content-section EidtViewlist">'+
                        '<div class="form-group">'+
                            '<input type="hidden" class="block_int" name="block_int" value='+block_id+'>' +
                            '<button type="button" style="float:right;" template-id='+block_id+' block_type='+block_id+' class="btn btn-primary waves-effect waves-light blockpost">新增</button>'+
                            '<input type="color" id="colorpicker"  class="form-control">'+
                        '</div>' + 
                        '<div class="dropzone" id="dropzone'+block_id+'" style="border:0px;">'+
                            '<div class="fallback">' +
                                '<input name="file" type="file" multiple />' +
                            '</div>' + 
                        '</div>' +
                    '</div>';

                }else if(block_type == 2){

                    html = '<div class="review-content-section EidtViewlist">'+
                        '<div class="dropzone" id="dropzone'+block_id+'" style="border:0px;">'+
                            '<div class="fallback">' +
                                '<input name="file" type="file" multiple />' +
                            '</div>' + 
                        '</div>' + 
                    '</div>';

                }else if(block_type == 1){

                    // style="border-top: 0px solid;;border-bottom: 0px solid;height:120px;resize:none;"
                    html = '<div class="review-content-section EidtViewlist">'+
                        '<div class="form-group">'+
                            '<input type="hidden" class="block_int" name="block_int" value='+block_id+'>' +
                            '<button type="button" style="float:right;" template-id='+block_id+' block_type='+block_id+' class="btn btn-primary waves-effect waves-light blockpost">新增</button>'+
                            '<textarea placeholder="填寫相關介紹" class="form-control" name="texts"></textarea>'+
                        '</div>' + 
                    '</div>';


                }else if(block_type == 5){
                    
                    // style="border-top: 0px solid;;border-bottom: 0px solid;height:120px;resize:none;"
                    html = '<div class="review-content-section EidtViewlist">'+
                        '<div class="form-group">'+
                            '<input type="hidden" class="block_int" name="block_int" value='+block_id+'>' +
                            '<button type="button" style="float:right;" template-id='+block_id+' block_type='+block_id+' class="btn btn-primary waves-effect waves-light blockpost">新增</button>'+
                            '<input placeholder="插入youtube影片網址" class="form-control" name="texts">'+
                        '</div>' + 
                    '</div>';

                }else if(block_type == 8){
                    
                    html = '<div class="review-content-section EidtViewlist">'+
                    '<div class="form-group"><button type="button" style="float:right;" template-id='+block_id+' block_type='+block_id+' class="btn btn-primary waves-effect waves-light blockpost">新增</button><br></div>'+
                    '<div class="form-group">'+
                        '<input type="hidden" class="block_int" name="block_int" value='+block_id+'>' +
                        '<div id="texts"></div>'+
                    '</div>' + 
                    '<div class="dropzone" id="dropzone'+block_id+'" style="border:0px;">'+
                        '<div class="fallback">' +
                            '<input name="file" type="file" multiple />' +
                        '</div>' + 
                    '</div>'
                    
                }else{

                    return false;
                
                }

                $("#EidtView").append(html);
                Dropzone.autoDiscover = false;
                check = ["1","5","6","7"];
                /**
                 區塊作用:
                 1純文字
                 2圖片
                 3圖片+背景底色 
                 4圖片+文字 
                 5影片網址
                 6影片網址+顏色 
                 7影片網址+文字
                 8(輪播器)圖片+(2N)圖片+文字
                 */

                $('#texts').summernote({
                    height: 200,
                    fontNames: [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                    'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 
                    'Sacramento','標楷體','新細明體','微軟正黑體'],
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
                if(check.includes(block_type) != true){
                    if(block_type == 3){
                        var maxFiles = 2;
                        var parallelUploads = 2;
                    }else{
                        var maxFiles = 8;
                        var parallelUploads = 8;
                    }
                    var myDropzone = new Dropzone("#dropzone"+block_id, {
                        url: "<?php echo site_url("/backstage/casesone/web_management/blockset_post");?>",
                        method:"POST",
                        maxFiles:maxFiles,
                        autoProcessQueue: false,
                        maxFilesize: 20,
                        acceptedFiles: ".jpg,.gif,.png,.jpeg",
                        uploadMultiple:true,//關鍵
                        parallelUploads: parallelUploads,
                        dictDefaultMessage:'圖片上傳，拖動文件至此或者點擊上傳',
                        dictMaxFilesExceeded: "超過上傳送文件數:"+maxFiles,
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
                    $(".blockpost").on('click',function(e){
                        e.preventDefault();
                        if(block_type == 8){
                            if(Number(myDropzone.files.length) < 4){
                                alert("請至少要四張照片");
                                return;
                            }
                        }
                        var text = ( typeof($('#texts').summernote('code')) == "object" ? "" : $('#texts').summernote('code') );
                        var color = ( $("#colorpicker").val() == undefined ? "" :  $("#colorpicker").val() );
                        myDropzone.options.params = {
                            template_id : template_id,
                            block_id : block_id,
                            block_type : block_type,
                            text : text,
                            color: color,
                        };
                        myDropzone.processQueue();
                    });  
                }else{
                    $(".blockpost").on('click',function(e){
                        var text =  ( $("input[name=texts]").val() == undefined ? "" :  $("input[name=texts]").val() );
                        var color = ( $("#colorpicker").val() == undefined ? "" :  $("#colorpicker").val() );
                        $.ajax({
                            type: "POST", //傳送方式
                            url: "<?php echo site_url("/backstage/casesone/web_management/blockset_post");?>", //傳送目的地
                            dataType: "json", //資料格式
                            data: { //傳送資料
                                template_id : template_id,
                                block_id : block_id,
                                block_type : block_type,
                                text : text,
                                color: color,
                            },
                            success: function(data) {
                               location.reload();
                            }
                        });
                    }); 
                }
            }
        });
    </script>

<?php $this->view("backstage/fixed/casesone/bottom.php");?>