<!DOCTYPE html>
<html>
<head>
<style> 
#example1 {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px;
}

#example2 {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px #888888;
}

#example3 {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px red;
}
</style>
</head>
<body>

<h1>The box-shadow Property</h1>
<p>The box-shadow property defines the shadow of an element:</p>

<h2>box-shadow: 5px 10px:</h2>
<div id="example1">
  <p>A div element with a shadow. The first value is the horizontal offset and the second value is the vertical offset. The shadow color will be inherited from the text color.</p>
</div>

<h2>box-shadow: 5px 10px #888888:</h2>
<div id="example2">
  <p>You can also define the color of the shadow. Here the shadow color is grey.</p>
</div>

<h2>box-shadow: 5px 10px red:</h2>
<div id="example3">
  <p>A red shadow.</p>
</div>

</body>
</html>
