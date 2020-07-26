<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Find Us!</b></h3>
	  	</div>
	  	<!--div class="box-body">
		  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5937.939965781655!2d20.939383!3d41.915004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81a94957b76ea56b!2sUnifrigo!5e0!3m2!1sen!2sus!4v1595459954898!5m2!1sen!2sus" width="380" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	  	</div-->
		  <div class="embed-responsive embed-responsive-4by3">
			<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5937.939965781655!2d20.939383!3d41.915004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81a94957b76ea56b!2sUnifrigo!5e0!3m2!1sen!2sus!4v1595459954898!5m2!1sen!2sus"></iframe>
		</div>
	</div>
</div>
<!--
<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>
-->
<!--
	<div style="margin-top: 30px;" class="mapi">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5937.939965781655!2d20.939383!3d41.915004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81a94957b76ea56b!2sUnifrigo!5e0!3m2!1sen!2sus!4v1595459954898!5m2!1sen!2sus" width="825" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					-->

<!--div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Na Ndiq!</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p>Mer njoftime dhe te rejat nga ne, direkt ne emailin tuaj.</p>
	    	<form method="POST" action="">
		    	<div class="input-group">
	                <input type="text" class="form-control" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>">
	                <span class="input-group-btn">
	                    <button type="submit" class="btn btn-info btn-flat" action="sendemail.php"><i class="fa fa-envelope"></i> </button>
	                </span>
	            </div>
		    </form>
	  	</div>
	</div>
</div>
-->
<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Check our social media!</b></h3>
	  	</div>
	  	<div class='box-body'>
	    	<a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
	    	<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
	    	<a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
	    	<a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
	    	<a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
	  	</div>
	</div>
</div>
