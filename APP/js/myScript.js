$(document).ready(function(){
	 $.ajax({
	   
	   		type: "POST",
	   		url: "getInfo.php",
	   		success: function(data) {
	   		
	   			var obj = JSON.parse(data);
	   				$("#F").html(obj.firstname);
                	$("#M").html(obj.middlename);
                	$("#L").html(obj.lastname);
                	$("#B").html(obj.birthday);
                	$("#A").html(obj.age);
                	$("#G").html(obj.gender);
                	$("#AD").html(obj.address);
                	$("#CN").html(obj.contact_number);
                	$("#S").html(obj.status);
                	$("#EA").html(obj.email_address);
                	$("#AN").html(obj.alternate_name);
			},
			error: function(data) {
				alert(data);
			}
	   
	   });
		
	$("#myCont").click(function(){
		$("#myDiv").show();
	});
	
	$("#myTable").hide();
	
	
	
    $("#myButton3").click(function(){
        $("#inputSinput").fadeOut();
    });
		$("#inputS").hide();

        $.ajax({

                type:"POST",
                url:"viewContact.php",
                success: function(data){
                $("#myTable").append(data);
                
                
             },
             error: function(data){
                alert(data);
             }
        });

    // =========================== E N D ============================ //

 $(function() {
   $( "#date" ).datepicker({dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true
    });
     showAnim: "pulsate"});

   // =========================== E N D ============================ //


   
  $("#myButton1").click(function(){

      $firstname = $("#firstname").val();
      $middlename = $("#middlename").val();
      $lastname = $("#lastname").val();
      $address = $("#address").val();
      $contact_number = $("#contact_number").val();
      $date = $("#date").val();
    
       if($firstname != "" && $middlename != "" && $lastname != "" && $address != "" && $contact_number != "" && $date != "") {
           var wordObj = {
                     
                        "firstname":$("input[name = 'firstname']").val(),
                        "middlename":$("input[name = 'middlename']").val(),
                        "lastname":$("input[name = 'lastname']").val(),
                        "address":$("input[name = 'address']").val(),
                        "contact_number":$("input[name = 'contact_number']").val(),
                        "date":$("input[name = 'date']").val()
                     
                        };   
                        
                      
            $.ajax({
               type:"POST",
               url:"addContact.php",
               data:wordObj,
               success: function(data){
                  console.log(data);
                	   $("#myTable").append(data);
               },
            	error: function(data){
                	alert(data);
             	}
            });
       	}else{
            alert("Please filled up all fields !");
         }
   });
        
    // =========================== E N D ============================ //
    
  $("#myButton2").click(function(){

		var wordObj = {      
						"contact_id": $("input[name = 'contact_id']").val(),
			        	"firstname":$("input[name = 'firstname']").val(),
                  "middlename":$("input[name = 'middlename']").val(),
                  "lastname":$("input[name = 'lastname']").val(),
                  "address":$("input[name = 'address']").val(),
                  "contact_number":$("input[name = 'contact_number']").val(),
                  "date":$("input[name = 'date']").val()
                        
                  };  
			alert(JSON.stringify(wordObj));
		   
		   $.ajax({
			   type:"POST",
			   url: "saveContact.php",
			   data: wordObj,
			   success: function(data){
				   $(document.getElementById(wordObj.contact_id)).html(data);
			   },
			   error: function(data){
			   }
		   });
		
	});
	
     // =========================== E N D ============================ //
     
   $("#myButton4").click(function(){
	    $value = $("input[name = 'search']").val();
	    if($value != ""){
			if($value != "search") {
	    		var datum = {"search" : $("input[name = 'search']").val()};
    				$.ajax({
    					type:"POST",
    					url: "searchContact.php",
    					data: datum,
    					success: function(data){
    						$("#inputSinput").html(data);
    						$("#inputSinput").fadeIn("slow");
    						
    						$("#myDiv").hide();
    					},
    					error: function(data){
    					}
    				});
			 }else{
    			$("#inputS").html("Mispelled!");
    			$("#inputS").fadeIn("not so fast");
    			$("#myDiv").hide();
			 } 
    		}else{
    	   	$("#inputS").html("Nothing to search!");
    			$("#inputS").fadeIn("not so fast");
    			$("#inputS").fadeOut(5000);
    			$("#myDiv").hide();
    		}
    
    });
    
      $("#myReg").click(function(){
      	 alert("wee");

	         $firstname = $("#firstname").val();
      		$middlename = $("#middlename").val();
      		$lastname = $("#lastname").val();
      		$birthday = $("#birthday").val();
      		$age = $("#age").val();
      		$gender = $("#gender").val();
      		$address = $("#address").val();
      		$contact_number = $("#contact_number").val();
      		$status = $("#status").val();
      		$alternate_name = $("#alternate_name").val();
      		$username = $("#username").val();
      		$email_address = $("#email_address").val();
      		$password = $("#password").val();
      		$password2 = $("#password2").val();
      		
       if($firstname != "" && $middlename != "" && $lastname != "" && $birthday != "" && $age != "" && $gender != "" && $address != "" && $contact_number != "" && $status != "" && $alternate_name != "" && $username != "" && $email_address != "" && $password != "" && $password2 != "") {
    
		      var registerObj = {
			      
			      "firstname":$("input[name = 'firstname']").val(),
			      "middlename":$("input[name = 'middlename']").val(),
			      "lastname":$("input[name = 'lastname']").val(),
			      "birthday":$("input[name = 'birthday']").val(),
			      "age":$("input[name = 'age']").val(),
			      "gender":$("input[name = 'gender']").val(),
			      "address":$("input[name = 'address']").val(),
			      "contact_number":$("input[name = 'contact_number']").val(),
			      "status":$("input[name = 'status']").val(),
               "alternate_name":$("input[name = 'alternate_name']").val(),
               "username":$("input[name = 'username']").val(),
               "email_address":$("input[name = 'email_address']").val(),
               "password":$("input[name = 'password']").val(),
               "password2":$("input[name = 'password2']").val()
               
		    };
	         
		     $.ajax({
			      type:"POST",
			      url:"pmook.php",
			      data:registerObj,
			      success:function(data){
			      },
			      error:function(data){
			      }
			      
		      });
		      
		 }else{
            alert("Please filled up all fields !");
       }
		 	
		     
		      
	
	   });
	  
	   
	   $("#myCont").click(function(){
	   			$("#myTable").dialog({
	   			   autoOpen: true,
					   resizable: false,
					   modal: true,
					   show: 'show',
					   hide: 'hide',
					   buttons: {
						   "close": function() {
				 			   $(this).dialog("close");
	   						   $("#myTable").append();
	   			
	   					}
	   				}
	   			});
	    });
	
	   /*http://css.dzone.com/news/css-message-boxes-different-me*/
	
  /*$(function() {
    var progressbar = $( "#progressbar" ).fadeOut(25000),
      progressLabel = $( ".progress-label" );
 
    progressbar.progressbar({
      value: false,
      change: function() {
        progressLabel.text( progressbar.progressbar( "value" ) + "%" );
      },
      complete: function() {
        progressLabel.text( "Complete!" );
      }
    });
 
    function progress() {
      var val = progressbar.progressbar( "value" ) || 0;
 
      progressbar.progressbar( "value", val + 1 );
 
      if ( val < 99 ) {
        setTimeout( progress, 100 );
      }
    }
 
    setTimeout( progress, 3000 );
  });
  <div id="progressbar"><div class="progress-label">Loading...</div></div>)
  
   <style>
  .progress-label {
    float: left;
    margin-left: 50%;
    margin-top: 5px;
    font-weight: bold;
    text-shadow: 1px 1px 0 #fff;
  }
  </style>
  
  http://demo.tutorialzine.com/2010/10/ajax-web-chat-jquery-css3/ajax-chat.html
  
  */
  
	
});

    // =========================== E N D ============================ //
    
  function deleteContact(contact_id){
				$(function(){
						$("#dialog").dialog({
						      resizable: false,
								modal: true,
								show: ('bounce'),
								hide: ('explode'),
								buttons: {
									"yes": function() {
										$(this).dialog("close");
											var wordObj = {"contact_id":contact_id};
						 				$.ajax({
						       			type:"POST",
						       			data: wordObj,
						       			url:"deleteContact.php",
						       			success:function(data){ 
						       				$(document.getElementById(contact_id)).remove();
						       			},
						  		 			error:function(data){}
										});     
									 },
									"no": function() {
										$(this).dialog("close");
									}
								}
						});
				});
  		}

    // =========================== E N D ============================ //
    
  function editContact(contact_id){
		var confirmation = confirm("Are you sure you want to edit it ?"); 
			if(confirmation == true){
				var wordObj = {"contact_id":contact_id};

					$.ajax({
						type:"POST",
						url: "editContact.php",
						data: wordObj,
						success: function(data){
							var obj = JSON.parse(data);
					
								$("input[name = 'contact_id']").val(obj.contact_id);
								$("input[name = 'firstname']").val(obj.firstname);
								$("input[name = 'middlename']").val(obj.middlename);
								$("input[name = 'lastname']").val(obj.lastname);
								$("input[name = 'address']").val(obj.address);
								$("input[name = 'contact_number']").val(obj.contact_number);
			    					$("input[name = 'date']").val(obj.date);
						},
						error: function(data){
						}
					});
			}	 
  }
  
  // =========================== E N D ============================ //
  
  /*function shareContact(contact_id){
  		var confirmation = confirm("Share it ?");
  			if(cinfirmation == true){
  				var wordObj = {"contact_id":contact_id};
  				
  					$.ajax({
  						type: "POST",
  						url: "shreContact.php",
  						data: wordObj,
  						success: function(data){
  							var obj = JSON.parse(data);
  						}
  						error: function(data){
  							alert("cannot share !!");
  						}
  	
  					});
  			}	
  	}							
  */
  /*facebook/sh4dOwh4xOr*/	
