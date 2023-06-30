<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pagetwo.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="box">
                <p>Регистрация</p>
                <form action="../telegram.php" method="POST">
                    <div class="field name">
                        <input class="input-name" type="text" placeholder="Name" required name="user_name">
                    </div>
                    <div class="field-email">
                        <input class="input-name" type="email" placeholder="Email" required name="user_email">
                    </div>
                    <div class="field-password">
                        <input class="input-name" type="password" placeholder="password" required name="user_pass">
                    </div>
                    <div class="fieled-checbox">
                        <input class="input-check" type="checkbox" required><span class="check-span">Вы согласны дать нам свои данные.</span>
                    </div>
                   <button class="box-btn">Войти</button>
                </form>
            </div>
        </div>
    </header>