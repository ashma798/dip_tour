// JavaScript Document
$(function($){

    $(".select2").select2();
    $('.vc_info_result').hide();
    $('.vc-visafree').hide();


    $(document).on('click','.advance_search_link', function(){
        //$(this).slideUp('slow');
        $(this).parent().remove();
        $('.advance_visainformation').slideDown('slow');
    });

   /* $('.search_visa_information').click(function(){
        var visacountry = $('#vc_rightbar_checklist_visacountry').attr('data-value');
        var vc_rightbar_checklist_nationality = $('#vc_rightbar_checklist_nationality').attr('data-value');
        var resident = $('#vc_rightbar_checklist_residentcountry').attr('data-value');
        var visacategoryid = $('#visacategoryid').attr('data-value');

        $('.vc_info_result').slideDown('slow');
        $('.vc-visafree').slideUp('slow');
        $('.vc-loader-overlay').show('slow');

        $('#forecast_embed').remove();
        fetchVisaInfo();



    });

    function fetchVisaInfo(){
        var visacountry = $('#vc_rightbar_checklist_visacountry').attr('data-value');
        var nationality = $('#vc_rightbar_checklist_nationality').attr('data-value');
        var residentcountry = $('#vc_rightbar_checklist_residentcountry').attr('data-value');
        var visacategoryid = $('#visacategoryid').attr('data-value');
        var postUrl = '<?php echo base_url()?>' + 'visa/getDataByAjax';
        var csrf_token = $('#csrf_token').val();
        $.post("postUrl", {visacountry:visacountry,nationality:nationality,residentcountry:residentcountry,visacategoryid:visacategoryid,csrf_token:csrf_token,operation:'VisaChecklist'}, function(result) {
           if (result.status == 'success'){
               $('.vc-loader-overlay').hide('slow');
               if (result.nochecklist == 'Yes'){
                   $('.vc_info_result').slideUp('slow');
                   $('.vc-visafree').html('<h2 class="m-t-0 text-info"><i class="ti-info-alt m-r-5"></i> ' + result.nochecklistnote + '</h2>');
                   $('.vc-visafree').slideDown('slow');

               }else{
                   $('#visa_checklist_container').html(result.ClientChecklist);
                   $('#visa_application_center_container').html(result.ClientVAC);
                   $('#embassy_container').html(result.ClientEmbassy);
                   $('#applicationinfo_container').html(result.ClientApplicationInfo);
               }




               $('.visa_info_application_right_container').append(result.ClientWeather);
               $('[data-toggle="tooltip"]').tooltip();
           }else if(result.status == 'nosubscription'){
               $('.vc-loader-overlay').hide('slow');
               $('#visa_checklist_container').html('');
               $('#visa_application_center_container').html('');
               $('#embassy_container').html('');
               $('#applicationinfo_container').html('');

               $('#forecast_embed').remove();

               $('.no_subscription_message').slideDown('slow');
            }

        }, 'json');

    }*/
});