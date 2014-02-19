$(document).ready(function(){

    /* default settings */
    $('.venobox').venobox(); 


    /* open content with custom settings */
    $('.venobox_custom').venobox({
        framewidth: '300px',
        frameheight: '250px',
        border: '6px',
        bordercolor: '#ba7c36',
        numeratio: true
    });

    /* auto-open #firstlink on page load */
    $("#firstlink").venobox().trigger('click');
});