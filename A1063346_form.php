<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUKIM CAMP</title>
</head>
<body>
    <h1>這是表單</h1>
    <form acton = "submit.php" method = "POST">
        <p>
            您的姓名 : <input type = "text" placeholder = "劉OO" name = "username"> <br/>
        </p>
        <p>
            您的性別 : <br/>
                <input type = radio name = "gender" value = "male"> 男
                <input type = radio name = "gender" value = "female">女
            <br/>   
        </p>
        <p> 
            出生年月日 : <input type = "date" name = "birthdate"> <br/>
        </p>
        <p> 
            身分證字號 : <input type = "text" placeholder = "身份證字號" name = "id_NO"> </br>
        </p>
        <p> 
            聯絡電話 : <input type = "tel" placeholder = "0912345678" name = "phone_NO"> </br>
        </p>
        <p> 
            信箱 : <input type = "email" placeholder ="輸入信箱"name = "email">
        </p>
        
        <p> 
            就讀科系 : <input type = "text" placeholder = "資管110級" name = "ziguan"> </br>
        </p>
        <p> 
            飲食偏好 : </br>
                <input type = radio name = "meal" value = "normal">葷
                <input type = radio name = "meal" value = "vege">素
        </p>
        <p>
            是否有後悔修php?: 
                <input type = radio name= "regret" value ="yes">有
                <input type = radio name= "regret" value ="no">沒有
        </p>
        <p>
            自我介紹: </br>
                <textarea rows = "5" cols = "100" name = "describe_yourself"> </textarea>
        </p>
        <input type = "reset" value = "Clear"> <input type = "submit" value = "Save">
    </form>
</body>
</html>
