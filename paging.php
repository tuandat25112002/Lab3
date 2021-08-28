


<div class="container-fluid" style="margin:20px 0px">

<?php 
for($i =1; $i<=$totalpages;$i++){?>
    <?php if($i!= $no_page){?>
    <a class=" btn btn-outline-dark" href=".?category_id=<?php echo $category_id?>&?per_page=<?php echo $item_per_page?>&nopage=<?php echo $i?>"><?php echo $i?></a>
    <?php } else {?>
        <a href="?per_page=<?php echo $item_per_page?>&nopage=<?php echo $i?>" class="btn btn-dark text-light"><?php echo $i ?></a>
    <?php } ?>    

<?php }?>
</div>