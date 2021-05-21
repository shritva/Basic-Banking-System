
<?php 
  
// Username is root 
$user = 'root'; 
$password = '';  
  
// Database name is gfg 
$database = 'bank';  
  
// Server is localhost with 
// port number 3308 
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 
  
// Checking for connections 
if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  
// SQL query to select data from database 
$sql = "SELECT * FROM user_details "; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
     
    <!-- CSS FOR STYLING THE PAGE --> 
    <style> 
        table { 

            border-collapse: collapse;
            border: 1px solid black;
            align-self: center;
            margin: auto;
        } 
  
        h1 { 
            text-align: center;
            color: #000000; 
            font-size: xx-large; 
            font-family:  'Gill Sans MT',  
            ' Calibri'; 
        } 
  
         th{
          background-color: #FF9E56;
  color: white;
         }
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black;
            border-bottom: 1px solid #ddd; 
             padding: 15px;
              text-align: left;
        } 
  
        td { 
            font-weight: lighter; 
        } 
        tr:hover {
          background-color: #f5f5f5;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
        .btn{
           background-color: white;
  color: black;
  border: 2px solid #4CAF50;
   transition-duration: 0.4s;

        }
        .btn:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}
    </style> 
 <style>
body {
  background-image: url('5.jpg');
  background-size: cover;
}
</style> 
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ffffff;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #FFE9D9;
}
</style>
</head> 
  
<body> 
<ul>
  <li><a href="Home.html">THE BANK</a></li>
  <li><a href="New Transaction.php">View Users</a></li>
  <li><a href="Transaction History.php">Transaction History</a></li>
  <li><a href="About us.html">About Us</a></li>
</ul>
    <section> 
        <h1><u>New Transaction</u></h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>Id</th> 
                <th>Name</th> 
                <th>Email</th>
                <th>Current Balance</th> 
                <th>Operation</th> 
            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['id'];?></td> 
                <td><?php echo $rows['name'];?></td> 
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['current_balance'];?></td> 
                 <td> <a href="userdetails.php?id= <?php echo $rows['id'] ;?>"><button type="button" class="btn">Transact</button></a></td> 
              
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section>
</body> 
  
</html> 