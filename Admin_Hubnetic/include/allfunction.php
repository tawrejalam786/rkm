<?php

include('../Includes/connection.php');

function selectalldata($table) 
  { 
    $select="SELECT * FROM $table"; 
    $select1=mysqli_query($GLOBALS['connection'],$select); 
    return $select1; 
  } 


  function selectdatabyid($table,$id) 
  { 
  $select="SELECT * FROM $table where id= $id"; 
  $select1=mysqli_query($GLOBALS['connection'],$select); 
  return mysqli_fetch_array($select1); 
 
  } 
 


function insert($data,$table) 
    { 
         $columns = ""; 
         $values = ""; 

         //print_r($data);
         //echo $table;

                         
                         foreach ($data as $column => $value) { 
                                     
                             $columns .= ($columns == "") ? "" : ", "; 
                                     
                             $columns .= $column; 
                                     
                             $values .= ($values == "") ? "" : ", "; 
                            $values .= $value; 
                         } 
                         
                        // echo $columns; 
                         //echo $values; 
                         
 $insert=("INSERT INTO $table ($columns) VALUES ($values)"); 
 //echo $insert; 
 if (mysqli_query($GLOBALS['connection'],$insert))
 {
   //echo 'inserted';
    } 
    else
    {

    echo 'error';

    }    
             
    } 


    function whiledata($table)
{
	$select="SELECT * FROM $table";
	$result=mysqli_query($GLOBALS['connection'],$select);
	return $result;
}


    function update($data,$table,$where) 
    { 
             foreach ($data as $coloum => $value) 
     { 
     $update=("UPDATE $table SET $coloum = $value WHERE id='$where'"); 
             //echo $update; 
             mysqli_query($GLOBALS['connection'],$update); 
     } 
             return true; 
    } 


    function deletedata($table,$id) 
    { 
     $delete=("DELETE FROM $table WHERE id=$id"); 
             mysqli_query($GLOBALS['connection'],$delete) or die(mysqli_error()); 
             return true; 
    } 


    function editdata($table,$id)
{
	$edit="SELECT * FROM $table WHERE $id=$id";
	$edit1=mysqli_query($GLOBALS['connection'],$edit);
	return mysqli_fetch_array($edit1);
}


?>