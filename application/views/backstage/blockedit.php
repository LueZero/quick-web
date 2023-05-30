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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>模版</th>
                                            <th>區塊</th>
                                            <th>編輯</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($Display_Management_Block_Style as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $key+1; ?></td>
                                                <td><?php echo $value["template"]; ?></td>
                                                <td><?php echo $value["block"]; ?></td>
                                                <td>
                                                    <a href="<?php echo site_url("/backstage/casesone/web_management/blockedit/" .$value["template_id"]."/". $value["block_id"]);?>">
                                                    <button class="btn btn-primary waves-effect waves-light">編輯</button>
                                                </a>
                                                </td>
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
<?php $this->view("backstage/fixed/casesone/bottom.php");?>