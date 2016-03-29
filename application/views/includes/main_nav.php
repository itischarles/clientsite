<?php //print_r($userDetails)?>
<div class="row main_nav">
   <div class="max-width">  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">         
         
	
	  <li>
            
            <a href="<?php echo base_url() ?>" class="home_icon">
                <span class="glyphicon glyphicon-home"></span>
                Home</a>

        </li>
	
    
	
	<?php if($userDetails->role_roleID == 1):?>
	     <li>
            
		    <a href="<?php echo base_url('admin/search') ?>" class="home_icon">
		    <span class="glyphicon glyphicon-search"></span>
		    Search Clients</a>            
	    </li>
	    <li>
		<a href="<?php echo base_url('admin/manual-uploads') ?>" class="account_icon">
		     <span class="glyphicon glyphicon-upload"></span>
		    Docs. Upload
		</a>
	    </li>
	 <?php endif;?>
	
	<?php if($userDetails->role_roleID == 3|| $userDetails->role_roleID == 1):?>
	<li><a href="<?php echo base_url('messages/'.$userDetails->userBaseUrl) ?>" class="">
                 <span class="glyphicon glyphicon-envelope"></span>
	
                Messages</a>
	</li>
	<?php endif;?>
	<li><a href="<?php echo base_url('user/'.$userDetails->userBaseUrl.'/documents') ?>" class="glossary_icon">
                 <span class="glyphicon glyphicon-book"></span>
                Document</a>
	</li>
        <li><a href="#<?php //echo base_url('glossary/') ?>" class="glossary_icon">
                 <span class="glyphicon glyphicon-book"></span>
                Glossary</a>
	</li>
      </ul>
        
      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="<?php echo base_url('logout') ?>" class="logout_icon">
                 <span class="glyphicon glyphicon-off"></span>
                Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   </div>
</div>
