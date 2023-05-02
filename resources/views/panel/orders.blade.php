<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/global.css') }}">
    <title>Список сотрудников</title>
</head>

<body>
    @include('panel.sidebar')
    <div class="sidebar-after">
        <div class="container">
            <h1 class="page-title">
                Заказы
                <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.63298 23.7333L0.533447 21.6398L10.2011 12L0.533447 2.36016L2.63298 0.266663L14.4001 12L2.63298 23.7333Z"
                        fill="#E4002B" />
                </svg>
            </h1>
            <div class="action-buttons">
                <div class="action-buttons__left">
                <a class="button {{ !request()->has('status') ? 'button__active' : '' }}" href="/orders">Все</a>
                    <a class="button {{ request()->status == 'waiting' ? 'button__active' : '' }}" href="?status=waiting">Новые заказы</a>
                    <a class="button {{ request()->status == 'process' ? 'button__active' : '' }}" href="?status=process">В разработке</a>
                    <a class="button {{ request()->status == 'complete' ? 'button__active' : '' }}" href="?status=complete">Готовые заказы</a>
                </div>
                <div class="action-buttons__right"></div>
            </div>
            <div class="card-group">
                @foreach ($orders as $order)
                <div class="card-group__item">
                    <div class="card">
                        <div class="card__header">
                            <span>Заказ №{{ $order->id }}</span>
                            <span class="order__status {{ $order->status_class() }}">
                                {{ $order->status() }}
                                {!! $order->status_icon() !!}
                            </span>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Список блюд</div>
                            <ul>
                                @foreach ($order->products as $product)
                                <li>{{ $product->name }}</li>
                                @endforeach
                            </ul>
                            <div class="card__title">Итого к оплате</div>
                            <div class="card__price">{{ $order->products->sum('cost') }} ₽</div>
                        </div>
                        <div class="card__bottom">
                            <a class="button__medium" href="#">Взять заказ</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>