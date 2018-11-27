<?php include __DIR__.'./includes/header.php';?>

<div id="mainContent">
		<center><h1>BLOG</h1><a href="add" class="btn-success" style="text-decoration: none;">ADD</a></center>
		<div id="blogContent">
			<?php foreach($blogs as $blog):?>
				<div>
					<a href="./remove?idno=<?= $blog['idno'];?>"><span class="deleteBtn">&times;</span></a>
					<h3><?= $blog['title'];?></h3>
					<p><?= $blog['body'];?></p>
					<small><?= $blog['datecreated'];?></small>
					<a href="./viewblog?idno=<?= $blog['idno'];?>">VIEW</a>
				</div>
			<?php endforeach ?>
		</div>
</div>

<?php include __DIR__.'./includes/footer.php';?>

</body>
</html>
