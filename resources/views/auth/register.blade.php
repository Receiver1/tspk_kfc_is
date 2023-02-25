<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/global.css') }}">
    <script type="text/javascript" src="{{ asset('js/imask.js') }}"></script>
    <title>Регистрация</title>
</head>

<body class="center-body">
    <div class="login-block">
        <h1 class="login-block__header">Регистрация</h1>
        <form class="login-block__form" action="/register" method="post">
            <div class="input-group">
                <input class="input__text" type="text" name="phone_number" placeholder="Ваш номер телефона" required>
                @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <input class="input__text" type="text" name="email" placeholder="Ваша почта" required>
                @error('email')
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
                <div class="checkbox-group">
                    <input class="input__checkbox" type="checkbox" id="personal-data-accept" required/>
                    <label class="label__checkbox" for="personal-data-accept">Я соглашаюсь с <span
                            class="text__red">правилами обработки персональных данных</span></label>
                </div>
                <p>У вас уже есть учётная запись? <a class="text__red" href="/login">Войти</a></p>
                <button class="button__large" type="submit">Зарегистрироваться</button>
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