<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload image</title>
<link href = "style/style.css" rel = "stylesheet" type = "text/css" />   
<script language = "javascript" type = "text/javascript">

<!--
function startUpload(){
      document.getElementById('f1_upload_process').style.visibility = 'visible';
      document.getElementById('f1_upload_form').style.visibility = 'hidden';
      return true;
}

function stopUpload(success){
      var result = '';
      if (success == 1){
         result = '<span class="msg">The image was successfully uploaded!<\/span><br/><br/>';
      }
      else {
         result = '<span class="emsg">There was an error during file upload!<\/span><br/><br/>';
      }
      document.getElementById('f1_upload_process').style.visibility = 'hidden';
      document.getElementById('f1_upload_form').innerHTML = result + '<label>File: <input name = "myfile" type = "file" size = "30" /><\/label><label><input type = "submit" name = "submitBtn" class = "sbtn" value = "Upload" /><\/label>';
      document.getElementById('f1_upload_form').style.visibility = 'visible';      
      return true;         
}
//-->

</script>   
</head>

<body>
       <div id = "container">
            <div id = "header"><div id = "header_left"></div>
            <div id = "header_main">Change your avatar</div><div id="header_right"></div></div>
            <div id = "content">
                <form action = "upload.php" method = "post" enctype = "multipart/form-data" target = "upload_target" onsubmit = "startUpload();" >
                     <p id = "f1_upload_process">Loading...<br/><img src = "loader.gif" /><br/></p>
                     <p id = "f1_upload_form" align = "center"><br/>
                         <label>File:  
                              <input name = "myfile" type = "file" size="30" />
                         </label>
                         <label>
                             <input type = "submit" name = "submitBtn" class = "sbtn" value = "upload" />
                         </label>
                     </p>
                     
                     <iframe id = "upload_target" name = "upload_target" src = "icons" style = "width:0;height:0;border:0px solid #fff;"></iframe>
                 </form>
             </div>
         </div>
                 
</body>   
