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
 
<ul id="myList">
  <li>One</li>
  <li>Two</li>
  <li class="hilite">Three</li>
  <li>Four</li>
</ul>
 
<ul>
  <li>Five</li>
  <li>Six</li>
  <li>Seven</li>
</ul>
 
<ul>
  <li>Eight</li>
  <li class="hilite">Nine</li>
  <li>Ten</li>
  <li class="hilite">Eleven</li>
</ul>
 
<p>Unique siblings: <b></b></p>
 
<script>
var len = $( ".hilite" ).siblings()
  .css( "background-color", "red" )
  .length;
  $('#myList').children().css("color","blue");;
$( "b" ).text( len );
</script>
 
</body>
</html>
