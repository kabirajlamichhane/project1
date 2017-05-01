<?
include('navigation.php');
?>

<?php

    $conn=new mysqli("localhost","root","","100");
    $output='';
      
    $sql="SELECT * FROM newsletter_subscriber";
    $result=mysqli_query($conn,$sql);
    // // $res=mysqli_fetch_assoc($result);
    // if(!$result)
    // {
    //  die(mysqli_error($conn));
    // }
    // if(mysqli_num_rows($result)>0)
    // {
    $output.='
        <table class="table" border="1px">
        <tr>
            <th>ID</th>
            <th>EMAIL</th>  
            <th>DATE/TIME</th>      
        </tr>';
          
        while($res=mysqli_fetch_assoc($result))
            {
                $output.='
                <tr>
                    <td>'.$res['id'].'</td> 
                    <td>'.$res['email'].'</td>
                    <td>'.$res['date'].'</td>  
                </tr>';
            }

            $output.='</table>';
            header('Content-type: application/ms-excel');
            header("Content-Disposition: attachment; filename='download.xls'");
            echo $output;
        
      // }  
?>  

      

