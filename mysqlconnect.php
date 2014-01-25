<?
// Create connection
$con=mysql_connect("ec2-54-225-101-119.compute-1.amazonaws.com:5432","nohrdtlatgnfqc","q3X72n2i6Cllzi9t48K8o9j9Mf","db3cj65hnqhe5t");

// Check connection
if (mysql_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }
?>