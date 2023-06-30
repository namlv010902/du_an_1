<?php 
if(isset($_POST["submit"])){
  
 var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call API các tỉnh</title>
    
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h1>Chọn danh sách tỉnh</h1>
        <form action="#" method="POST">
            <select name="tinh" id="province">
            </select>
            <select name="huyen" id="district">
                <option  value="">chọn quận</option>
            </select>
            <select name="xa" id="ward">
                <option   value="">chọn phường</option>
            </select>
            <button name="submit" type="submit">Submit</button>
        </form>
        <h2 id="result"></h2>      
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./api.js"></script>
</body>

</html>