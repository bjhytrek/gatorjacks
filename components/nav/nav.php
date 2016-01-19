<nav class="nav" id="site-nav">
    <ul class="list">
        <?php 
                    $arrayLength = count($pages);
                    for($i=0; $i < $arrayLength; $i++) {
                        if ($pages[$i] == $page){
                           echo "<li class=\"active\"><a href=\"?page=$pages[$i]\">$pages[$i]</a></li>"; 
                            
                        }else{
                           echo "<li><a href=\"?page=$pages[$i]\">$pages[$i]</a></li>"; 
                        }
                        
    
}   ?>
    </ul>
</nav>