<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//print_r($document_list);
//print_r($userDetails);
?>

 <div class="">
    <div class="col-sm-8 space-2em-bottom">

	<h2 class="gr-text2"><?php echo (!empty($userDetails)? $userDetails->userTtitle ." ".ucwords($userDetails->userFirstName. " ".$userDetails->userLastName) :'') ?></h2>   


       <div>
           
          
           <h3>Document List</h3>

         
           <table class="table table-hover table-striped table-responsive" border="0" id=""  >
               <thead class="doclist-header">
                   <tr>

                   <th>Document Name</th>
                   <th style="width: 85px" class="right-align">Size</th>
                   <th style="width: 97px">Date Added</th>
                   <th style="width: 100px">Last Viewed</th>
               </tr>
               </thead>
               <tbody> 
                   <?php $counter =1?>
                   <?php if(!empty($document_list)): ?>
                   <?php foreach($document_list as $key=>$val):?>

                   <tr>

                       <td>
                           <a href="<?php echo base_url("user/{$userDetails->userBaseUrl}/document/$val->documentID") ?>" target="_blank">
                           <?php echo $val->docName ?>
                           </a>
                       </td>
                       <td class="right-align"><?php echo round(($val->docSize/1000), 1) ?> MB</td>
                       <td><?php echo changeDateFormat($val->docDateAdded,'d-m-Y')?></td>
                       <td><?php echo changeDateFormat($val->docIsViewed,'d-m-Y',true) ?></td>
                   </tr>

                   <?php  endforeach;?>  

                   <?php else:?>
                   <tr>
                       <td colspan="100">There are no Document to display</td>
                   </tr>

                   <?php endif; ?>
               </tbody>




           </table>
        
       </div>

   </div>

  <div class="col-sm-4">
      <?php 
	if($userDetails->userID !== $this->session->userdata('userID')):
	    $this->load->view('includes/client-sidebar');
	endif;
	?> 
     <br/>
      <?php $this->load->view('includes/info-sidebar');?>
    </div>
    

 </div>