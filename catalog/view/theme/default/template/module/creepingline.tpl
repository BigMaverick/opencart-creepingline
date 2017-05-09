<div class="panel panel-default">
  <!--- <div class="panel-heading"><?php echo $heading_title; ?></div> --->
  <!--- <div class="panel-content" style="text-align: center;"><?php echo $creepingline_value; ?></div> --->

  <div class="str1 str_wrap panel-content" style="font-size: 16px;"><a href="<?php echo $creepingline_url; ?>"><?php echo $creepingline_value; ?></a></div>
  <script>
      $(window).load(function(){
      $('.str1').liMarquee();
    })
  </script> 
</div>
