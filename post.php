<?php 
include 'config.php';
include 'header.php' ?>

    <div class="container">

<?php

if (isset($_GET['id']) AND $_GET['id'] > 0) {
	$posts = mysqli_query($db_connect, "SELECT * FROM posts WHERE id = '$_GET[id]' ");
	if (mysqli_num_rows($posts) > 0) {
		$post = mysqli_fetch_array($posts);
		echo "
			<article>
			<a href='post.php?id=$post[id]'>
				<h1>$post[title]</h1>
			</a>
			<p class='text-muted'>
				" . nl2br($post['created_at']) . "
			</p>
			<p >
				$post[content]
			</p>
			</article>

		";

	}else{
		echo "<p class='alert alert-info'>
			لا يوجد بيانات
		</p>";
	}
}


?>
        <h1>Hello</h1>
  

    </div><!-- /.container -->

<?php include 'footer.php' ?>