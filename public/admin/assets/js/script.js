 $(document).ready(function($) {
	var token = $("input[name=_token]").val();
	var createCategory = $("#createCategory");
	var category = $("#category_name");

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	//Check category Name  
	category.on('keyup',(e) => {
		let categoryName = $("#category_name").val();
		let url = e.target.getAttribute('data-href'); 

		$.ajax({
				   type:'POST',
				   url:url,
				   dataType: 'json',
				   data:{
					   'categoryName':  categoryName
				   },
				   beforeSend:() => {
						console.log("Run this function before laravel")
				   },
				   success: (data) => {
					   console.log(data);
				   },
				   error: (data) => {
					console.log(data)
					 console.log(data.responseText)
				   },
				   complete: () => {
					  console.log("Completed")
				   }
			});
	});

	//Create Category
	createCategory.on('click',(e) => {
		e.preventDefault();
		let url = e.target.getAttribute('data-href'); 
		let categoryName = $("#category_name").val();
		
		$.ajax({
		   type:'POST',
	       dataType: 'json',
		   url:url,
		   data:{
			  'categoryName':categoryName
		   },
		   beforeSend: function() {
		   },
		   success: function(data) {
			   console.log(data);
		   },
		   error: function(data) {
				console.log("Error occured getting Data");
				console.log(data);
		   },
		   complete: function() {
			   
		   }
	   }); 

	});
});