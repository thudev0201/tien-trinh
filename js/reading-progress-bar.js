jQuery(document).ready(function($) {
    var progressBar = $('#reading-progress-bar');

    $(window).on('scroll', function() {
        var scrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var winHeight = $(window).height();
        var scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;
        progressBar.css('width', scrollPercent + '%');
    });
});