
$( document ).ready(function() {
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }

      window.onscroll = function() {myFunction()};
      var yMousePos = 0;
      var lastScrolledTop = 0;
      window.onscroll = function() {myFunction()};
    var counter = document.getElementById("counters");
    var count = counter.offsetTop;
    var $check =1;
      $(window).scroll(function(event) {
        if(lastScrolledTop != $(document).scrollTop()){
            yMousePos -= lastScrolledTop;
            lastScrolledTop = $(document).scrollTop();
            yMousePos += lastScrolledTop;
        }
        if (yMousePos > count-600) {
          if($check==1){
            $check=0;
            $( ".Single" ).each(function() {
              var $this = $(this);
              console.log($this.text());
              jQuery({ Counter: 0 }).animate({
                Counter: $this.text()
              },{
                duration: 1000,
                easing: 'swing',
                step: function() {
                  $this.text(Math.ceil(this.Counter));
                }
              });
            });
          }
         
        }

    });
  
});