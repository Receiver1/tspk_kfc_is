<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/global.css') }}">
    <script type="text/javascript" src="{{ asset('js/imask.js') }}"></script>
    <title>Вход</title>
</head>

<body class="center-body">
    <div class="login-block">
        <h1 class="login-block__header">Вход</h1>
        <form class="login-block__form" action="/login" method="post">
            <div class="input-group">
                <input class="input__text" type="text" name="phone_number" placeholder="Ваш номер телефона" required>
                @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <input class="input__text" type="password" name="password" placeholder="Ваш пароль" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="login-block__bottom">
                <p>У вас нет учётной записи? <a class="text__red" href="/register">Зарегистрироваться</a></p>
                <button class="button__large" type="submit">Войти</button>
            </div>
        </form>
        <img src="/img/login-logo.svg" alt="KFC">
    </div>
</body>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const phoneInput = document.querySelector('input[name=phone_number]');
        const phoneMask = IMask(phoneInput, {
            mask: '+{7} (000) 000-00-00',
            overwrite: true,
        });

        const form = document.querySelector('.login-block__form');
        const submitButton = form.querySelector('button[type="submit"]');
        submitButton.addEventListener('click', (event) => {
            phoneInput.value = phoneMask.unmaskedValue;
        });
    });
</script>

</html>