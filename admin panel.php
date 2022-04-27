<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style> 
    html{
        background: url(pictures/21.jpg) no-repeat center center fixed;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size: cover;

    }
     html{
    background: url(pictures/12.jpg) no-repeat center center fixed;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size: cover;

  }

.main-nav2
{  
    float: right;
    list-style: none; 
    font-size: 20px;   
    padding: 5px;
   font-family: "Calibri", Times, serif;
   font-weight: bold;
   cursor: pointer;
   

}
.main-nav2 li
{

   display: inline-block;
}


.main-nav2 li a
{

   margin-right: 10px;
  color: white;
  text-decoration: none;
  font-size: 5px 20px;  
  padding: 5px 6px;
  text-transform: none;
  transition: 0.6s ease;
    
}
.main-nav2 li a:hover
{
  background-color: #fff;
  color: #000;
}

.main-nav
{  
    float: center;
    list-style: none;
    text-align: center;
    padding: 300px;
   font-family: "Calibri", Times, serif;
   font-weight: bold;
    cursor: pointer;
   

}

.main-nav li a
{


  color: white;
  text-decoration: none;
  font-size: 30px;
  border: 2px solid #fff;
  padding: 5px 6px;
  text-transform: none;
  transition: 0.6s ease;
    
}
.main-nav li a:hover
{
  background-color: #fff;
  color: #000;
}

</style>
</head>

    <body>

        <header>

                <ul class="main-nav2">

<div class="row">       
        <li><a href="index.php">Customer</a> </li>
        <li><a href="admin.php">&nbsp;Admin &nbsp;</a> </li>
         
         
    </ul>
</div>
 
    <ul class="main-nav">

<div class="row">       
        <li>  </br> <a href="add-product.php">Add Product </a> </li> </br> </br>  </li>
        <li><a href="add-category.php">Add Cartegory</a> </br> </br> </br>  </li>
        <li><a href="add-company.php">Add Company</a>  </br></br> </br> </li>
       


         
         
    </ul>
</div>



   


</header>