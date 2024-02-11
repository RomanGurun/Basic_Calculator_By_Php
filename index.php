<?php



if(isset($_POST['first'])){

$first=$_POST['first'];
$first = intval($first);

// $multi=$_POST['multiply'];
// $subtract=$_POST['subtract'];
// $add=$_POST['add'];

// $divide=$_POST['divide'];
$second=$_POST['second'];
$second = intval($second);
$operation = $_POST['operation'];
// echo"The multiplied value is ".$second; 

if($operation =="multiply"){

$result=$first*$second;
// echo "The result is".$result;
}   
if($operation =="divide"){
if($second == 0){
    $result="Invalid";
}else{
    $result=$first/$second;

    // echo "The result is".$result;    


}

    
    } 
    if($operation =="add"){

        $result=$first+$second;
    
// echo "The result is".$result;    
    
    }   
        if($operation =="subtract"){

            $result=$first-$second;

            // echo "The result is".$result;            

        }   
                     
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    /* box-sizing:border-box; */
}

form{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    margin:60px;
   padding:30px;
   border-radius:20px;
   height:24rem;
    border:solid 6px green;
background: linear-gradient(90deg, #9ebd13 0%, #008552 100%);
}


    input,button,select{

        outline:none;
        display:block;
        width:50%;
        text-align:center;
        font-size:20px;
        margin:20px;
        border-radius:20px
    }
select{
    width:10%;
    padding:5x;
    
}
.result{
color:red;
margin: 20px auto;
display:block;
text-align:center;
font-size:20px;
border-radius:20px;
width:20%;
background:yellow;
}
h1{
text-align:center;
color:red;



}

</style>

<body>



    <form action="" method="post">
 <h1>Calculator for Santosh</h1>


        <input type="number" name="first" id="">
        <select name="operation">
            <option value="multiply"> * </option>
            <option value="add" name="add"> + </option>
            <option value="subtract" name="subtract"> - </option>
            <option value="divide" name="divide"> / </option>
        </select>


        <input type="number" name="second" required>

        <button type="submit">Click Me</button>



    </form>


    <?php
// if(isset($result)):
 ?>
    <!-- <input type="text" value="<?php echo isset($result) ? $result : ''; ?>" readonly> -->

    <?php 

// endif;
?>


<?php if(isset($result)): ?>
    <span class="result"> Result is below :</span>
    <input type="text"  class="result" value="<?php echo isset($result) ? $result : ''; ?>" readonly>
<?php
 endif; 
?>

</body>

</html>