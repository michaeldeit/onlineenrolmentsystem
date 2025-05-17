<!-- search -->  
<!-- <div class="panel panel-default">
    <div class="panel-body">
     <form action="index.php?q=product" method="post">
       <div class="input-group custom-search-form">
            <input type="search" class="form-control" name="search" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" id="btnsearch" name="btnsearch" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>

    </div> 
</div> -->
<!-- end serch -->




<!-- category -->
 <div class="panel panel-default"> 
    <div class="panel-body">
    <div class="list-group">
     <div class="well well-sm " style="background-color:#098744;color:#fff;"><b> Courses </b> </div>
        <ul >
        <?php 
            $mydb->setQuery("SELECT distinct(COURSE_DESC)
                      FROM  `course`");
              $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
            echo ' <li><a href="index.php?q=product&id='.$result->COURSE_DESC.'" >'.$result->COURSE_DESC.'</a></li> ';
            }
        ?>
         </ul>
      </div> 
   </div> 
</div>
<!-- end category -->


<!-- login -->
<?php 
if(!isset($_SESSION['IDNO'])){
// REMOVE LOGIN PANEL FROM HOMEPAGE
?>
<!-- LOGIN PANEL REMOVED -->
<?php } ?>
 