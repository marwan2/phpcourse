@include('admin.layout.header')
<h1>Exams Index</h1>

@foreach ($exams as $exam)
	<h2>
		<?php echo $exam['title']; ?>
	</h2>
@endforeach

@if(count($exams) >0)
	<div>Exams</div>
	@if(1>0)
	<div></div>
	@endif
@else
	</div>
@elseif
	<div>Exams</div>
@endif


<a href="<?= url('exams/add?cat=1') ?>">Add Exam</a>