<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>end demo</title>
  <style>
  p {
    margin: 10px;
    padding: 10px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
 
<a href="test1.php">test1</a>
<a href="test2.php">test2</a>
<a href="test3.php">etst3</a>
 
<script>
(function($){
$.fn.showLinkLocation = function() {
return this.filter('a').each(function(){
$(this).append(
' (' + $(this).attr('href') + ')'
);
});
};
}(jQuery));
// Usage example:
$('a').showLinkLocation();
</script>
 
</body>
</html>
