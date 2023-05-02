<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/global.css') }}">
    <title>Товары</title>
</head>

<body>
    @include('panel.sidebar')
    <div class="sidebar-after">
        <div class="container">
            <h1 class="page-title">
                Товары
                <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.63298 23.7333L0.533447 21.6398L10.2011 12L0.533447 2.36016L2.63298 0.266663L14.4001 12L2.63298 23.7333Z"
                        fill="#E4002B" />
                </svg>
            </h1>
            <div class="action-buttons">
                <div class="action-buttons__left"></div>
                <div class="action-buttons__right">
                    <a class="button" href="#">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.5 17.5H2.6L13.675 6.425L12.575 5.325L1.5 16.4V17.5ZM16.85 5.35L13.65 2.15L14.7 1.1C14.9833 0.81667 15.3333 0.675003 15.75 0.675003C16.1667 0.675003 16.5167 0.81667 16.8 1.1L17.9 2.2C18.1833 2.48334 18.325 2.83334 18.325 3.25C18.325 3.66667 18.1833 4.01667 17.9 4.3L16.85 5.35ZM15.8 6.4L3.2 19H0V15.8L12.6 3.2L15.8 6.4ZM13.125 5.875L12.575 5.325L13.675 6.425L13.125 5.875Z"
                                fill="#22EE36" />
                        </svg>

                        Редактировать
                    </a>
                    <a class="button" href="#">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 10.675H15V9.175H5V10.675ZM10 20C8.63333 20 7.34167 19.7375 6.125 19.2125C4.90833 18.6875 3.84583 17.9708 2.9375 17.0625C2.02917 16.1542 1.3125 15.0917 0.7875 13.875C0.2625 12.6583 0 11.3667 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.02917 3.825 2.9375 2.925C3.84583 2.025 4.90833 1.3125 6.125 0.7875C7.34167 0.2625 8.63333 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3667 19.7375 12.6583 19.2125 13.875C18.6875 15.0917 17.975 16.1542 17.075 17.0625C16.175 17.9708 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20ZM10 18.5C12.3667 18.5 14.375 17.6708 16.025 16.0125C17.675 14.3542 18.5 12.35 18.5 10C18.5 7.63333 17.675 5.625 16.025 3.975C14.375 2.325 12.3667 1.5 10 1.5C7.65 1.5 5.64583 2.325 3.9875 3.975C2.32917 5.625 1.5 7.63333 1.5 10C1.5 12.35 2.32917 14.3542 3.9875 16.0125C5.64583 17.6708 7.65 18.5 10 18.5Z"
                                fill="#E4002B" />
                        </svg>

                        Удалить выбранные
                    </a>
                </div>
            </div>
            <table class="table-custom">
                <thead>
                    <tr>
                        <th></th>
                        <th>№</th>
                        <th>Наименование</th>
                        <th>Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paginator->items() as $product)
                    <tr>
                        <td><input class="input__checkbox" type="checkbox" /></td>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->cost }} ₽</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if ($paginator->hasPages())
            <div class="navigation-buttons">
                <a class="navigation-button" href="{{ $paginator->previousPageUrl() }}">
                    <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.05573 1.77234e-06L10.6001 1.5166L3.48883 8.5L10.6001 15.4834L9.05573 17L0.400098 8.5L9.05573 1.77234e-06Z"
                            fill="white" />
                    </svg>
                </a>
                <div class="navigation-button__items">
                    @for ($i = 1; $i <= $paginator->lastPage(); ++$i)
                    <a class="{{ $paginator->currentPage() == $i ? 'navigation-button__item-active' : '' }}" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                    @endfor
                </div>
                <a class="navigation-button" href="{{ $paginator->nextPageUrl() }}">
                    <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.94427 17L0.3999 15.4834L7.51117 8.5L0.399902 1.5166L1.94427 2.70026e-07L10.5999 8.5L1.94427 17Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
            @endif
        </div>
    </div>
</body>

</html>