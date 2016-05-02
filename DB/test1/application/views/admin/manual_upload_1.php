<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
 <div class="grid col-70">
    <div class="col-95">
    <h2 class="gr-text2 underline">Manually upload document</h2>
    
    <p class="center">
        this document will be added to the clients list of documents
    </p>
    <div>
        <?php if(isset($upload_message)):?>
        <p><?php echo $upload_message;?></p>      
        <?php endif;?>
        <?php if(isset($upload_error)):?>
          <p><?php print_r($upload_error) ?></p>
           <?php endif;?>
    </div>
    
    <div id="search_box_wrapper">
        <div class="search-box col-100 auto-margin">
        <?php  $form_attr= array( 'data-ajax'=>"false");   ?>  
        <?php echo form_open_multipart(base_url('manage/manualUploadDocument')); ?>
            
          <div class="inline-form">
            <?php echo form_label('Client ID', 'client_id'); ?>
            <?php
                $data = array(
                          'name'        => 'client_id',
                          'id'          => 'client_id',
                          'value'       => set_value('client_id'),
                          'placeholder' =>"client id",
                          'class'       => 'field' . ((form_error('client_id')) ? ' error-border' : '') . '"',
                        );

                echo form_input($data);
                echo form_error('client_id', '<span class="error">', '</span>');
            ?>
        </div>
        <div class="inline-form">
            <?php echo form_label('Project/Wizbang ID', 'project_id'); ?>
            <?php
                $data = array(
                          'name'        => 'project_id',
                          'id'          => 'project_id',
                          'value'       => set_value('project_id'),
                          'placeholder' =>"project id/wizbang id",
                          'class'       => 'field' . ((form_error('project_id')) ? ' error-border' : '') . '"',
                        );

                echo form_input($data);
                echo form_error('project_id', '<span class="error">', '</span>');
            ?>
        </div> 
            
          <div class="inline-form">
            <?php echo form_label(' File Name ', 'file_name'); ?>
            <?php
                $data = array(
                          'name'        => 'file_name',
                          'id'          => 'file_name',
                          'value'       => set_value('file_name'),
                          'placeholder' =>"file name",
                          'class'       => 'field' . ((form_error('file_name')) ? ' error-border' : '') . '"',
                        );

                echo form_input($data);
                echo form_error('file_name', '<span class="error">', '</span>');
            ?>
        </div>   
         <div class="inline-form">
            <?php echo form_label(' Date Added', 'date_added'); ?>
            <?php
                $data = array(
                          'name'        => 'date_added',
                          'id'          => 'date_added',
                          'value'       => set_value('date_added'),
                          'placeholder' =>"date added",
                          'class'       => 'field' . ((form_error('date_added')) ? ' error-border' : '') . '"',
                        );

                echo form_input($data);
                echo form_error('date_added', '<span class="error">', '</span>');
            ?>
        </div> 
          <div class="inline-form">
            <?php echo form_label('File', 'userfile'); ?>
            <?php
                $data = array(
                          'name'        => 'userfile',
                          'id'          => 'userfile',
                   
                          'class'       => 'field' . ((form_error('userfile')) ? ' error-border' : '') . '"',
                        );

                echo form_upload($data);
                echo form_error('userfile', '<span class="error">', '</span>');
                if($file_box_error > 0):
                    echo '<span class="error">Invalid file</span>';
                endif;
            ?>
        </div>    
         <div>
            <br/>
             <div>
              <?php echo form_submit('upload', 'Upload',''); ?>
             </div>
         </div>
       </div>
    </div>
    

     </div>

</div>
 <div class="grid col-30">
        
      <?php $this->load->view('includes/info-sidebar');?>
    </div>
    

<div class="clear"></div>