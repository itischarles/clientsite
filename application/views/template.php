<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TRB &amp; TPRB Client Site :::<?php if(isset($page_title)){ echo $page_title;} ?></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <link rel="stylesheet" type="text/css" href="<?php echo base_url('third_party/bootstrap/css/bootstrap.min.css') ?>"/>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url('third_party/bootstrap/css/bootstrap.icon-large.min.css') ?>"/>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('third_party/jquery-ui-1.11.4.custom/jquery-ui.min.css') ?>"/>

         <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css') ?>">

    </head>
    <body>
       
        <div class="container-fluid">
            
            <!-- header info-->
            <div class="row">              
                 <header class="">
                       <div class="max-width">
                    <?php $this->load->view('includes/header') ?>               
                          </div>
                   <hr class="hr-header"/>                
                  </header>              
            </div><!-- end row header-->
            
	    
              <!-- show main nav when required-->
             <?php ( (isset($show_main_nav)&&($show_main_nav === true) &&(isset($userDetails)) && (!empty($userDetails)))? $this->load->view('includes/main_nav') : "" ) ?>
            
	     <!-- error/flash message-->
	     <div class="row">  
		<div class="max-width">
		     <?php $this->load->view('includes/flash_message') ?>  
		</div>
	     </div>
	   
	      
            <!-- content area-->
            <div class="row">  
                <div class="max-width" id="main">
                <?php $this->load->view($page) ?>   
                </div>
            </div>
            
            <!-- end content area-->
            
            
            <!-- footer area-->
            <div class="row">
                <div class="max-width">
                <footer>
                    <?php $this->load->view('includes/footer') ?>
                </footer>
                </div>
           </div><!-- end footer area-->
            
            
        </div><!-- end container -fluid-->
        
       

    <script type="text/javascript">
	var jsconfig  = {baseurl : '<?php echo base_url()?>'}
    </script>
	    
  <script type="text/javascript" src="<?php echo base_url('js/jquery.1.11.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('third_party/jquery-ui-1.11.4.custom/jquery-ui.min.js') ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('third_party/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('js/script.js') ?>"></script>
</body>
</html>
