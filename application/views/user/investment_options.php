<div class="">
    
    
    
    <h1 class="text-center"><b></b>Investment Options</h1> 
    <hr style="display: block;margin-top: 0.5em;    margin-bottom: 0.5em;    margin-left: auto;
        margin-right: auto;    border-style: inset;    border-width: 2px;">
    
     <form  role="form" action='<?php echo base_url("investmentsave") ?>' method="post">
      
    <input type="hidden" name="investmentIntructionID" class="form-control"> 
    <input type="hidden" name="applicationID" class="form-control" value="<?php echo @$app_id;?>"> 
  
    <div class="col-sm-12">
        
        <div class="row">
            <div class="col-sm-3"><h3>Investment Options <b style="color: red;">*</b></h3> </div>
            <div class="col-sm-9">
                <div class="radio">
                    <label><input type="radio" name="investment_options" value="IM Optimum Growth" checked>IM Optimum Growth</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="investment_options" value="IM Optimum Income">IM Optimum Income</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="investment_options" value="IM Optimum Growth & Income">IM Optimum Growth & Income </label>
                </div>
                <p>Please select the investment portfolio you require(you can change this at any time)</p> </p>
            </div>

        </div>
    </div>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-3"><h3>Percentage of Investment</h3> </div>
            <div class="col-sm-9">
            <div class="row">
                <div class="form-group  col-sm-3">

                    <input type="number"  class="form-control" name="percentage_of_investment" min="1" max="10">
                </div>
                </div>
                <p>For example 100% unless you selected more then one option (in which case you must ensure the total in each of these boxes amounts to 100%)</p>
            </div>

        </div>
    </div>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-3"><h3>What is your Target Date?</h3> </div>
            <div class="col-sm-9">
             <div class="row">
                <div class="form-group  col-sm-4">
                  
                    <label> <input id="target_dates" name="target_dates" value="Date"  class="form-control" ><span class="glyphicon glyphicon-calendar input-group-addon"></span></label>
                  
                 
                </div>
<!--                <div class="form-group col-sm-3">
                <div class='input-group date' id='thedate'>
                    <input type='text'  class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                  
        
            </div>-->
            </div>
                      
       
       
                <p>Please select a target date to deliver a lump sum for withdrawal (you can change this at any time).</p>
            
            </div>
         <div class="form-group col-sm-offset-3">  
             <button type="submit" class="btn btn-primary btn-lg">Save</button>
        </div>
            

        </div>
    </div>
     </form> 
</div>
