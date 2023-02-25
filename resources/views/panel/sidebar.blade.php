<div class="sidebar">
        <div class="sidebar__logo">
            <img src="{{ asset('img/sidebar-logo.svg') }}" alt="KFC">
        </div>
        <div class="sidebar__account">
            <img src="{{ asset('img/sidebar-account.svg') }}" alt="Avatar">
            <div>
                <div class="sidebar__account__name">{{ Auth::user()->name }}</div>
                <div class="sidebar__account__role">Администратор</div>
            </div>
        </div>
        <ul class="sidebar__items">
            <li class="{{ Request::is('/') ? 'sidebar__item__active' : '' }}">
                <svg width="30" height="16" viewBox="0 0 30 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 15.5V13.8437C0 13.0312 0.4375 12.375 1.3125 11.875C2.1875 11.375 3.3125 11.125 4.6875 11.125C4.95833 11.125 5.20833 11.1302 5.4375 11.1406C5.66667 11.151 5.89583 11.1771 6.125 11.2188C5.95833 11.5729 5.83333 11.9323 5.75 12.2969C5.66667 12.6615 5.625 13.0521 5.625 13.4688V15.5H0ZM7.5 15.5V13.4688C7.5 12.1146 8.19271 11.0208 9.57812 10.1875C10.9635 9.35417 12.7708 8.9375 15 8.9375C17.25 8.9375 19.0625 9.35417 20.4375 10.1875C21.8125 11.0208 22.5 12.1146 22.5 13.4688V15.5H7.5ZM24.375 15.5V13.4688C24.375 13.0521 24.3385 12.6615 24.2656 12.2969C24.1927 11.9323 24.0729 11.5729 23.9062 11.2188C24.1354 11.1771 24.3646 11.151 24.5938 11.1406C24.8229 11.1302 25.0625 11.125 25.3125 11.125C26.7292 11.125 27.8646 11.375 28.7188 11.875C29.5729 12.375 30 13.0312 30 13.8437V15.5H24.375ZM15 10.8125C13.3333 10.8125 11.9792 11.0625 10.9375 11.5625C9.89583 12.0625 9.375 12.6979 9.375 13.4688V13.625H20.625V13.4375C20.625 12.6875 20.1094 12.0625 19.0781 11.5625C18.0469 11.0625 16.6875 10.8125 15 10.8125ZM4.6875 10.1875C4.08333 10.1875 3.56771 9.97396 3.14062 9.54688C2.71354 9.11979 2.5 8.60417 2.5 8C2.5 7.39583 2.71354 6.88021 3.14062 6.45312C3.56771 6.02604 4.08333 5.8125 4.6875 5.8125C5.29167 5.8125 5.80729 6.02604 6.23438 6.45312C6.66146 6.88021 6.875 7.39583 6.875 8C6.875 8.60417 6.66146 9.11979 6.23438 9.54688C5.80729 9.97396 5.29167 10.1875 4.6875 10.1875ZM25.3125 10.1875C24.7083 10.1875 24.1927 9.97396 23.7656 9.54688C23.3385 9.11979 23.125 8.60417 23.125 8C23.125 7.39583 23.3385 6.88021 23.7656 6.45312C24.1927 6.02604 24.7083 5.8125 25.3125 5.8125C25.9167 5.8125 26.4323 6.02604 26.8594 6.45312C27.2865 6.88021 27.5 7.39583 27.5 8C27.5 8.60417 27.2865 9.11979 26.8594 9.54688C26.4323 9.97396 25.9167 10.1875 25.3125 10.1875ZM15 8C13.9583 8 13.0729 7.63542 12.3438 6.90625C11.6146 6.17708 11.25 5.29167 11.25 4.25C11.25 3.1875 11.6146 2.29688 12.3438 1.57813C13.0729 0.859375 13.9583 0.5 15 0.5C16.0625 0.5 16.9531 0.859375 17.6719 1.57813C18.3906 2.29688 18.75 3.1875 18.75 4.25C18.75 5.29167 18.3906 6.17708 17.6719 6.90625C16.9531 7.63542 16.0625 8 15 8ZM15 2.375C14.4792 2.375 14.0365 2.55208 13.6719 2.90625C13.3073 3.26042 13.125 3.70833 13.125 4.25C13.125 4.77083 13.3073 5.21354 13.6719 5.57812C14.0365 5.94271 14.4792 6.125 15 6.125C15.5417 6.125 15.9896 5.94271 16.3438 5.57812C16.6979 5.21354 16.875 4.77083 16.875 4.25C16.875 3.70833 16.6979 3.26042 16.3438 2.90625C15.9896 2.55208 15.5417 2.375 15 2.375Z" />
                </svg>
                <a href="/">Список сотрудников</a>
            </li>
            <li class="{{ Request::is('orders') ? 'sidebar__item__active' : '' }}">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.4375 25.4375C9.9375 25.25 8.53646 24.8021 7.23438 24.0938C5.93229 23.3854 4.80729 22.4844 3.85938 21.3906C2.91146 20.2969 2.16667 19.0365 1.625 17.6094C1.08333 16.1823 0.8125 14.6458 0.8125 13C0.8125 11.1667 1.24479 9.41667 2.10937 7.75C2.97396 6.08333 4.13542 4.60417 5.59375 3.3125H1.78125V1.4375H8.9375V8.59375H7.0625V4.5625C5.72917 5.625 4.66667 6.89063 3.875 8.35938C3.08333 9.82812 2.6875 11.375 2.6875 13C2.6875 15.75 3.52083 18.099 5.1875 20.0469C6.85417 21.9948 8.9375 23.1562 11.4375 23.5312V25.4375ZM11.2188 18.3125L6.375 13.4688L7.6875 12.1562L11.2188 15.6875L18.3125 8.59375L19.625 9.90625L11.2188 18.3125ZM17.0625 24.5625V17.4062H18.9375V21.4375C20.2708 20.3542 21.3333 19.0833 22.125 17.625C22.9167 16.1667 23.3125 14.625 23.3125 13C23.3125 10.25 22.4792 7.90104 20.8125 5.95312C19.1458 4.00521 17.0625 2.84375 14.5625 2.46875V0.5625C17.6042 0.9375 20.1354 2.28125 22.1562 4.59375C24.1771 6.90625 25.1875 9.70833 25.1875 13C25.1875 14.8333 24.7552 16.5833 23.8906 18.25C23.026 19.9167 21.8646 21.3958 20.4062 22.6875H24.2188V24.5625H17.0625Z" />
                </svg>
                <a href="/orders">Заказы</a>
            </li>
            <li class="{{ Request::is('products') ? 'sidebar__item__active' : '' }}">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 23.7812L6.125 19.75C5.83333 19.5833 5.60938 19.3542 5.45312 19.0625C5.29688 18.7708 5.21875 18.4583 5.21875 18.125V10.0938C5.21875 9.76042 5.29688 9.44792 5.45312 9.15625C5.60938 8.86458 5.83333 8.63542 6.125 8.46875L13.0312 4.375C13.3229 4.20833 13.6458 4.125 14 4.125C14.3542 4.125 14.6771 4.20833 14.9688 4.375L21.875 8.46875C22.1667 8.63542 22.3906 8.86458 22.5469 9.15625C22.7031 9.44792 22.7812 9.76042 22.7812 10.0938V18.125C22.7812 18.4583 22.6979 18.7708 22.5312 19.0625C22.3646 19.3542 22.1354 19.5833 21.8438 19.75L14.875 23.7812C14.5833 23.9479 14.2708 24.0312 13.9375 24.0312C13.6042 24.0312 13.2917 23.9479 13 23.7812ZM13.0625 21.625V14.625L7.125 11.2188V18.0625L13.0625 21.625ZM14.9375 21.625L20.9062 18.0625V11.2188L14.9375 14.625V21.625ZM0.25 6.15625V3.75C0.25 2.77083 0.588542 1.94271 1.26562 1.26562C1.94271 0.588542 2.77083 0.25 3.75 0.25H6.15625V2.125H3.75C3.29167 2.125 2.90625 2.28125 2.59375 2.59375C2.28125 2.90625 2.125 3.29167 2.125 3.75V6.15625H0.25ZM3.75 27.75C2.77083 27.75 1.94271 27.4115 1.26562 26.7344C0.588542 26.0573 0.25 25.2292 0.25 24.25V21.8438H2.125V24.25C2.125 24.7083 2.28125 25.0938 2.59375 25.4062C2.90625 25.7188 3.29167 25.875 3.75 25.875H6.15625V27.75H3.75ZM21.8438 27.625V25.75H24.25C24.7083 25.75 25.0938 25.5938 25.4062 25.2812C25.7188 24.9688 25.875 24.5833 25.875 24.125V21.7188H27.75V24.125C27.75 25.1042 27.4115 25.9323 26.7344 26.6094C26.0573 27.2865 25.2292 27.625 24.25 27.625H21.8438ZM25.875 6.15625V3.75C25.875 3.29167 25.7188 2.90625 25.4062 2.59375C25.0938 2.28125 24.7083 2.125 24.25 2.125H21.8438V0.25H24.25C25.2292 0.25 26.0573 0.588542 26.7344 1.26562C27.4115 1.94271 27.75 2.77083 27.75 3.75V6.15625H25.875ZM14 12.9375L19.9375 9.5L14 6.09375L8.0625 9.5L14 12.9375Z" />
                </svg>
                <a href="/products">Товары</a>
            </li>
            <li class="{{ Request::is('stock') ? 'sidebar__item__active' : '' }}">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.75 23.5625V8.1875C1.45833 8.14583 1.17708 7.9375 0.90625 7.5625C0.635417 7.1875 0.5 6.78125 0.5 6.34375V2.375C0.5 1.89583 0.6875 1.46354 1.0625 1.07813C1.4375 0.692708 1.875 0.5 2.375 0.5H23.625C24.1042 0.5 24.5365 0.692708 24.9219 1.07813C25.3073 1.46354 25.5 1.89583 25.5 2.375V6.34375C25.5 6.78125 25.3646 7.1875 25.0938 7.5625C24.8229 7.9375 24.5417 8.14583 24.25 8.1875V23.5625C24.25 24.0417 24.0573 24.4844 23.6719 24.8906C23.2865 25.2969 22.8542 25.5 22.375 25.5H3.625C3.125 25.5 2.6875 25.2969 2.3125 24.8906C1.9375 24.4844 1.75 24.0417 1.75 23.5625ZM3.625 8.21875V23.625H22.375V8.21875H3.625ZM23.625 6.34375V2.375H2.375V6.34375H23.625ZM9.25 14.7812H16.75V12.9062H9.25V14.7812ZM3.625 23.625V8.21875V23.625Z" />
                </svg>
                <a href="/stock">Склад</a>
            </li>
            <li class="sidebar__item__disabled">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.625 23.25C2.125 23.25 1.6875 23.0625 1.3125 22.6875C0.9375 22.3125 0.75 21.875 0.75 21.375V2.625C0.75 2.125 0.9375 1.6875 1.3125 1.3125C1.6875 0.9375 2.125 0.75 2.625 0.75H11.7188V2.625H2.625V21.375H11.7188V23.25H2.625ZM17.8125 17.4688L16.4688 16.125L19.6562 12.9375H8.71875V11.0625H19.5938L16.4062 7.875L17.75 6.53125L23.25 12.0312L17.8125 17.4688Z" />
                </svg>
                <a href="/logout">Выйти</a>
            </li>
        </ul>
        <div class="sidebar__copyright">
            ©KFC 2022
        </div>
    </div>