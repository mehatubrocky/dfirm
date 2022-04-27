<?php
session_start();
include("index.php");
?>
<!Doctype html>
<html>
<style>
body
{

}
.btn-group button {
  background-image: url(pictures/milk.jpg);
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 50px 50px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: right; /* Float the buttons side by side */

}
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  right: 30%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
<body>


<div class="btn-group">
	<div class="vertical-center">
  <button>Milk</button>
  <button>Ghee</button>
  <button>Butter</button>
  <button>Bread</button>
  <button>Paneer</button>
  </div>
</div>

</body>
</html>