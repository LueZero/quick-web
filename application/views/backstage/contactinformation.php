<?php $this->view("backstage/fixed/casesone/header.php");?>
    <link rel="stylesheet" href="<?php echo base_url("/public/casesone/dropzone/dropzone.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("/public/casesone/dropzone/basic.css");?>" />
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="sparkline8-graph">
                            <div class="static-table-list">
                                <table class="table" style="table-layout: fixed;word-wrap: break-word;border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>姓名</th>
                                            <th>電話</th>
                                            <th>電子信箱</th>
                                            <th>縣市</th>
                                            <th>市區</th>
                                            <th>郵遞區號</th>
                                            <th>備註</th>
                                            <th>聯繫狀態</th>
                                            <th>聯絡日期</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($reservation as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $key+1; ?></td>
                                                <td><?php echo $value["name"]; ?></td>
                                                <td><?php echo $value["phone"]; ?></td>
                                                <td><?php echo $value["email"]; ?></td>
                                                <td><?php echo $value["county"]; ?></td>
                                                <td><?php echo $value["area"]; ?></td>
                                                <td><?php echo $value["zipcode"]; ?></td>
                                                <td>
                                                    <button class="look" data-id="<?php echo $value["id"];?>" data-text="<?php echo $value["remarks"];?>">備註查看</button>
                                                </td>

                                                <?php if( $value["status"] == 0 ){ ?>
                                                    <td><button class="update" data-id="<?php echo $value["id"];?>" status=1>尚未聯絡</button></td>
                                                <?php }else if($value["status"] == 1){ ?>
                                                    <td><button class="update" data-id="<?php echo $value["id"];?>" status=0>已經聯絡</button></td>
                                                <?php } ?>
                                                
                                                <td><?php echo $value["connection_date"]; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="<?php echo base_url("/public/kiaalap-master/js/vendor/jquery-1.12.4.min.js"); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $(".update").on("click",function () {
            var id = $(this).attr("data-id");
            var status = $(this).attr("status");
            $.ajax({
                type: "POST", //傳送方式
                url: "<?php echo site_url("/backstage/casesone/customer_service_management/contactinformation_update");?>", //傳送目的地
                dataType: "json", //資料格式
                data: { //傳送資料
                    id : id,
                    status : status,
                    type : "聯絡狀態更改"
                },
                success: function(data) {
                    location.reload();
               }
            });
        });
        var Globalid = null;
        $(".look").click(function(){
            var id = $(this).attr("data-id");
            Globalid = id;
            var text = $(this).attr("data-text");
            var html = '<textarea id="remarks'+id+'" class="remarks" type="text" data-id="'+id+'" name="remarks">'+text+'</textarea>';
            Swal.fire({
                html:html,
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:"確認",
                cancelButtonText:"關閉",
                cancelButtonAriaLabel: 'Thumbs down'
            }).then((result) => {
                var remarks = $("#remarks"+Globalid).val();
                console.log($("#remarks"+Globalid),remarks);
                $.ajax({
                    type: "POST", //傳送方式
                    url: "<?php echo site_url("/backstage/casesone/customer_service_management/contactinformation_update");?>", //傳送目的地
                    dataType: "json", //資料格式
                    data: { //傳送資料
                        id : Globalid,
                        remarks : remarks,
                        type : "備註狀態更改"
                    },
                    success: function(data) {
                        location.reload();
                    }
                });
             
            })
        });
    </script>
<?php $this->view("backstage/fixed/casesone/bottom.php");?>