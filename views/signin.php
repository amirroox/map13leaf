<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: IRANSans, sans-serif;
        }
        body {
            width: 100vw;
            overflow: hidden;
        }
        div.container , div.slide {
            width: 50%;
            float: left;
        }
        div.container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        div.slide {
            height: 100vh;
            background-image: url("<?=BASE_URL?>assets/img/world-map.jpg");
            /*background-color: rgb(66,191,237);*/
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        form.sign {
            display: flex;
            gap: 20px;
            flex-direction: column;
            padding: 40px;
            background-color: rgb(66,191,237);
            border-radius: 22px;
            box-shadow: 3px 3px 10px 2px rgb(66,191,237);
        }
        input {
            font-size: 18px;
            padding: 7px;
            border-radius: 13px;
            border: none;
            color: black;
        }
        input::placeholder {
            color: rgb(66,191,237);
        }
        button {
            font-size: 20px;
            background-color: blue;
            color: white;
            border: white solid 1px;
            padding: 8px;
            border-radius: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 style="margin-bottom: 20px;color: darkblue">SignIn Panel</h1>
    <form action="<?=BASE_URL?>dashboard.php" method="post" class="sign">
        <label>
            <input type="email" placeholder="Email" name="email" required>
        </label>
        <label>
            <input type="password" placeholder="Password" name="password" required>
        </label>
        <button type="submit">Sign In</button>
    </form>
    <div class="result"><?=$msg?></div>
</div>
<div class="slide"></div>
</body>
</html>


