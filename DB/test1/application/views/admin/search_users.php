<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col-sm-8 space-2em-bottom">
     <br/>
    <h2 class="gr-text2">Search Clients</h2>
    
    <p class="center">
        <br/>
        Please enter search criteria. Either client's names  or ID or Reference.
        <br/><br/>
    </p>
    
    <div id="search_box_wrapper">
        <div class="search-box col-80 auto-margin">
        <?php  $form_attr= array( 'data-ajax'=>"false", 'class'=>"form-inline", 'role'=>"form", 'method'=>'get');   ?>  
        <?php echo form_open(base_url('admin/search'), $form_attr); ?>
          <div class="form-group">
             <?php echo form_label('Client ID / Name', 'search_param'); ?>
            <?php
                $data = array(
                          'name'        => 'search_param',
                          'id'          => 'search_param',
                          'value'       => set_value('search_param'),
                          'placeholder' =>"e.g Client's names or ID or Reference",
			  'size'	=> "30",
                          'class'       => 'form-control field' . ((form_error('search_param')) ? ' error-border' : ''),
                        );

                echo form_input($data);
              //  echo form_error('username');               
             ?>  
          </div>
              <?php echo form_submit('Search', 'Search','class="btn btn-gold"'); ?>
      
        </div>
    </div>
    
    
     <?php if(isset($searchList) && !empty($searchList)):?>
    
    <div id="search-results" style="margin-top: 2em">
        <table class="table table-hover table-striped auto-margin" >
            <thead class="doclist-header">
                <tr>
                    <th>s/n</th>
                    <th>Full Names</th>
                    <th>Reference</th>
                    <th>Status</th>
                </tr>
            </thead>
            
            <tbody>
            <?php if(!empty($searchList)):?>
              <?php $counter = 1; ?>
            <?php foreach ($searchList as $key=>$value):?>
                <tr>
                    <td><?php echo $counter;?></td>
                    <td>
                        <?php echo anchor_popup(base_url('user/'.$value->userBaseUrl.'/documents'), $value->userFirstName." ". $value->userLastName)?>
                     
                    </td>
                    <td><?php echo $value->userReference;?></td>
                    <td><?php echo ($value->userIsActive ==1)? " Active" : " Account is Disabled" ?></td>
                </tr>                
                
                <?php $counter++?>
            <?php endforeach;?>
            <?php endif;?>
       
            </tbody>
        </table>
	
	    <div>
		<?php 	
		if(isset($this->pagination)):
		 
		    echo "<span class='pagination_total_rec'>".
			//$this->pagination->total_rows.
		    show_pagination_text($this->pagination->cur_page, $this->pagination->per_page, 3)    .                           
		        "</span> &nbsp;&nbsp;&nbsp;&nbsp;";
		    echo $this->pagination->create_links();  
		endif; 		    
			?>	
	    </div>
    </div>
    
     <?php endif;?>
</div>


<div class="col-sm-4">
  <?php $this->load->view('includes/info-sidebar');?>
</div>
