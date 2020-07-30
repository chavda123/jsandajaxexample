<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>siblings demo</title>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<h1></h1>
<div class="content"></div>
<div id="newContent">
</div>
<script>
$.ajax({
// the URL for the request
url : 'ajaxpost1.php',
// the data to send
// (will be converted to a query string)
data : { id : 123 },
// whether this is a POST or GET request
method : 'GET',
// the type of data we expect back
dataType : 'json',
// code to run if the request succeeds;
// the response is passed to the function
success : function(json) {
$('<h1/>').text(json.title).appendTo('body');
$('<div class="content"/>')
.html(json.html).appendTo('body');
},
// code to run if the request fails;
// the raw request and status codes are
// passed to the function
error : function(xhr, status) {
alert('Sorry, there was a problem!');
},
// code to run regardless of success or failure
complete : function(xhr, status) {
alert('The request is complete!');
}
});
//$('#newContent').load('ajax2.html');
$('#newContent').load('ajax2.html #myDiv h1:first', function(html) {
alert('Content updated!');
});
</script>
 
</body>
</html>
