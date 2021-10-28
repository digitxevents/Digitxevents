jQuery('#dxe_form').on('submit', function(e){
    e.preventDefault();
    jQuery('#send-button').val('Please wait...');
    jQuery('#send-button').attr('disabled', true);
    jQuery.ajax({
        url:'form.php',
        type:'post',
        data:jQuery('#dxe_form').serialize(),
        success:function(result){
            jQuery('#dxe_form')['0'].reset();
            jQuery('#send-button').val('Send Message');
            jQuery('#thankyou').html('Message sent successfully!');
            jQuery('#send-button').attr('disabled', false);
        }
    });
});