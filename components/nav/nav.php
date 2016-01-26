<nav>
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">
          <img src="images/gator-jacks.psd.png" alt="GatorJacks Logo">
          <h1>Gator Jacks</h1>
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php 
                    $arrayLength = count($pages);
                    for($i=0; $i < $arrayLength; $i++) {
                        if ($pages[$i] == $page){
                           echo "<li class=\"active\"><a href=\"?page=$pages[$i]\">$pages[$i]</a></li>"; 
                            
                        }else{
                           echo "<li><a href=\"?page=$pages[$i]\">$pages[$i]</a></li>"; 
                        }} 
          // Build Mobile Nav
                    for($i=0; $i < $arrayLength; $i++){
                        if ($pages[$i] == $page){
                           $mobile_nav .= "<li class=\"active\"><a href=\"?page=$pages[$i]\">$pages[$i]</a></li>"; 
                            
                        }else{
                           $mobile_nav .= "<li><a href=\"?page=$pages[$i]\">$pages[$i]</a></li>"; 
                        }
                    }
          ?>
    </ul>
    <ul class="side-nav" id="mobile-demo">
       <?php
          echo $mobile_nav;          
        ?>
    </div>
  </nav>
    