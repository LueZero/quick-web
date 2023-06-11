<?php $this->load->view('backstage/layouts/header'); ?>

<input type="hidden" id="manufacturer-id" value="<?php echo $this->manufacturerId; ?>">

<div class="mailbox-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="row">
                            <!-- <div class="mailbox-pagination">
                                <div class="btn-group ib-btn-gp active-hook mail-btn-sd mg-b-15">
                                    <button class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i></button>
                                    <button class="btn btn-default btn-sm"><i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div> -->
                        </div>
                        <div class="table-responsive ib-tb">
                            <table class="table table-hover table-mailbox">
                                <thead>
                                    <tr>
                                        <th scope="col">標題</th>
                                        <th scope="col">新增時間</th>
                                        <th scope="col">更新時間</th>
                                        <th scope="col">編輯</th>
                                        <th scope="col">刪除</th>
                                    </tr>
                                </thead>
                                <tbody id="list">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('backstage/layouts/footer'); ?>

<script>
    let manufacturerId = $('#manufacturer-id').val();
    let tbodyElement = $('#list');
    $.ajax({
        method: 'GET',
        url: '<?php echo base_url('/api/news/'); ?>' + manufacturerId,
        contentType: "application/json;charset=utf-8",
        dataType: "json",
        success: function(response) {
            if (response.status === 200) {

                for (let index = 0; index < response.result.length; index++) {
                    const result = response.result[index];

                    tbodyElement.append('<tr class="unread">' +
                        '<td scope="row">' + result.title + '</td>' +
                        '<td scope="row">' + result.created_at + '</td>' +
                        '<td scope="row">' + (result.updated_at === null ? '' : result.updated_at) + '</td>' +
                        '<td scope="row">' + '<a href="<?php echo base_url('/backstage/news/'); ?>' + result.id + '"><button type="button" class="btn btn-primary ' + result.id + '">編輯</button></a>' + '</td>' +
                        '<td scope="row">' + '<button type="button" class="btn btn-danger delete" data-id="'+ result.id +'">刪除</button>' + '</td>' +
                        '</tr>');
                }
            }
        },
        error: function(error, ajaxOptions, thrownError) {
            console.log(error.status);
            console.log(error);
            alert('error.')
        }
    });


    $(document).on('click', '.delete', function() {
        let id = $(this).attr('data-id');
        $.ajax({
            method: 'DELETE',
            url: '<?php echo base_url('/api/news/'); ?>'+id + '/' + manufacturerId,
            contentType: "application/json;charset=utf-8",
            dataType: "json",
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
</script>