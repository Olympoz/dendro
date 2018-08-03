jQuery(document).ready(function($){

    ///////////////////// Add Ajax call here

  $('.filter_tags').on('click', function(){

    jQuery.ajax({

        type:"POST",
        url: ajaxcustom,
        dataType: 'html',
        data: {
            action: 'filter_actu',
            param: 'Mon Ajax marche',
        },

        success:function(response){
            $('#test_ajax').html(response);
            console.log('bonjour');
        },

    });
  });
});
