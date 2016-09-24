/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){
     // date from today to 2yrs + 10 days
    $( "#general_date1" ).datepicker({
        minDate: 0,
        maxDate: "+2Y +12M" ,
        dateFormat:'dd-mm-yy',
        showOn: "button",
        buttonImageOnly: true,
        buttonText: "cal",
          buttonImage: jsconfig.baseurl+"images/calendar.gif",
        changeMonth: true,
        changeYear: true    
    });
    
    
    
    
});



function toggleContent(targetDiv){
    $('#'+targetDiv).toggle();
}