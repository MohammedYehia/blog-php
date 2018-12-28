<?php 
include 'config.php';
include 'header.php' ?>

    <div class="container">

<?php
$posts = mysqli_query($db_connect, "SELECT * FROM posts ORDER BY created_at DESC");

if (mysqli_num_rows($posts) > 0) {
	while($post = mysqli_fetch_array($posts)){
	echo "
		<article>
		<a href='post.php?id=$post[id]'>
			<h1>$post[title]</h1>
		</a>
		<p class='text-muted'>
			$post[created_at]
		</p>
		<p >
			$post[content]
		</p>
		</article>

	";

}
}else{
	echo "<p class='alert alert-info'>
		لا يوجد بيانات
	</p>";
}

?>
        <h1>Hello</h1>
  

    </div><!-- /.container -->

<?php include 'footer.php' ?>