jQuery(document).ready(function($){
  $.each(Drupal.settings.superhero_twitter,function(id, options){
    var $slider=$('#'+id);
    $slider.bxSlider(options);
  });
});