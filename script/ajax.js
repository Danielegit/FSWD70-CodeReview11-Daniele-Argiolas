$(document).ready(function(){




$('.search-box input[type="text"]').on("input", function(){
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings("#myrow");

 		$("#default").css("display", "none");

        if(inputVal.length){

            	$.get("get_result/get_results.php", {term: inputVal}).done(function(data){

                resultDropdown.html(data);
                
            });
        }else{

            resultDropdown.empty();

            $("#default").css("display", "block");
        }

$('#btn').click(function() {

	 	$('.search-box input[type="text"]').val('');

	 	resultDropdown.empty();

        $("#default").css("display", "block");
	});

});


$('.search-box input[type="text"]').on("input", function(){
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings("#myrow_c");

 		$("#default").css("display", "none");

        if(inputVal.length){

            	$.get("get_result/get_results_concert.php", {term: inputVal}).done(function(data){

                resultDropdown.html(data);
                
            });
        }else{

            resultDropdown.empty();

            $("#default").css("display", "block");
        }

$('#btn').click(function() {

	 	$('.search-box input[type="text"]').val('');

	 	resultDropdown.empty();

        $("#default").css("display", "block");
	});

});



$('.search-box input[type="text"]').on("input", function(){
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings("#myrow_todo");

 		$("#default").css("display", "none");

        if(inputVal.length){

            	$.get("get_result/get_results_todo.php", {term: inputVal}).done(function(data){

                resultDropdown.html(data);
                
            });
        }else{

            resultDropdown.empty();

            $("#default").css("display", "block");
        }

$('#btn').click(function() {

	 	$('.search-box input[type="text"]').val('');

	 	resultDropdown.empty();

        $("#default").css("display", "block");
	});

});

	


});