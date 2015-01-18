// the semi-colon before the function invocation is a safety
// net against concatenated scripts and/or other plugins
// that are not closed properly.
// set root Object
;(function ( $, window, document, undefined ) {
  'use strict';

  function validateEmail( email ) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  $(document).ready( function(){

    $('#fancybox-gallery a')
      .attr('rel', 'gallery')
      .fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        prevEffect  : 'none',
        nextEffect  : 'none',
        arrows: true,
        padding: 5,
        helpers: {
          thumbs:{
            width: 60,
            height: 50,
            source: function( item ) {

              var href, thumb;

              thumb = $(item.element).data('thumbnail');

              if ( item.element ) {
                href = $(item.element).find('img').attr('src');
              }

              if ( !href && item.type === 'image' && item.href ) {
                href = item.href;
              }

              if( thumb ) {
                href = thumb;
              }

              return href;

            }
          }
        }
      });

    $('#cs-newsletter').on('click', function( e ) {

      if( !validateEmail( $('#cs-email').val() ) ) {
        e.preventDefault();
        alert( 'Please check your email address!' );
      }

    });

  });

})( jQuery, window, document );