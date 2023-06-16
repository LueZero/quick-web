<?php $this->load->view('backstage/layouts/header'); ?>

<input type="hidden" id="id" value="<?php echo $news->id; ?>">
<input type="hidden" id="manufacturer-id" value="<?php echo $this->manufacturerId; ?>">

<div class="product-sales-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="product-sales-chart">
                    <div class="row">
                        <div class="col-12">
                            <div class="caption pro-sl-hd">
                                <label class="control-label" for="title">標題</label>
                                <input type="email" placeholder="請輸入標題" required name="title" id="title" class="form-control" value="<?php echo $news->title; ?>">
                                <br>
                                <label class="control-label" for="header-imag">標題圖片</label>
                                <input type="button" value="開啟圖片區" onclick="browseServer();" />
                                <input type="text" size="48" name="header-image" id="header-image" value="<?php echo $news->header_image; ?>" />
                                <br>
                                <label class="control-label" for="content">內容</label>
                                <textarea name="content" id="content" required><?php echo $news->content; ?></textarea>
                                <button class="btn btn-success btn-block loginbtn" id="save-news">保存</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('backstage/layouts/footer'); ?>

<script>
    $('#save-news').click(function() {
        let title = $('#title').val();
        let content = CKEDITOR.instances['content'].getData();
        let id = $('#id').val();
        let manufacturerId = $('#manufacturer-id').val();
        let headerImage = $('#header-image').val();
        let data = {};

        if (title == '') {
            alert('please enter a password.');
            return;
        }

        if (content == '') {
            alert('please enter a content.');
            return;
        }

        data['title'] = title;
        data['content'] = content;
        data['header_image'] = headerImage;

        $.ajax({
            method: 'PUT',
            url: '<?php echo base_url('/api/news/'); ?>' + id + '/' + manufacturerId,
            contentType: "application/json;charset=utf-8",
            dataType: "json",
            data: JSON.stringify(data),
            success: function(response) {
                if (response.status === 200) {
                    alert(response.message);
                    location.reload();
                }
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log(error.status);
                console.log(error);
                alert('error.')
            }
        });
    });

    function browseServer() {
        CKFinder.config({
            chooseFiles: true,
            onInit: function( finder ) {
                finder.on('files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    document.getElementById('header-image').value = file.getUrl();
                } );
                finder.on('file:choose:resizedImage', function( evt ) {
                    document.getElementById('header-image').value = evt.data.resizedUrl;
                } );
            }
        });
        CKFinder.popup();
    }
</script>