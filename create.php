<?php
include 'config.php';
include 'header.php';
?>


<div class="container">

<?php
	if (isset($_POST['submit'])) {
		if (empty($_POST['title']) OR empty($_POST['content'])) {
			echo "<p class='alert alert-warning'>
				لا يمكنك ترك احد الحقول فارغة
			</p>";
		}else{
			$date = date('Y-m-d');
			mysqli_query($db_connect, "insert into posts(title, content, created_at) values ('$_POST[title]', '$_POST[content]', '$date')");
			echo "<p class='alert alert-success'>تم الاضاقة</p>";
		}
	}
?>

	<h1>اضافة تدوينة جديدة</h1>
	<form action="create.php" method="post">
		<div class="form-group">
			<input type="text" name="title" class="form-control" placeholder="العنوان">
			<textarea name="content" rows="10" class="form-control" placeholder="المحتوى"></textarea>

		</div>
		<input type="submit" name="submit" class="btn btn-lg btn-primary" value="اضافة التدوينة">
	</form>
</div>

<?php
include 'footer.php';
?>