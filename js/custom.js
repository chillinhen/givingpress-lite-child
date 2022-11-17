jQuery(document).ready(function ($) {
    //external icons
    $('*:not(figure) > a').filter(function () {
    return this.hostname && this.hostname !== location.hostname;
    }).append(' <i class="fa fa-external-link"></i>').attr('target', '_blank');
});
