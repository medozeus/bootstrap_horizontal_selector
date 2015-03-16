<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Accow - Bootstrap Horizontal Selector Demo</title>
	
	<link rel="shortcut icon" href="http://www.accow.nl/website/favicon.ico" type="image/x-icon" />
	
	<!-- Adobe Typekit -->
	<script src="//use.typekit.net/idq7tbo.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<!-- Jquery UI-->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	
	<!-- Horizontal Slider -->
	<link rel="stylesheet" type="text/css" href="css/horizontal_selector.css">
	<script src="js/horizontal_selector.js"></script>

</head>
<body>
<div id="forkMeOnGithub">
<a href="https://github.com/jorislive/bootstrap_horizontal_selector"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/a6677b08c955af8400f44c6298f40e7d19cc5b2d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png"></a>
</div>

<div id="headerTop">
<table>
<tr>
	<td id="logoAccow">&nbsp;</td>
	<td id="headerTopTitle" class=".tk-expo-sans-pro">
	<p class="colorBlue">&LT;script&GT;</p>
	<p id="selectionText">&nbsp;&nbsp;&nbsp;&nbsp;$("select").horizontalSelector();</p>
	<p class="colorBlue">&LT;/script&GT;</p>
	
	
	</td>
	<td id="headerTopRight"></td>
</tr>
</table>
<div id="contentSpacer"


</div>

<div id="selectorContainer">

<form id="testForm">

<select name="testSelectorA">
  <option value="1">Volvo</option>
  <option value="2" >Mercedes</option>
  <option value="3">Audi</option>
  <option value="4" >Masserati</option>
  <option value="5" selected>Renault</option>
  <option value="6" >Citroën</option>
  <option value="7">Ferrari</option>
  <option value="8">Volkswagen</option>  
</select>

<select name="testSelectorB">
  <option value="1" >Never</option>
  <option value="2" >Seldom</option>
  <option value="3" >Sometimes</option>
  <option value="4" >Often</option>
  <option value="5" >Always</option>
</select>

<select name="testSelectorC">
  <option value="1" >One</option>
  <option value="2" selected>Two</option>
  <option value="3" >Three</option>
</select>

<select name="testSelectorE">
  <option value="1" >Yes</option>
  <option value="0" >No</option>
</select>

<button id="toggleHide" class="btn btn-primary btn-xs">Hide</button>
<button id="toggleNarrow" class="btn btn-primary btn-xs">Narrow</button>


</form>

<div id="buttonContainer">
<button id="submit" class="btn btn-primary">Submit</button>
</div>

<div id="sizeMe">&nbsp;</div>

</div>


<script>

$("select").horizontalSelector();

$("#toggleHide").on("click",function(e){
	e.preventDefault(); 
	if($(this).html() == 'Hide'){
		$("select").hide();
		$(this).html('Show');
		$("#selectionText").html("&nbsp;&nbsp;&nbsp;&nbsp;$(\"select\").horizontalSelector().hide();");
	} else {
		$("select").show();
		$(this).html('Hide');
		$("#selectionText").html("&nbsp;&nbsp;&nbsp;&nbsp;$(\"select\").horizontalSelector();");
	}
});

$("#toggleNarrow").on("click",function(e){
	e.preventDefault(); 
	if($(this).html() == 'Narrow'){
		$(this).html('Medium');
		$(".hole-spacer").css("width", "1px");
	} else if($(this).html() == 'Medium') {
		$(this).html('Parent Width');
		$(".hole-spacer").css("width", "28px");	
	} else if($(this).html() == 'Parent Width') {
		$(this).html('Narrow');
		$(".hole-spacer").css("width", "");	
	}
});

$("#logoAccow").click(function(){
	window.location.href = "http://www.accow.nl";
});

$("#selectorContainer").resizable({
      minHeight: 660,
	  maxHeight: 660,
	  minWidth: 682,
});

$("#submit").click(function(event){
	event.preventDefault();
	var test = $('form').serialize();
	alert(test);
});

</script>

</body>
</html>