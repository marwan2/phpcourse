@include('admin.layout.header')
<body>
<h1>Add Exam</h1>

<form method="post" action="<?= url('exams/add') ?>">
	<?php echo csrf_field(); ?>
	<p>
		<input type="text" name="title">
	</p>

	<p>
		<input type="submit" value="Add Exam">
	</p>
</form>
</body>
</html>