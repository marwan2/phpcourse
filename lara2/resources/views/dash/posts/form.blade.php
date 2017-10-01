<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link href="{{url('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="well">
		<form action="#" class="form-inline">
			<div class="form-group">
				<input type="text" name="name" id="name" value="" placeholder="enter your name" class="form-control">
				<div class="name_errors"></div>
			</div>
			<div class="form-group">
				<input type="text" name="email" id="email" value="" placeholder="enter your email" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="mobile" id="mobile" value="" placeholder="enter your mobile" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-lg btn-success btn_submit">Submit</button>
			</div>
		</form>
	</div>

	<div class="posts_list">
		Lists will be here
	</div>
</div>
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>

<script type="text/javascript">
	
	$(document).ready(function(){

		$.ajax({
			url: '{{url('posts/list')}}',
			type: 'GET',
			dataType: 'html',
			beforeSend: function() {
				$('.posts_list').html('Loading posts.....')
			}
		})
		.done(function(response) {
			$('.posts_list').html(response);
		})
		.fail(function() {
			$('.posts_list').html('Error loading data');
		});
	});
	$('.btn_submit').on('click', function(event) {
		event.preventDefault();

		var btn = $(this);
		var $name = $('#name').val();
		var $email = $('#email').val();
		var $mobile = $('#mobile').val();

		if($name=='') {
			alert('please enter your name');
			$('#name').focus();
			return false;
		}if($email=='') {
			alert('please enter your email');
			$('#email').focus();
			return false;
		}if($mobile=='') {
			alert('please enter your mobile');
			$('#mobile').focus();
			return false;
		}

		$.ajax({
			url: '{{url('posts/save')}}',
			type: 'POST',
			dataType: 'json',
			data: {name:$name, email: $email, mobile: $mobile, _token:'{{csrf_token()}}'},
			beforeSend: function() {
				btn.button('loading');
			}
		})
		.done(function(response) {
			var output = response;

			/*if(output.status=='validation') {
				var messages = output.messages;
				$('.name_errors').html('please enter your name');
				$('.name_errors').addClass('alert alert-danger');
			}*/
			if(output.status=='success') {
				$('#name').val('');
				$('#email').val('');
				$('#mobile').val('');

				$('.post_table').find('tbody').prepend('<tr><td>'+$name+'</td><td>'+$email+'</td><td>'+$mobile+'</td></tr>');
				

			} else {
				alert('request failed');
			}
		})
		.fail(function() {
			alert("error");
		})
		.always(function() {
			btn.button('reset');
		});
		
	});


</script>

</body>
</html>