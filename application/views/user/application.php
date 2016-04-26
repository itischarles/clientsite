<div class="">
    <div class="col-sm-12">
        <h2><b>SIPP Application for</b> <span class="label label-default"> <?php  echo (!empty($userDetails)? ucwords($userDetails->userTtitle ." ".$userDetails->userFirstName). " ".$userDetails->userLastName :'') ?> </span></h2> 
        
    </div>
    <div class="col-sm-9">
        <h3><b>Application Reference: 12100180000392</b></h3>
        <hr>
         <h2><b>Establishment</b></h2>
        <hr>
        <h3><b>Client Detail</b> Completed </h3> 
            
        <hr>
         <h3><b>Transfers</b> Please add any transfer details
         <a href="<?php echo base_url("users/pensionTransfer/$app_id") ?>" class="btn btn-primary pull-right">Add</a>
         </h3>
        <hr>
         <h3><b>New Contribution</b> Please add any Contribution details
         <a href="<?php echo base_url('users/contribution') ?>" class="btn btn-primary pull-right">Add</a>
         </h3>
        <hr>
        <h3><b>Expression of wish </b>  Please add any beneficiary details
         <button type="submit" class="btn btn-default pull-right">Add</button></h3>
        <hr>
        <h3><b>Benefits in payment</b> Please add income withdrawal details
         <button type="submit" class="btn btn-default pull-right">Add</button></h3>
        <hr>
        <h3><b>Investment Instruction</b> Please add Investment details
        <a href="<?php echo base_url('users/investmentOptions') ?>" class="btn btn-primary pull-right">Add</a>
        </h3>
        <hr>
    </div>
    <div class="col-sm-3">
        <div class="">
        <hr>
        <h3> <span class="glyphicon glyphicon-chevron-right"></span> <a href="#"><b>Return to client File</b></a></h3>
         <hr style="display: block;margin-top: 0.5em;    margin-bottom: 0.5em;    margin-left: auto;
            margin-right: auto;    border-style: inset;    border-width: 2px;">
    </div>
         <div class="">
              <hr>
        <h3><b>Ready to proceed?</b></h3>
         <hr style="display: block;margin-top: 0.5em;    margin-bottom: 0.5em;    margin-left: auto;
            margin-right: auto;    border-style: inset;    border-width: 2px;">
      
           <span class="glyphicon glyphicon-chevron-right"></span> <a href="#"><b>Submit Application Online</b></a>
             
    </div>
    </div>
    
    
</div>