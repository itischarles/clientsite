<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//echo "<pre>";print_r($userDetails); echo "</pre>";
?>

 <div class="">

    <div class="col-sm-8 space-2em-bottom">
    
       <div>
           <h2 class="gr-text2 underline"><?php echo (!empty($userDetails)? ucwords($userDetails->userTtitle ." ".$userDetails->userFirstName). " ".$userDetails->userLastName :'') ?></h2>

           <br/>
           
           <div class="row">
            <div class="col-sm-6">
               <h4>Contact Details</h4>
               <table class="table" border="0">

                     <tr>  <th>Home Phone</th> <td><?php echo $userDetails->userTel ?></td> </tr>
                     <tr>  <th>Work Phone</th> <td><?php ?></td> </tr>
                     <tr>  <th>Mobile    </th> <td><?php echo $userDetails->userMobile ?></td> </tr>
                     <tr>  <th>Email     </th> <td><?php echo $userDetails->userEmail ?></td> </tr>
                     <tr>  <th>  &nbsp;   </th> <td> &nbsp;</td> </tr>
               </table>
           </div>


            <div class="col-sm-6">
               <h4>Personal Details</h4>
               <table class="table" border="0">
                     <tr>  <th>Address 1</th>  <td><?php echo $userDetails->userAddressLine1 ?></td> </tr>
                     <tr>  <th>Address 2</th>  <td><?php echo $userDetails->userAddressLine2 ?></td> </tr>
                     <tr>  <th>Postcode</th>   <td><?php echo $userDetails->userPostcode ?></td> </tr>
                     <tr>  <th>Town</th>       <td><?php echo $userDetails->userTown ?></td> </tr>
                     <tr>  <th>County</th>     <td><?php echo $userDetails->userCounty ?></td> </tr>
               </table>
           </div>

           </div>
       </div>
           
       
   
    </div>


    <div class="col-sm-4">
      <?php $this->load->view('includes/info-sidebar');?>
    </div>
    
</div>



