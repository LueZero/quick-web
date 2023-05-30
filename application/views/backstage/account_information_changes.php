<?php $this->view("backstage/fixed/casesone/header.php");?>

        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description" class="JhengHei">客戶資料</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="<?php echo site_url("/backstage/casesone/member_management/account_information_changesing"); ?>" class="dropzone dropzone-custom needsclick add-professors" method="POST">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label class="JhengHei"><span style="color:red">(*無法修改)</span>帳號</label>
                                                                    <input type="text" class="form-control" value="<?php echo $Backstage_Member["account"];?>" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="JhengHei">密碼</label>
                                                                    <input name="password" type="password" class="form-control" value="<?php echo $Backstage_Member["password"];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="JhengHei">公司名稱</label>
                                                                    <input name="company" type="text" class="form-control" value="<?php echo $Backstage_Member["company"];?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label class="JhengHei">負責人</label>
                                                                    <input name="principal" type="text" class="form-control" value="<?php echo $Backstage_Member["principal"];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="JhengHei">電話</label>
                                                                    <input name="phone" type="text" class="form-control" value="<?php echo $Backstage_Member["phone"];?>">
                                                                </div>
                                                                <div class="form-group">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">更新</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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

<?php $this->view("backstage/fixed/casesone/bottom.php");?>