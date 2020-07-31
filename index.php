<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<style>
	.welcome {
	  background: 50% 100%/50% 50% no-repeat radial-gradient(ellipse at bottom, #fff, transparent, transparent);
	  -webkit-background-clip: text;
	  background-clip: text;
	  color: transparent;
	  font-size: 10vw;
	  font-family: "Source Sans Pro", sans-serif;
	  -webkit-animation: reveal 3000ms ease-in-out forwards 200ms, glow 2500ms linear infinite 2000ms;
	          animation: reveal 3000ms ease-in-out forwards 200ms, glow 2500ms linear infinite 2000ms;
	}
	@-webkit-keyframes reveal {
	  80% {
	    letter-spacing: 8px;
	  }
	  100% {
	    background-size: 300% 300%;
	  }
	}
	@keyframes reveal {
	  80% {
	    letter-spacing: 8px;
	  }
	  100% {
	    background-size: 300% 300%;
	  }
	}
	@-webkit-keyframes glow {
	  40% {
	    text-shadow: 0 0 8px #fff;
	  }
	}
	@keyframes glow {
	  40% {
	    text-shadow: 0 0 8px #fff;
	  }
	}

	body {
	}
</style>
<body style="" class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">
	<?php include 'includes/navbar.php'; ?>
	  <div class="content-wrapper">
	  <!--
	  <div id="vid">
	  	<video autoplay muted loop src="videos/unifrigo.mp4"></video>
	  </div>
	-->
	  <div style="background: #b3b3ff;" class="jumbotron jumbotron-fluid text-center">
		<div class="welcome">
			<b>UNI</b>FRIGO
		</div>
		</div>

		<div class="container">
	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
				
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
						  <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="6" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="7" class=""></li>

		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img style="height: auto;" src="images/fridge.jpg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/fridge.jpg" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/fridge.jpg" alt="Third slide">
		                  </div>
						  <div class="item">
		                    <img src="images/fridge.jpg" alt="Third slide">
		                  </div>
						  <div class="item">
		                    <img src="images/fridge.jpg" alt="Third slide">
		                  </div>
						  <div class="item">
		                    <img src="images/fridge.jpg" alt="Third slide">
		                  </div>
						  <div class="item">
		                    <img src="images/fridge.jpg" alt="Third slide">
		                  </div>
						  <div class="item">
		                    <img src="images/fridge.jpg" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
						<div style="margin-top: 30px;" class="embed-responsive embed-responsive-16by9">
  							<iframe class="embed-responsive-item" src="videos/unifrigo.mp4"></iframe>
						</div>

		       		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>