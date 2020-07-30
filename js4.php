<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>siblings demo</title>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<ul id="myUnorderedList">
    <li>saasdas</li>
</ul>
<ul id="myUnorderedList1">

</ul>
<p class="expander">THis toggel testing done</p>
<script>
$('#myUnorderedList').delegate('li', 'click', function(e) {
var $myListItem = $(this).parent();
$('#myUnorderedList1').append($myListItem.html());
// ...
});
$('#myUnorderedList1').delegate('li', 'click', function(e) {
    alert("delegate done");
});
//$('#myUnorderedList').undelegate('li', 'click');
$('#myUnorderedList li').hover(function() {
alert("helper function hover");
});
$('p.expander').toggle(
    function() {
        $(this).prev().addClass('open');
    },
    function() {
        $(this).prev().removeClass('open');
    }
);
</script>
 
</body>
</html>
