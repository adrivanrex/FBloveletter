// Create connection
$con=mysqli_connect("ec2-54-225-101-119.compute-1.amazonaws.com:5432","nohrdtlatgnfqc","q3X72n2i6Cllzi9t48K8o9j9Mf","db3cj65hnqhe5t");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }