 // Magnific Popup
 $(".lightbox").magnificPopup();
	
 // SmoothScroll
 
 $("#main-nav li a, a.scrool").on('click',function(e){
     
     var full_url = this.href;
     var parts = full_url.split("#");
     var trgt = parts[1];
     var target_offset = $("#"+trgt).offset();
     var target_top = target_offset.top;
     
     $('html,body').animate({scrollTop:target_top -76}, 1000);
         return false;
     
 });

 // Popup-Gallery
 
 $('.popup-gallery').find('a.popup2').magnificPopup({
     type: 'image',
     gallery: {
       enabled:true
     }
 });    
 
 $("#main-nav .nav-active li a").on('click',function() {
 $(this).parent().addClass('active').siblings().removeClass('active');

 });