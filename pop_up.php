<html>
<head>
<style>
#modal {
  background: white;

  position: fixed;
  width: 50%;
  top: 50%;
  left: 50%;
  margin: -25% 0 0 -25%;

  transform: scale(1.5); /* prefix me */

  opacity: 0;
  pointer-events: none;
}
dialogIsOpen #page-wrap {

  -webkit-filter: blur(5px) grayscale(50%);
  -webkit-transform: scale(0.9);

}
.dialogIsOpen #modal {
  
  transform: scale(1); 
  opacity: 1;
  pointer-events: auto;

}
#page-wrap, #modal {
  
  transition: all 0.4s ease;

}
body {
 
  -webkit-transform: translateZ(0);
}
</style>
<script>
$("button").on("click", function() {

  // State changes
  $("body").toggleClass("dialogIsOpen");

});
</script>
</head>
<body>

  <div id="page-wrap">
    <p id = "body">what ?</p>
    	<button id = "button">open</button>
  </div>

  <div id="modal">
    <p>I know</p>
  </div>

</body>
</html>
