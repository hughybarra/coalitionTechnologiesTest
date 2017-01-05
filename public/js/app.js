'use strict'
$(document).ready(function(){
	console.log('ready to rock');


	// focus on product name
	$('input[name=productName').focus();




	$('#submit').click(function(e){
		console.log('cliced');

		// Prevent the form from submitting naturally
		e.preventDefault();
		e.stopPropagation();

		// reset the error fields 
		$('.errorContainer').text('');
		$('.serverError').text('');

		// grab input 
		var productName = $('#productName').val();
		var stockQuantity = $('#stockQuantity').val();
		var pricePerItem = $('#pricePerItem').val();



		console.log(productName);
		console.log(stockQuantity);
		console.log(pricePerItem);

		var valid = true;
		var errorsObject = {};
		var errorsArray = [];
		// validation 
		// check product name
		if(!productName){
			valid = false;
			errorsObject = {
				error: 'Product Name cannot be blank', 
				container: 'productNameError'
			};
			errorsArray.push(errorsObject);
			errorsObject = {};
		}
		// check stock quantity 
		if(!stockQuantity){
			valid = false;
			errorsObject = {
				error: 'Stock Quantity cannot be blank', 
				container: 'stockQuantityError'
			};
			errorsArray.push(errorsObject);
			errorsObject = {};
		}
		// check price per itm 
		if(!pricePerItem){
			valid = false;
			errorsObject = {
				error: 'Price Per Item cannot be blank', 
				container: 'pricePerItemError'
			};
			errorsArray.push(errorsObject);
			errorsObject = {};
		}

		
		// valid check 
		if(valid){
			console.log('ran');
			$('.form-group').removeClass('has-error');
			$('.form-group').addClass('has-success');


			console.log('ajax running');

						// Have to set the header so that server does not throw a hissy fit 
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('#_token').val()
				}
			});


			var  data = {
				 'product_name' : productName,				 
				 'quantity_in_stock': stockQuantity,
				 'price_per_item': pricePerItem 
			};


			$.ajax({
				type: 'POST', 
				url: '/product',
				data: data, 
				dataType: 'JSON', 
				success: function(response){
					console.log('success');
					console.log(response);
					// check for status code
					if(response.status === 200){
						// success redirect
						window.location.href = response.data.redirect;
					}else{
						console.log('error');
						console.log(response);
						// Reset form display error
						$('.server-error').text(response.data.errors);
					}
				}, 
			});
		}else{
			// display errors
			// loop over all of the errors
			for(var x = 0; x < errorsArray.length; x ++){
				console.log(errorsArray[x].container);
				var container = errorsArray[x].container;
				var message = errorsArray[x].error;
				var parent = $('.'+container).parent().addClass('has-error');
				// target our errors containers
				$('.'+container).text(message);
			}
		}

	});
	

	/*
	* displayOutput Function
	* 
	* Grabs the input fields and displays them in the bottom panel 
	*/
	var displayOutput = function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('#_token').val()
			}
		});

		$.ajax({
			type: 'GET', 
			url: '/products',
			success: function(response){
				console.log('ran');
				console.log(response);
				// parse response
				var data = JSON.parse(response);
				// console.log(data);
				console.log(data);


			}, 
		});

	};// end display output 

	displayOutput();
});// close doc ready