// const ws = new WebSocket('ws://127.0.0.1:8000')

// $(document).ready(function() {

// 	if ($("#form").length > 0) {
// 		$("#form").validate({
// 			rules: {
// 				movie_title: {
// 					required: true,
// 				},
// 				date: {
// 					required: true,
// 				},
// 				time: {
// 					required: true,
// 				},
// 				n_tickets: {
// 					required: true,
// 				},
// 			},
// 			messages: {
// 				movie_title: {
// 					required: "Please select a movie",
// 				},
// 				date: {
// 					required: "Please select valid date",
// 				},
// 				time: {
// 					required: "Please select valid time",
// 				},
// 				n_tickets: {
// 					required: "Please select number of tickets",
// 				},
// 			},
// 			submitHandler: function (form) {
// 				$.ajaxSetup({
// 					headers: {
// 						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// 					}
// 				});
// 				$('#submit').html('Please Wait...');
// 				$("#submit").attr("disabled", true);
// 				$.ajax({
// 					url: "{{url('/submitted')}}",
// 					type: "POST",
// 					data: $('#form').serialize(),
// 					success: function (response) {
// 						$('#submit').html('Submit');
// 						$("#submit").attr("disabled", false);
// 						alert('Ticket booked successfully');
// 						document.getElementById("form").reset();
// 					}
// 				});
// 			}
// 		})
// 	}

// });