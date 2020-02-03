<?php
include_once '../config.php';




if(isset($_POST['tourist_submit'])){
    save_tourist_details();
}




if(isset($_POST['places_submit'])){
    save_place_details();
}





function save_tourist_details(){
    
    $con=connect_db();
    $stmt = $con->prepare('INSERT INTO tb_tourists(tourist_name,tourist_checkedin,tourist_destination,tourist_time_to_reach,tourist_cur_pos,tourist_status,tourist_rescue_needed) VALUES(?,?,?,?,?,?,?)');
    $stmt->bind_param("sssssss", $tname,$tcin,$tdest,$ttreach,$tcpos,$tstat,$trn);
    $tname=trim($_POST['tor_name']," " );
    $tcin=trim($_POST['tor_checkedin']," " );
    $tdest=trim($_POST['tor_destn']," " );
    $ttreach=trim($_POST['esti_time']," " );
    $tcpos=trim($_POST['tor_cur_pos']," " );
    $tstat=trim($_POST['tor_stat']," " );
    $vari=trim($_POST['tor_rescue'],"" );
    if($vari=='Y' || $vari=='y'){
        $trn=1;
    }else{
        $trn=0;
    }
    
    if($stmt->execute())
        {
            header("location: ../admin/");
        }
        else{
            die('error on data saving ..');
        }
        
    $stmt->close();
    $con->close();
    $con=null;
}


function save_place_details(){
    
    $con=connect_db();
    $stmt = $con->prepare('INSERT INTO tb_places(place_region,place_name,place_description,feasible_visit) VALUES(?,?,?,?)');
    $stmt->bind_param("ssss", $pregion,$pname,$pdesc,$pfeasible);
    $pregion=trim($_POST['place-reg']," " );
    $pname=trim($_POST['place-name']," " );
    $pdesc=trim($_POST['place-desc']," " );
    $vari=trim($_POST['place-feas']," " );
    if($vari=='Y' || $vari=='y'){
        $pfeasible=1;
    }else{
        $pfeasible=0;
    }
    
    if($stmt->execute())
        {
            header("location: ../admin/");
        }
        else{
            die('error on data saving ..');
        }
        
    $stmt->close();
    $con->close();
    $con=null;
}



?>