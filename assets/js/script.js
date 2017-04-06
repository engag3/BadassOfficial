jQuery(document).ready(function( $ ) {

  $('.submission-links').linkify({
      target: "_blank",
      className: 'download-link button',
      attributes: {
         download: ''
       }
  });



    // Slideout Menu toggle(s)
  $('.copy-btn').on('click', function(e) {
      $('.copy-btn').addClass("is-active"); //you can list several class names

      $(".copy-btn").attr('Saved', 'Save'); //versions older than 1.6
  });

  $('.copy-btn').click(function(){
    var $this = $(this);
    $this.toggleClass('SeeMore2');
    if($this.hasClass('SeeMore2')){
        $this.text('Copied');
    }
});

  new Clipboard('.copy-btn');


});
