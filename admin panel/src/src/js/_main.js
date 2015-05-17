window.conApp = {};


@@include('./yay.js')

@@include('./weather-widget.js')

@@include('./cards.js')

@@include('./layers.js')

@@include('./chat.js')

@@include('./sparkline.js')

@@include('./todo.js')

@@include('./bubble-canvas.js')



/*
 * Init Plugins
 */
conApp.initMaterialPlugins = function() {
  // init selects
  if(typeof $.fn.material_select !== 'undefined') {
    $('select:not(.select2)').material_select();
  }

  // init dropdown
  if(typeof $.fn.dropdown !== 'undefined') {
    $('.dropdown-button').each(function() {
      var hover = $(this).attr('data-hover') == "true" || false;
      var constrainWidth = $(this).attr('data-constrainwidth') == "false" || true;
      var inDuration = $(this).attr('data-induration') || 300;
      var outDuration = $(this).attr('data-outduration') || 300;
      $(this).dropdown({
        hover: hover,
        constrain_width: constrainWidth,
        inDuration: inDuration,
        outDuration: outDuration
      });
    });
  }

  // init collapsible
  if(typeof $.fn.collapsible !== 'undefined') {
    $('.collapsible').each(function() {
      $(this).collapsible({
        accordion: $(this).attr('data-collapsible') === 'accordion'
      });
    });
  }

  // init modals
  if(typeof $.fn.leanModal !== 'undefined') {
    $('.modal-trigger').each(function() {
      var dismissible = $(this).attr('data-dismissible') == "true" || false;
      var opacity = $(this).attr('data-opacity') || 0.5;
      var in_duration = $(this).attr('data-induration') || 300;
      var out_duration = $(this).attr('data-outduration') || 300;

      $(this).leanModal({
        dismissible: dismissible,
        opacity: opacity,
        in_duration: in_duration,
        out_duration: out_duration
      });
    });
  }
}


conApp.initPlugins = function() {
  // init select2
  if(typeof $.fn.select2 !== 'undefined') {
    $('.select2').each(function() {
      $(this)
        .wrap('<div style="width:100%;position:relative;"></div>')
        .select2();
    });
  }

  // init input tags
  if(typeof $.fn.tagsInput !== 'undefined') {
    $('.input-tag').tagsInput({
      width: '100%',
      height: 'auto'
    });
  }

  // init pikaday
  if(typeof $.fn.pikaday !== 'undefined') {
    $('.pikaday').pikaday();
  }

  // init clock picker
  if(typeof $.fn.clockpicker !== 'undefined') {
    $('.clockpicker').clockpicker();
  }

  // init spectrum
  if(typeof $.fn.spectrum !== 'undefined') {
    $('.spectrum').spectrum({
      showButtons: false
    });
  }

  // init masked inputs
  if(typeof $.fn.inputmask !== 'undefined') {
    $('input[data-inputmask]').inputmask();
  }

  // init datepicker
  if(typeof $.fn.pickadate !== 'undefined') {
    $('.datepicker').pickadate();
  }

  // init prettyPrint
  if(typeof prettyPrint !== 'undefined') {
    prettyPrint();
  }

  // init markItUp
  if(typeof $.fn.markItUp !== 'undefined') {
    $(".markItUp").markItUp(mySettings);
  }

  // init Sortable
  if(typeof Sortable !== 'undefined') {
    $('.sortable').each(function() {
      var options = {
        group: 'widgets'
      }

      // if widget has title - use it for dragplace
      if($(this).find('.card > .title')[0]) {
        options.handle = ".title"
      }

      Sortable.create(this, options);
    });
  }

  // close dismissible alerts
  $('.alert').on('click', '.close', function() {
    // remove animation
    $(this).parents('.alert').velocity({
      opacity: 0,
      translateY: -20
    }, 300 )
    
    .velocity('slideUp', 300, function() {
      $(this).remove();
    });

  });

  /*
   * Search For Icons
   */
  (function() {
    var input = $('#inputIconSearch');

    if(input.length === 0) {
      return;
    }

    input.on('keyup', function () {
      var val = input.val();
      $('.icon-preview').hide();
      $('.icon-preview:contains("' + val + '")').show();

      $('.icon-card').hide();
      $('.icon-card:contains("' + val + '")').show();
    });

  }());
}


conApp.initSearchBar = function() {
  // toggle search bar layer
  var searchBar = $('.search-bar:eq(0)');
  searchBar.MDLayer({
    duration: 500,
    fixScrollbar: true,
    onshow: function() {
      searchBar.find('input').focus();
    }
  });
  $(document).on('click', '.search-bar-toggle', function(e) {
    e.preventDefault();
    e.stopPropagation();
    searchBar.MDLayer();
  });
  // close search bar on ESC press
  $(document).on('keyup', function(e) {
    if (e.keyCode == 27) {
      searchBar.MDLayer('hide');
    }
  });
}

jQuery(function() {
  // variables
  var $ = jQuery;

  // init all if not Angular version
  if(typeof conAngular === 'undefined') {
    conApp.initSearchBar();

    conApp.initPlugins();

    conApp.initMaterialPlugins();
  }

  // redraw all charts on window resize
  $(window).on('resize', function() {
    if(typeof nv !== 'undefined' && nv.graphs.length) {
      for(var k in nv.graphs) {
        nv.graphs[k].update();
      }
    }
  });

});