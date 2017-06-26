<?php
	include "../probjectphp/header.php";
	$servername = "localhost";
	$serveruser = "root";
	$serverpass = "root";
	$conn = new mysqli($servername,$serveruser,$serverpass,"my_item");
	if($conn->connect_error){
		die("链接数据库失败");
	}

?>
<ol class="breadcrumb">
        <li><a href="#">首页</a></li>
        <li class="active">前端资讯</li>
 </ol>


<!--列表框-->

<div class="row marginTop20">
	<?php
    	$websql = "SELECT * FROM my_article where ac_column='Web前端开发' limit 4";
		$webresult = $conn->query($websql);
	?>
	<div class="col-sm-6">
        <div class="list-group">
			  <a href="#" class="list-group-item list-group-item-success">
				<span class="glyphicon glyphicon-user"></span> Web前端开发
			  </a>
			  <?php
				 if($webresult->num_rows>0){
				 while($webrow = $webresult->fetch_assoc()){
			  ?>
			  <a href="#" class="list-group-item"><?php echo $webrow["ac_title"]; ?></a>
			<?php
				  }
				}
			?>
        </div>
    </div>
    <?php
    	$wlsql = "SELECT * FROM my_article where ac_column='网络营销' limit 4";
		$wlresult = $conn->query($wlsql);
	 ?>
    <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item  list-group-item-info">
            <span class="glyphicon glyphicon-question-sign"></span> 网络营销
          </a>
          <?php
          	if($wlresult->num_rows>0){
			while($wlrow = $wlresult->fetch_assoc()){
				
	
		  ?>
          <a href="#" class="list-group-item"><?php echo $wlrow["ac_title"]; ?></a>
          <?php
    			}
		}
	?>
        </div>
    </div>
 <?php
    $wlsql = "SELECT * FROM my_article where ac_column='javascript' limit 4";
	$wlresult = $conn->query($wlsql);
 ?>
 <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item  list-group-item-info">
            <span class="glyphicon glyphicon-question-sign"></span> javascript
          </a>
          <?php
          	 if($wlresult->num_rows>0){
			 while($wlrow = $wlresult->fetch_assoc()){
		  ?>
          <a href="#" class="list-group-item"><?php echo    $wlrow["ac_title"]; ?></a>
          <?php
    		}
	  	   }
	        ?>
        </div>
 </div>
<?php
    $wlsql = "SELECT * FROM my_article where ac_column='javascript' limit 4";
	$wlresult = $conn->query($wlsql);
 ?>
 <div class="col-sm-6">
      <div class="list-group">
          <a href="#" class="list-group-item  list-group-item-info">
            <span class="glyphicon glyphicon-question-sign"></span> jquery
          </a>
          <?php
          	 if($wlresult->num_rows>0){
			 while($wlrow = $wlresult->fetch_assoc()){
		  ?>
          <a href="#" class="list-group-item"><?php echo    $wlrow["ac_title"]; ?></a>
          <?php
    		}
	  	   }
	        ?>
      </div>
 </div>
 <?php
    $wlsql = "SELECT * FROM my_article where ac_column='javascript' limit 4";
	$wlresult = $conn->query($wlsql);
 ?>
 <div class="col-sm-6">
      <div class="list-group">
          <a href="#" class="list-group-item  list-group-item-info">
            <span class="glyphicon glyphicon-question-sign"></span> 前端框架
          </a>
          <?php
          	 if($wlresult->num_rows>0){
			 while($wlrow = $wlresult->fetch_assoc()){
		  ?>
          <a href="#" class="list-group-item"><?php echo    $wlrow["ac_title"]; ?></a>
          <?php
    		}
	  	   }
	        ?>
      </div>
 </div>
<?php
	include "../probjectphp/footer.php";
?>

