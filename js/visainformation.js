// JavaScript Document
$(document).ready(function () {

    
    $('.vc_info_result').hide();
    $('.vc-visafree').hide();
 $(".loadingDiv").hide();

   
    $('.search_visa_information').click(function(){
        var visacountry = $('#vc_rightbar_checklist_visacountry').attr('data-value');
        var vc_rightbar_checklist_nationality = $('#vc_rightbar_checklist_nationality').attr('data-value');
        var resident = $('#vc_rightbar_checklist_residentcountry').attr('data-value');
        var visacategoryid = $('#visacategoryid').attr('data-value');
        setTimeout(removeLoader, 2000); 
        $('.vc_info_result').slideDown('slow');
        $('.vc-visafree').slideUp('slow');
		 $(".loadingDiv").show();
		 
          function removeLoader(){
           $(".loadingDiv").fadeOut(500, function() {
           $(".loadingDiv").remove(); 
  }); 
	}

    });

});
 $(document).ready(function () {
	    $(document).on("click",".editable-click",function(e) {
 e.preventDefault();
 var $div = $(this).parents('.vqguide').find(".togglemenu");
	   $div.toggle();
	    $(".togglemenu").not($div).hide();
	    }); 
	   $(".togglemenu li ").click(function(e){
	   e.preventDefault();
  var selText = $(this).text();
  $(this).parents('.vqguide').find('.dropdown-toggle').html(selText);
  $(this).closest('.vqguide').find(".togglemenu").hide();
});
 
         
});
$(document).mouseup(function (e) { 
            var container = $(".editable-click"); 
            if(!container.is(e.target) &&  
            container.has(e.target).length === 0) { 
                $(".togglemenu").hide();
            } 
			
        }); 