<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>IQAC</title>
</head>
<body>
    <div class="login">
        <div class="login__box">
            <h1 class="login__heading">Department Login</h1>
            <form action="#" class="form">
                <div class="form__group">
                    <input type="text" id="username" class="form__input" placeholder="Username" required autocomplete="off">
                    <label for="username" class="form__label">Username</label>
                </div>
                <div class="form__group">
                    <input type="password" id="password" class="form__input" placeholder="Password" required autocomplete="off">
                    <label for="password" class="form__label">Password</label>
                </div>
                <div class="form__group">
                    <div class="form__radio-group">
                        <input type="radio" name="type" id="faculty" class="form__radio-input">
                        <label for="faculty" class="form__radio-label">
                           <span class="form__radio-button"></span> Faculty</label>
                    </div>
                    <div class="form__radio-group">
                        <input type="radio" name="type" id="admin" class="form__radio-input">
                        <label for="admin" class="form__radio-label">
                                <span class="form__radio-button"></span> Admin</label>
                    </div>
                </div>
                <div class="form__group margin-top-small">
                    <button class="btn">Log in &rarr;</button>`
                </div>
            </form>
        </div>
    </div>
</body>
</html>