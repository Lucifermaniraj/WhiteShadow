<?php include '../php/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
		* {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            transition: all 1s;
        }

        a{
            text-decoration:none;
            color:inherit;
        }
        .header{
            padding:10px 0px;
        }
        .header div h2{
            text-align:center;
            font-size:42px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .navigation{
            display:flex;
            justify-content:space-between;
            padding:0px 50px;
            background-color:#333;
            color:#eee;
            align-items:center;
            font-size:24px;
        }
        .navigation div ul{
            display:flex;
            align-items:center;
            justify-content:center;
            list-style:none;
        }
        .navigation div ul li {
            margin:0px 10px;
            padding:5px;
            transition:all .1s;
        
        }
        .navigation div ul li:hover{
            background:#fff;
            color:#333;
        }
        .places-entry{
            /* text-align:center; */
        }
        .places-entry form table th,
        .tourist-entry form table th{
            text-align:left;
            width:40%;
            font-size:18px;
        }
        table tr{
            border:1px solid red;
        }
        .places-entry form input,
        .tourist-entry form input{
            width:100%;
            color:inherit;
            padding:5px 10px;
        }
      
        .left-part,
        .right-part {
            width: 100%;
            padding: 10px 30px;
        }
        ol{
            padding:0px 20px;
        }
        
        .left-part {
            background-color: #ccc;
        }
        
        .right-part {
            background-color: #aaa;
            padding: 10px;
        }

        .showdetails{
            display: flex;
            justify-content: space-between;
        }
	</style>

</head>

<body>
<section class="header">
    <div>
        <h2>Admin Panal</h2>
    </div>
    <div class="navigation">
        <div>
            <ul>
                <li> <a href="#">Places</a> </li>
                <li> <a href="#">Tourists</a> </li>
            </ul>
        </div>
        <div>
            <ul>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>

</section>

<section class="places-entry">
    <form action="">
        <center>
        <table cellspacing="10">
            <tr>
                <th><label for="place-reg"> Place Region </label> </th>
                <td><input type="text" id="place-reg" placeholder="Region Where the Place Lies.."></td>
            </tr>
            <tr>
                <th><label for="place-name"> Place Name </label> </th>
                <td><input type="text" id="place-name" placeholder="Name of the Place .."></td>
            </tr>
            <tr>
                <th><label for="place-desc"> Place Description </label> </th>
                <td><input type="text" id="place-desc" placeholder="Description of the Place.."></td>
            </tr>
            <tr>
                <th><label for="place-feas"> Fesiable to visit Currently ? </label> </th>
                <td><input type="text" id="place-feas" placeholder="Press 'Y' for yes and 'N' for No"></td>
                
            </tr>
            <tr>
                <th><label for="place-photo">Place Photo </label> </th>
                <td><input type="file" id="place-photo" placeholder="Photo of the Place.."></td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="button" value="save/update"></td>
            </tr>
        </table>
        <center>
    </form>
   
</section>
<hr>

<section class="tourist-entry">
<form action="">
        <center>
        <table cellspacing="10">
            <tr>
                <th><label for="place-reg"> Name </label> </th>
                <td><input type="text" id="place-reg" placeholder="Name of the Tourist.."></td>
            </tr>
            <tr>
                <th><label for="place-name">Checked IN From </label> </th>
                <td><input type="text" id="place-name" placeholder="Checked In Place Place Name .."></td>
            </tr>
            <tr>
                <th><label for="place-desc">Destination Place </label> </th>
                <td><input type="text" id="place-desc" placeholder="Name of the Destination Place.."></td>
            </tr>
            <tr>
                <th><label for="place-feas"> Estimated Time To Reach(in min) </label> </th>
                <td><input type="text" id="place-feas" placeholder="Estimated Time to reach the Destination"></td>
                
            </tr>
            <tr>
                <th><label for="place-photo">Current Position </label> </th>
                <td><input type="file" id="place-photo" placeholder="Current Possition of the Traveller.."></td>
            </tr>
            <tr>
                <th><label for="place-photo">Traveller Status </label> </th>
                <td><input type="file" id="place-photo" placeholder="Current Status of the Traveller.."></td>
            </tr>
            <tr>
                <th><label for="place-photo">Need for Rescue? </label> </th>
                <td><input type="text" id="place-feas" placeholder="Press 'Y' for yes and 'N' for No"></td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="button" value="save/update"></td>
            </tr>
        </table>
        <center>
    </form>
</section>

<hr>

<section class="showdetails">
    <div class="left-part">
        <h2 align="center">List of Tourists</h2>
        <ol>
            <?php 
                $result=fetch_tourists();
                foreach ($result as $key) {
                    echo "<li>".$key['tourist_name']." current status is ". $key['tourist_status'] ."</li>";
                }
            ?>
        </ol>
    </div>
    <div class="right-part">
        <h2 align="center">List of Places to Visit</h2>
        <ol>
            <?php 
                $result=fetch_places();
                foreach ($result as $key) {
                    if($key['feasible_visit']==1){
                        $feasible="feasible to visit";
                    }
                    else{
                        $feasible="not feasible to visit ";
                    }
                    echo "<li>".$key['place_name']." is ". $feasible ."</li>";
                }
            ?>
        </ol>
    </div>
</section>
</body>

</html>



<?php

function fetch_tourists(){
    $con=connect_db();
    $stmt = $con->prepare('SELECT * FROM tb_tourists ORDER BY tourist_id desc');
    $stmt->execute();
    $arr = [];
    $result= $stmt->get_result();
    while($row = $result->fetch_assoc()) {
       $arr[] = $row;
    }
    $stmt->close();
    $con->close();
    $con=null;
    return $arr;
}

function fetch_places(){
    $con=connect_db();
    $stmt = $con->prepare('SELECT * FROM tb_places ORDER BY place_id desc');
    $stmt->execute();
    $arr = [];
    $result= $stmt->get_result();
    while($row = $result->fetch_assoc()) {
       $arr[] = $row;
    }
    $stmt->close();
    $con->close();
    $con=null;
    return $arr;

}
?>