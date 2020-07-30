<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>siblings demo</title>
  <style>
  ul {
    float: left;
    margin: 5px;
    font-size: 16px;
    font-weight: bold;
  }
  p {
    color: blue;
    margin: 10px 20px;
    font-size: 16px;
    padding: 5px;
    font-weight: bolder;
  }
  .hilite {
    background: yellow;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
 
<input type="text" name="btn" value="..."/>
<p>click only once</p>
 <a href="js2.php">click</a>
<script>
$('input').bind(
'click change', // bind to multiple events
{ foo : 'bar' }, // pass in data
function(eventObject) {
console.log(eventObject.type, eventObject.data);
// logs event type, then { foo : 'bar' }
});
$('p').one('click', function() {
$(this).click(function() { console.log('You clicked this before!'); });
//});
//$('p').unbind('click');
//var foo = function() { console.log('foo'); };
//var bar = function() { console.log('bar'); };
//$('p').bind('click', foo).bind('click', bar);
//$('p').unbind('click', bar); // foo is still bound to the click event
$('a').click(function(e) {
var $this = $(this);
if ($this.attr('href').match('evil')) {
e.preventDefault();
$this.addClass('evil');
}
});
</script>
 
</body>
</html>
