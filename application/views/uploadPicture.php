
<?php $session = $this->session->userdata('loginSession') ; ?>
<?php if (!$session){{ redirect('pointer/loginPointer') ;} } ?>

<div class=" container" >
    <div class=" row">
        <div class=" col-sm-3"></div>
        <div class=" col-sm-6">
            <div class="well">
            <div class=" panel panel-primary">
                <div class=" panel-heading" align="center"> Upload your picture</div>
                <div class=" panel-body">
                    <form method="post" action="<?php echo base_url('newController/pictureUpload') ?>" enctype="multipart/form-data" >
                        <div class=" form-group">
                            <label class="">upload the picture</label>
                            <input type="file" class=" form-control" name="uploadFile" size="300">
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      