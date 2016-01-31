jQuery(document).ready(function($){
  var $grid = $('#page-dexp-portfolio');
  $grid.shuffle({
    itemSelector: '.node',
    speed: 500
  });
  $('ul.dexp-portfolio-filter li a').click(function(){
    var $this = $(this), filter = $this.data('filter');
    if(filter == '*'){
      $grid.shuffle('shuffle', 'all');
    }else{
      $grid.shuffle('shuffle', function($el, shuffle) {
        // Only search elements in the current group
        if (shuffle.group !== 'all' && $.inArray(shuffle.group, $el.data('groups')) === -1) {
          return false;
        }
        return $el.hasClass(filter);
      });
    }
    $(this).parents('.dexp-portfolio-filter').find('a').removeClass('active');
    $(this).addClass('active');
    return false;
  });
  $(window).load(function(){
    $grid.shuffle('shuffle', 'all');
  });
})