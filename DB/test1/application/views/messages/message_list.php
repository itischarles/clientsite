<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$backgroundProcess = new Background_process();
$backgroundProcess->markMessageAsViewed($client->userID);
?>

 <div class="">
    <div class="col-sm-8 space-2em-bottom">

	<h2 class="gr-text2"><?php echo (!empty($client)? $client->userTtitle ." ".ucwords($client->userFirstName. " ".$client->userLastName) :'') ?></h2>   


       <div>
           
          
           <h3>Messages</h3>

	   <div>
	       <div>
	       <p class="pull-right">
		   <button onclick="return toggleContent('composeForm')" class="btn ">
		   Compose Message</button>
	       </p>
	       <p class="clear"></p>
	       </div>
	       <div id="composeForm" style="display: none">
		   <?php echo form_open_multipart() ?>
		   <div class="form-group">
		       <textarea name="msg" placeholder="type your message here" class="col-100"></textarea>		       
		   </div>
		   <div class="form-group">
		       <input type="submit" value="Send" name="sendMsg"/>		       
		   </div>
		   <?php echo form_close() ?>
	       </div>
	   </div>

	   
	    <?php if(!empty($messages)): ?>
	    <?php foreach($messages as $key=>$message):?>
	     <div class="message-list <?php echo $message->messageSentOrReceived ?>">
		 <p class="message-date"><?php echo $message->messageDate ?></p>
		 <p class="message-body"><?php echo $message->messageBody ?></p>
	     </div>                  

	    <?php  endforeach;?>  

	    <?php else:?>
	   <div class="message-list">
		 <p class="message-body">No message</p>
	     </div>
	    <?php endif; ?>
               
        
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