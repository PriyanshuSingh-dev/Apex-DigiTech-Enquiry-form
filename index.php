<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
 <style>
    
 </style>
</head>
<body>
    <div class="wrapper">
        <form action="send.php" method="post">
            <h5> <img src="img/Apex-IT-Solutions_top-logo-removebg-preview.png" alt=""></h5>
            <h1>ENQUIRY FORM</h1>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="full name" name="fullname" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="Username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input id="email" type="email" name="email" placeholder="Email" required>
                    <i class='bx bxl-gmail'></i>
                </div>
                <div class="input-field">
                    <input type="number"  name="number" placeholder=" Phone Number" required>
                    <i class='bx bxs-phone'></i>
                </div>
            </div>
            <label> <input type="checkbox">
                I hereby declare that the above information provided is true and correct
            </label>
            <button name="send" type="submit" class="btn">SEND</button>
        </form>
    </div>
</body>
</html>


 

 
