<section class="section text-center category greybg section">
  <div style="width: 80%;margin-left: 10%;">
          <?php if($this->session->flashdata('success') != "") : ?>                
      <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <?=$this->session->flashdata('success');?>
      </div>
      <?php endif; ?>

      <?php if(isset($errors)) : ?>                
      <div class="alert alert-danger" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <?=$errors;?>
      </div>
      <?php endif; ?>

        </div>
  <div class="container greybg">
    <div class="row">
    <!-- Modal Online Advice -->
      <div class="not-pop">
        <div class="modal-dialog">
        <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Online Advice</h4>
            
            </div>
              <div class="modal-body">
                <div class="page-login-form">               
                    <?php  $attributes = array('class' => 'login-form', 'form'=>'form');
                        echo form_open_multipart('pages/Online_ask_an_advice');?>
                    <div class="form-group">
                      <div class="input-icon">
                        <i class="ti-pencil-alt"></i>     
                        <textarea class="form-control" name="Description" placeholder="Submit your question"><?php echo set_value('Description'); ?></textarea>
                         <?php echo form_error('Description'); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-icon">
                        <i class="ti-info"></i>
                        <input type="text" class="form-control" name="questionHEAD" placeholder="Subject" value="<?php echo set_value('questionHEAD'); ?>">
                      </div>
                      <?php echo form_error('questionHEAD'); ?>
                    </div>
                  <div class="form-group">
                    <div class="input-icon">
                      <div class="row">
                        <div class="col-sm-6 col-xs-12">
                          <label for="sel1">Choose Topic</label>
                          <select class="form-control" id="sel1" required="" name="topicID">
                            <option value="">---Choose Topic---</option>
                            <?php foreach ($all_topics as $topics_key => $topics_val) : ?>
                            <option value="<?=$topics_val->id;?>"><?=$topics_val->topics;?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <?php echo form_error('topicID'); ?>
                      <div class="col-sm-6 col-xs-12">
                        <label for="kd">City</label>
                           <input type="text" id="kd" class="form-control" name="city" placeholder="City" value="<?php echo set_value('city'); ?>">
                           <?php echo form_error('city'); ?>
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sel1">Attach Document if any</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="upload-file-info" readonly>
                        <label class="input-group-btn">
                          <span class="btn btn-file">
                            <i class="ti-clip"></i> Browse&hellip; <input id="my-file-selector" type="file" style="display:none;" name="documents[]" multiple="" onchange="$('#upload-file-info').val($(this).val());">
                          </span>
                        </label>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="input-icon">
                      <div class="row">
                        <div class="col-sm-6 col-xs-12">
                          <div class="input-icon">
                            <i class="ti-email"></i>
                            <input type="email" class="form-control" name="email_ID" placeholder="Email ID" value="<?php echo set_value('email_ID'); ?>">
                          </div>
                          <?php echo form_error('email_ID'); ?>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="input-icon">
                            <i class="ti-mobile"></i>
                            <input type="text" class="form-control" name="mobile" placeholder="Mobile No" value="<?php echo set_value('mobile'); ?>">
                          </div>
                          <?php echo form_error('mobile'); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr />
                  <div class="col-lg-6 center-div">
                    <button class="btn btn-common log-btn">Submit Query</button>
                  </div>
                  <?php echo form_close(); ?>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  

     
