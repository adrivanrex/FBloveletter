<?
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=dm6pdoiusnpch host=ec2-54-197-250-40.compute-1.amazonaws.com port=5432 user=aaavruexhjhrsy password=ORR0NvB7koq5BraZ7o88yRBUuO sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error."
   exit;
}else{
	echo "coneccted";
}
 
$result = pg_query($db, "CREATE DATABASE my_db");
?>