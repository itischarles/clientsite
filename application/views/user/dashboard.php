

<div class="">
     <div class="col-sm-12">
         <?php// print_r($userDetails);?>
         <h2><?php  echo (!empty($userDetails)? ucwords($userDetails->userTtitle ." ".$userDetails->userFirstName). " ".$userDetails->userLastName :'') ?></h2>
    
     </div>
    <div class="col-sm-9">

        <div class="jumbotron ">
            <h1>Some Graphs here </h1> 
            <h1>Some Graphs here </h1> 

        </div>
        <h2><b>Current Illustrations</b></h2> 
        <hr style="display: block;margin-top: 0.5em;    margin-bottom: 0.5em;    margin-left: auto;
            margin-right: auto;    border-style: inset;    border-width: 2px;">
        <a href="#"> <h4><b>Pension Illustration</b> by Chris Green on 2nd marr 2012 16:11 </h4></a>
        <hr>
        <a href="#">  <h4><b>Pension Illustration</b> by Chris Green on 2nd marr 2012 15:08 </h4></a>
        <hr>
        <a href="#">  <h4><b>Pension Illustration</b> by Chris Green on 2nd marr 2012 11:11 </h4></a>
        <hr>

        <h2><b>Applications</b></h2> 
        <hr style="display: block;margin-top: 0.5em;    margin-bottom: 0.5em;    margin-left: auto;
            margin-right: auto;    border-style: inset;    border-width: 2px;">
<!--         <h4><b>Pension Applications</b> 
             321318521116354 started on 24th feb 2012 </h4>
        <hr>-->
        <?php if($applicationDetails):?>
        <?php foreach($applicationDetails as $apps):?>
       <h4><b><?php echo $apps->applicationType; ?> Applications</b> 
                 <?php echo $apps->applicationReference; ?> started on <?php echo date("dS M Y", strtotime($apps->application_date)); ?> </h4>
        <?php endforeach; ?>
        <?php endif; ?>
        <hr>
<!--        <h4><b>Pension Applications</b>
            321318521116354 started on 6th mar 2012 </h4>
        <hr>-->



    </div>
    <div class="col-sm-3">
        <div class="jumbotron ">
            <h2>Show Client </h2> 
            <h2>details here </h2> 

        </div>
        <h2><b>Illustrations</b></h2>
        <hr>
        <span class="glyphicon glyphicon-chevron-right"></span> <a href="#">New SIPP Illustration </a>
        <hr>
        <span class="glyphicon glyphicon-chevron-right"></span> <a href="#">New Pension Illustration</a>
        <hr>
        <span class="glyphicon glyphicon-chevron-right"></span> <a href="#">New ISA Illustration</a>
        <hr>
        <span class="glyphicon glyphicon-chevron-right"></span> <a href="#">New GIA Illustration</a>
        <hr>
        <h2><b>Applications</b></h2> 
        <hr>
        <span class="glyphicon glyphicon-chevron-right"></span> 
        <a href="<?php echo base_url('users/application/sipp') ?>">Apply for SIPP  </a>
        <hr>
        <span class="glyphicon glyphicon-chevron-right"></span> 
        <a href="#">Apply for Pension </a>
        <hr>
        <span class="glyphicon glyphicon-chevron-right"></span> <a href="#">Apply for ISA </a>
        <hr>
        <span class="glyphicon glyphicon-chevron-right"></span> <a href="#">Apply for GIA </a>
        <hr>




    </div>


</div>



