// jQuery(document).ready(function( $ ) {
//
//   $('.submission-links').linkify({
//       target: "_blank",
//       className: 'download-link button',
//       attributes: {
//          download: ''
//        }
//   });
//
//
//
//     // Upload Menu toggle(s)
//   $('#photos-btn').on('click', function(e) {
//       $('#photos-btn, .cred-field-photos').addClass("is-active"); //you can list several class names
//       $('#videos-btn, .cred-field-videos').removeClass("is-active"); //you can list several class names
//   });
//     // Upload Menu toggle(s)
//   $('#videos-btn').on('click', function(e) {
//       $('#photos-btn, .cred-field-photos').removeClass("is-active"); //you can list several class names
//       $('#videos-btn, .cred-field-videos').addClass("is-active"); //you can list several class names
//   });
//
//   $('.copy-btn').click(function(){
//     var $this = $(this);
//     $this.toggleClass('SeeMore2');
//     if($this.hasClass('SeeMore2')){
//         $this.text('Copied ✓');
//     }
//     $(this).addClass('is-active');
//   });
//
//
//   new Clipboard('.copy-btn');
//
//
//   // App menu
//
//     // Upload Menu toggle(s)
//   $('#fab, .fab-overlay').on('click', function(e) {
//       $('#app-menu-wrap').toggleClass("is-active"); //you can list several class names
//       $('body').toggleClass("app-menu-is-active"); //you can list several class names
//   });
//
//   // IG Tabs
//
//   $('.ig-tab-btn').click(function(){
//     $('.ig-tab-btn').removeClass("is-active");
//     $(this).addClass('is-active');
//   });
//
//   $('#btn_best_of_bad_ass_official').click(function(){
//     $('#ig-tabs').addClass("is-tab-1");
//     $('#ig-tabs').removeClass("is-tab-2");
//     $('#ig-tabs').removeClass("is-tab-3");
//     $('#ig-tabs').removeClass("is-tab-4");
//     $('#ig-tabs').removeClass("is-tab-5");
//     $('#ig-tabs').removeClass("is-tab-6");
//   });
//
//   $('#btn_bad_ass_girls').click(function(){
//     $('#ig-tabs').removeClass("is-tab-1");
//     $('#ig-tabs').addClass("is-tab-2");
//     $('#ig-tabs').removeClass("is-tab-3");
//     $('#ig-tabs').removeClass("is-tab-4");
//     $('#ig-tabs').removeClass("is-tab-5");
//     $('#ig-tabs').removeClass("is-tab-6");
//   });
//
//   $('#btn_bad_ass_guns').click(function(){
//     $('#ig-tabs').removeClass("is-tab-1");
//     $('#ig-tabs').removeClass("is-tab-2");
//     $('#ig-tabs').addClass("is-tab-3");
//     $('#ig-tabs').removeClass("is-tab-4");
//     $('#ig-tabs').removeClass("is-tab-5");
//     $('#ig-tabs').removeClass("is-tab-6");
//   });
//
//   $('#btn_bad_ass_bikes').click(function(){
//     $('#ig-tabs').removeClass("is-tab-1");
//     $('#ig-tabs').removeClass("is-tab-2");
//     $('#ig-tabs').removeClass("is-tab-3");
//     $('#ig-tabs').addClass("is-tab-4");
//     $('#ig-tabs').removeClass("is-tab-5");
//     $('#ig-tabs').removeClass("is-tab-6");
//   });
//
//   $('#btn_bad_ass_cars').click(function(){
//     $('#ig-tabs').removeClass("is-tab-1");
//     $('#ig-tabs').removeClass("is-tab-2");
//     $('#ig-tabs').removeClass("is-tab-3");
//     $('#ig-tabs').removeClass("is-tab-4");
//     $('#ig-tabs').addClass("is-tab-5");
//     $('#ig-tabs').removeClass("is-tab-6");
//   });
//
//   $('#btn_bad_ass_official').click(function(){
//     $('#ig-tabs').removeClass("is-tab-1");
//     $('#ig-tabs').removeClass("is-tab-2");
//     $('#ig-tabs').removeClass("is-tab-3");
//     $('#ig-tabs').removeClass("is-tab-4");
//     $('#ig-tabs').removeClass("is-tab-5");
//     $('#ig-tabs').addClass("is-tab-6");
//   });
//
//
// });
