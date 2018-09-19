jQuery(document).ready(function ($) {
//external icons
$('a').filter(function () {
    return this.hostname && this.hostname !== location.hostname;
}).append(' <i class="fa fa-external-link"></i>').attr('target', '_blank');
});