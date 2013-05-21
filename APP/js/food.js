$(document).ready(function(){

$(function() {
   $("#date").datepicker({dateFormat: "yy-mm-dd",
   changeMonth: true,
   changeYear: true,
   showAnim: "pulsate"});
});   

$("#foodAdd").click(function(){
      $appetizer = $("#appetizer").val();
      $viand = $("#viand").val();
      $desert = $("#desert").val();
      $fruits = $("#fruits").val();
      $date = $("#date").val();
         if($appetizer != "" && $viand != "" && $desert != "" && $fruits != "" && $date != "") {
            var wordObj = {
                           "appetizer":$("input[name = 'appetizer']").val(),
                           "viand":$("input[name = 'viand']").val(),
                           "desert":$("input[name = 'desert']").val(),
                           "fruits":$("input[name = 'fruits']").val(),
                           "date":$("input[name = 'date']").val()
                          };          
            $.ajax({
                type:"POST",
                url:"addFood.php",
                data:wordObj,
                success: function(data){
                $(".foodTable").append(data);
                },
                error: function(data){
                alert(data);
                }
            });
         }else{
            alert("don't leave unfilled");
         }
});

$("#foodSave").click(function(){

		var wordObj = {      
		               "food_id": $("input[name = 'food_id']").val(),
			        		"appetizer":$("input[name = 'appetizer']").val(),
			        		"viand":$("input[name = 'viand']").val(),
			        		"desert":$("input[name = 'desert']").val(),
			        		"fruits":$("input[name = 'fruits']").val(),
			        		"date":$("input[name = 'date']").val()
			        	  };
			alert(JSON.stringify(wordObj));
		      $.ajax({
			      type:"POST",
			      url: "saveFood.php",
			      data: wordObj,
			      success: function(data){
				      $(document.getElementById(wordObj.food_id)).html(data);
			      },
			      error: function(data){
			      }
		     });
		
});

});

function delete(food_id){
   $(function(){
	   $("#dialog").dialog({
		   resizable: false,
			modal: true,
			show: ('bounce'),
			hide: ('explode'),
			buttons: {
			   "yes": function() {
				   $(this).dialog("close");
					   var wordObj = {"food_id":food_id};
						   $.ajax({
						      type:"POST",
						      data: wordObj,
						      url:"deleteFood.php",
						      success:function(data){ 
						         $(document.getElementById(food_id)).remove();
						      },
						  		error:function(data){
						  		}
							});     
				},
				"nope": function() {
				   $(this).dialog("close");
				}
			}
		});
	});
}

function edit(food_id){
   var confirmation = confirm("Are you sure you want to edit it ?"); 
	   if(confirmation == true){
	      var wordObj = {"food_id":food_id};

	         $.ajax({
			      type:"POST",
			      url: "editFood.php",
			      data: wordObj,
			      success: function(data){
				      var obj = JSON.parse(data);
				         $("input[name = 'food_id']").val(obj.food_id);
				         $("input[name = 'appetizer']").val(obj.appetizer);
				         $("input[name = 'viand']").val(obj.viand);
			            $("input[name = 'desert']").val(obj.desert);
			            $("input[name = 'fruits']").val(obj.fruits);
			            $("input[name = 'date']").val(obj.date);
			      },
			      error: function(data){
			      }
	      });
	   }else{
			alert("ok"); 	  
		}	 
}
