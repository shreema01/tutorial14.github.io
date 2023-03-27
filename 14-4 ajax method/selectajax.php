<?php
$con=mysqli_connect("localhost","root","","web");

?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    function myfun(datavalue){
        $.ajax({
            url:'selectcourse.php',
            type:'POST',
            data:{datapost : datavalue},
            success:function(result){
                $('#dataget').html(result);
            }
        });
    }
</script>
</head>
<body>
<center>
<form>
    Get data from Database
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name=""></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="text" name=""></td>
        </tr>
        <tr>
            <td>Course:</td>
            <td><select onchange="myfun(this.value)">
                <option> Select any one </option>
                <?php
                $q="select * from course";
                $row=mysqli_query($con,$q);
                while($result=mysqli_fetch_array($row))
                { ?>
                <option value="<?php echo $result['cid'] ?>"><?php echo $result['name'] ?></option>
                <?php
                }
                ?>
            </select></td>
        </tr>
        <tr>
            <td>Year:</td>
            <td><select id="dataget">
                <option> Select any one </option>
            </select></td>
        </tr>
    </table>
</form>
</center>
</body>
</html>