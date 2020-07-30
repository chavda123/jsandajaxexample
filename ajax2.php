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
url : 'http://query.yahooapis.com/v1/public/yql',
// the name of the callback parameter,
// as specified by the YQL service
jsonp : 'callback',
// tell jQuery we're expecting JSONP
dataType : 'jsonp',
// tell YQL what we want and that we want JSON
data : {
q : 'select title,abstract,url from search.news where query="cat"',
format : 'json'
},
// work with the response
success : function(response) {
console.log(response);
}
});
</script>
 
</body>
</html>
