<?php

if (count($_POST) > 0) {
    
    
    $password = $_POST['password'];
    
    
    if ($password == "123456") {
        
        header("Location:  https://effortless-tanuki-a9a6f1.netlify.app/AFD.pdf");
    } else {
        print("mot de passe non valide");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>body {
	font-family: calibri;
}

.tblLogin {
	border: #95bee6 1px solid;
	background: #d1e8ff;
	border-radius: 4px;
}

.tableheader {
	font-size: 24px;
}

.tableheader td {
	padding: 20px;
}

.tablerow td {
	text-align: center;
}

.message {
	color: #FF0000;
	font-weight: bold;
	text-align: center;
	width: 100%;
}

.login-input {
	border: #CCC 1px solid;
	padding: 10px 20px;
}

.btnSubmit {
	padding: 10px 20px;
	background: #2c7ac5;
	border: #d1e8ff 1px solid;
	color: #FFF;
}</style>
</head>
<body>
    
<form name="frmUser" method="post" action="">

    <h1 class="text-center">Login</h1>

    <div>
        
        <div class="row">
            <label>Password</label> 
            <input type="password"
                name="password" class="full-width" required>
        </div>
        <div class="row">
            <input type="submit" name="submit" value="Submit"
                class="full-width ">
        </div>
    </div>
</form>

</body>
</html>