<nav>
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo hide-on-med-and-down">
          <img src="images/gator-jacks.psd.png" alt="GatorJacks Logo"> 
      </a>
      <a href="#" class="brand-logo center hide-on-large-only">
          <h1>Gator Jack's</h1> 
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
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
    