<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<!--
Nuk duhet!!
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script-->
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
<div class="content-wrapper">
	<!-- Header -->
	<header class="bg-primary text-center py-5 mb-4">
	<div class="container">
		<h1 class="font-weight-light text-white">EKIPA</h1>
	</div>
	</header>

	<!-- Page Content -->
	<div class="container">
	<div style="margin-top: 30px;" class="row">
		<!-- Team Member 1 -->
		<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-0 shadow">
			<img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
			<div class="card-body text-center">
			<h5 class="card-title mb-0">Team Member</h5>
			<div class="card-text text-black-50">Web Developer</div>
			</div>
		</div>
		</div>
		<!-- Team Member 2 -->
		<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-0 shadow">
			<img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
			<div class="card-body text-center">
			<h5 class="card-title mb-0">Team Member</h5>
			<div class="card-text text-black-50">Web Developer</div>
			</div>
		</div>
		</div>
		<!-- Team Member 3 -->
		<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-0 shadow">
			<img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
			<div class="card-body text-center">
			<h5 class="card-title mb-0">Team Member</h5>
			<div class="card-text text-black-50">Web Developer</div>
			</div>
		</div>
		</div>
		<!-- Team Member 4 -->
		<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-0 shadow">
			<img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
			<div class="card-body text-center">
			<h5 class="card-title mb-0">Team Member</h5>
			<div class="card-text text-black-50">Web Developer</div>
			</div>
		</div>
		</div>
	</div>
	<!-- /.row -->

	</div>
<!-- /.container -->	      
</div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$('#add').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		quantity++;
		$('#quantity').val(quantity);
	});
	$('#minus').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		if(quantity > 1){
			quantity--;
		}
		$('#quantity').val(quantity);
	});

});
</script>
</body>
</html>