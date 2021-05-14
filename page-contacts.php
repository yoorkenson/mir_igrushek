<?php
/*
template Name: Контакты и отзывы
*/
?>

<?php
    get_header();
?>

<div class="contacts">
    <h1 class="title">Где нас найти</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contacts__descr underlined">
                    Мы находимся в Москве, метро "Парк победы", в деловом центре "Парк победы", второй этаж
                    <br> <br>
                    по адресу ул. Василисы Кожиной, 1
                </div>
            </div>
            <div class="col-lg-6">
                <div id="map" class="contacts__map acf-map">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="title contacts__minititle">Свяжитесь с нами</div>
                <div class="contacts__info">
                    <div class="contacts__phones">
                        <div class="contacts__phoneblock">
                            Телефон №1
                            <div class="contacts__phonewrap">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4887 0.000305176H5.51165C4.74276 0.000305176 4.1167 0.626369 4.1167 1.39525V17.6055C4.1167 18.3747 4.74276 19.0007 5.51165 19.0007H13.4883C14.2575 19.0007 14.8836 18.3747 14.8836 17.6058V1.39525C14.8836 0.626369 14.2575 0.000305176 13.4887 0.000305176ZM4.75005 2.5337H14.2503V14.5673H4.75005V2.5337ZM5.51165 0.633653H13.4883C13.9086 0.633653 14.2503 0.975344 14.2503 1.39525V1.90035H4.75005V1.39525C4.75005 0.975344 5.09174 0.633653 5.51165 0.633653ZM13.4887 18.3674H5.51165C5.09174 18.3674 4.75005 18.0257 4.75005 17.6058V15.2006H14.2503V17.6058C14.2503 18.0257 13.9086 18.3674 13.4887 18.3674Z" fill="url(#paint0_linear)"/>
                                    <path d="M9.49961 15.5173C8.80102 15.5173 8.23291 16.0854 8.23291 16.784C8.23291 17.4826 8.80102 18.0507 9.49961 18.0507C10.1982 18.0507 10.7663 17.4826 10.7663 16.784C10.7663 16.0854 10.1982 15.5173 9.49961 15.5173ZM9.49961 17.4174C9.15031 17.4174 8.86626 17.1333 8.86626 16.784C8.86626 16.4347 9.15031 16.1507 9.49961 16.1507C9.8489 16.1507 10.133 16.4347 10.133 16.784C10.133 17.1333 9.8489 17.4174 9.49961 17.4174Z" fill="url(#paint1_linear)"/>
                                    <path d="M8.23318 1.58367H9.49987C9.67499 1.58367 9.81655 1.44211 9.81655 1.26699C9.81655 1.09187 9.67499 0.950317 9.49987 0.950317H8.23318C8.05806 0.950317 7.9165 1.09187 7.9165 1.26699C7.9165 1.44211 8.05806 1.58367 8.23318 1.58367Z" fill="url(#paint2_linear)"/>
                                    <path d="M10.45 1.58367H10.7666C10.9418 1.58367 11.0833 1.44211 11.0833 1.26699C11.0833 1.09187 10.9418 0.950317 10.7666 0.950317H10.45C10.2749 0.950317 10.1333 1.09187 10.1333 1.26699C10.1333 1.44211 10.2749 1.58367 10.45 1.58367Z" fill="url(#paint3_linear)"/>
                                    <path d="M17.9274 1.44717C17.8035 1.32335 17.6034 1.32335 17.4796 1.44717C17.3558 1.57099 17.3558 1.77113 17.4796 1.89495C18.6627 3.07804 18.6627 5.0031 17.4796 6.18652C17.3558 6.31033 17.3558 6.51047 17.4796 6.63429C17.5413 6.69604 17.6224 6.72708 17.7035 6.72708C17.7845 6.72708 17.8656 6.69604 17.9274 6.63429C19.3575 5.20451 19.3575 2.87727 17.9274 1.44717Z" fill="url(#paint4_linear)"/>
                                    <path d="M16.5939 2.168C16.47 2.04418 16.2699 2.04418 16.1461 2.168C16.0223 2.29182 16.0223 2.49196 16.1461 2.61578C16.5378 3.0075 16.7535 3.52938 16.7535 4.08483C16.7535 4.64027 16.5378 5.16183 16.1461 5.55356C16.0223 5.67738 16.0223 5.87752 16.1461 6.00134C16.2078 6.06309 16.2889 6.09412 16.37 6.09412C16.451 6.09412 16.5321 6.06309 16.5939 6.00134C17.1053 5.49023 17.3868 4.80938 17.3868 4.08483C17.3868 3.36028 17.1056 2.67911 16.5939 2.168Z" fill="url(#paint5_linear)"/>
                                    <path d="M1.52035 1.89495C1.64417 1.77113 1.64417 1.57099 1.52035 1.44717C1.39653 1.32335 1.19639 1.32335 1.07257 1.44717C-0.357525 2.87727 -0.357525 5.20419 1.07257 6.63429C1.13433 6.69604 1.21539 6.72708 1.29646 6.72708C1.37753 6.72708 1.4586 6.69604 1.52035 6.63429C1.64417 6.51047 1.64417 6.31033 1.52035 6.18652C0.336941 5.00342 0.336941 3.07836 1.52035 1.89495Z" fill="url(#paint6_linear)"/>
                                    <path d="M2.85352 2.08057C2.7297 1.95675 2.52956 1.95675 2.40574 2.08057C1.89432 2.59168 1.61279 3.27253 1.61279 3.99708C1.61279 4.72163 1.89432 5.40247 2.40574 5.9139C2.4675 5.97565 2.54856 6.00669 2.62963 6.00669C2.7107 6.00669 2.79177 5.97565 2.85352 5.9139C2.97734 5.79008 2.97734 5.58995 2.85352 5.46613C2.4618 5.0744 2.24614 4.55252 2.24614 3.99708C2.24614 3.44163 2.46148 2.92007 2.85352 2.52834C2.97702 2.40484 2.97702 2.20439 2.85352 2.08057Z" fill="url(#paint7_linear)"/>
                                    <defs>
                                    <linearGradient id="paint0_linear" x1="9.50016" y1="0.000305176" x2="9.50016" y2="19.0007" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="9.49961" y1="15.5173" x2="9.49961" y2="18.0507" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear" x1="8.86652" y1="0.950317" x2="8.86652" y2="1.58367" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear" x1="10.6083" y1="0.950317" x2="10.6083" y2="1.58367" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint4_linear" x1="18.1933" y1="1.35431" x2="18.1933" y2="6.72708" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint5_linear" x1="16.72" y1="2.07513" x2="16.72" y2="6.09412" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint6_linear" x1="0.806608" y1="1.35431" x2="0.806608" y2="6.72708" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint7_linear" x1="2.27959" y1="1.9877" x2="2.27959" y2="6.00669" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    </defs>
                                </svg>
                                <a href="tel:+797867834347">+797867834347</a>
                            </div>
                        </div>
                        <div class="contacts__phoneblock">
                            Телефон №2
                            <div class="contacts__phonewrap">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4887 0.000305176H5.51165C4.74276 0.000305176 4.1167 0.626369 4.1167 1.39525V17.6055C4.1167 18.3747 4.74276 19.0007 5.51165 19.0007H13.4883C14.2575 19.0007 14.8836 18.3747 14.8836 17.6058V1.39525C14.8836 0.626369 14.2575 0.000305176 13.4887 0.000305176ZM4.75005 2.5337H14.2503V14.5673H4.75005V2.5337ZM5.51165 0.633653H13.4883C13.9086 0.633653 14.2503 0.975344 14.2503 1.39525V1.90035H4.75005V1.39525C4.75005 0.975344 5.09174 0.633653 5.51165 0.633653ZM13.4887 18.3674H5.51165C5.09174 18.3674 4.75005 18.0257 4.75005 17.6058V15.2006H14.2503V17.6058C14.2503 18.0257 13.9086 18.3674 13.4887 18.3674Z" fill="url(#paint0_linear)"/>
                                    <path d="M9.49961 15.5173C8.80102 15.5173 8.23291 16.0854 8.23291 16.784C8.23291 17.4826 8.80102 18.0507 9.49961 18.0507C10.1982 18.0507 10.7663 17.4826 10.7663 16.784C10.7663 16.0854 10.1982 15.5173 9.49961 15.5173ZM9.49961 17.4174C9.15031 17.4174 8.86626 17.1333 8.86626 16.784C8.86626 16.4347 9.15031 16.1507 9.49961 16.1507C9.8489 16.1507 10.133 16.4347 10.133 16.784C10.133 17.1333 9.8489 17.4174 9.49961 17.4174Z" fill="url(#paint1_linear)"/>
                                    <path d="M8.23318 1.58367H9.49987C9.67499 1.58367 9.81655 1.44211 9.81655 1.26699C9.81655 1.09187 9.67499 0.950317 9.49987 0.950317H8.23318C8.05806 0.950317 7.9165 1.09187 7.9165 1.26699C7.9165 1.44211 8.05806 1.58367 8.23318 1.58367Z" fill="url(#paint2_linear)"/>
                                    <path d="M10.45 1.58367H10.7666C10.9418 1.58367 11.0833 1.44211 11.0833 1.26699C11.0833 1.09187 10.9418 0.950317 10.7666 0.950317H10.45C10.2749 0.950317 10.1333 1.09187 10.1333 1.26699C10.1333 1.44211 10.2749 1.58367 10.45 1.58367Z" fill="url(#paint3_linear)"/>
                                    <path d="M17.9274 1.44717C17.8035 1.32335 17.6034 1.32335 17.4796 1.44717C17.3558 1.57099 17.3558 1.77113 17.4796 1.89495C18.6627 3.07804 18.6627 5.0031 17.4796 6.18652C17.3558 6.31033 17.3558 6.51047 17.4796 6.63429C17.5413 6.69604 17.6224 6.72708 17.7035 6.72708C17.7845 6.72708 17.8656 6.69604 17.9274 6.63429C19.3575 5.20451 19.3575 2.87727 17.9274 1.44717Z" fill="url(#paint4_linear)"/>
                                    <path d="M16.5939 2.168C16.47 2.04418 16.2699 2.04418 16.1461 2.168C16.0223 2.29182 16.0223 2.49196 16.1461 2.61578C16.5378 3.0075 16.7535 3.52938 16.7535 4.08483C16.7535 4.64027 16.5378 5.16183 16.1461 5.55356C16.0223 5.67738 16.0223 5.87752 16.1461 6.00134C16.2078 6.06309 16.2889 6.09412 16.37 6.09412C16.451 6.09412 16.5321 6.06309 16.5939 6.00134C17.1053 5.49023 17.3868 4.80938 17.3868 4.08483C17.3868 3.36028 17.1056 2.67911 16.5939 2.168Z" fill="url(#paint5_linear)"/>
                                    <path d="M1.52035 1.89495C1.64417 1.77113 1.64417 1.57099 1.52035 1.44717C1.39653 1.32335 1.19639 1.32335 1.07257 1.44717C-0.357525 2.87727 -0.357525 5.20419 1.07257 6.63429C1.13433 6.69604 1.21539 6.72708 1.29646 6.72708C1.37753 6.72708 1.4586 6.69604 1.52035 6.63429C1.64417 6.51047 1.64417 6.31033 1.52035 6.18652C0.336941 5.00342 0.336941 3.07836 1.52035 1.89495Z" fill="url(#paint6_linear)"/>
                                    <path d="M2.85352 2.08057C2.7297 1.95675 2.52956 1.95675 2.40574 2.08057C1.89432 2.59168 1.61279 3.27253 1.61279 3.99708C1.61279 4.72163 1.89432 5.40247 2.40574 5.9139C2.4675 5.97565 2.54856 6.00669 2.62963 6.00669C2.7107 6.00669 2.79177 5.97565 2.85352 5.9139C2.97734 5.79008 2.97734 5.58995 2.85352 5.46613C2.4618 5.0744 2.24614 4.55252 2.24614 3.99708C2.24614 3.44163 2.46148 2.92007 2.85352 2.52834C2.97702 2.40484 2.97702 2.20439 2.85352 2.08057Z" fill="url(#paint7_linear)"/>
                                    <defs>
                                    <linearGradient id="paint0_linear" x1="9.50016" y1="0.000305176" x2="9.50016" y2="19.0007" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="9.49961" y1="15.5173" x2="9.49961" y2="18.0507" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear" x1="8.86652" y1="0.950317" x2="8.86652" y2="1.58367" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear" x1="10.6083" y1="0.950317" x2="10.6083" y2="1.58367" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint4_linear" x1="18.1933" y1="1.35431" x2="18.1933" y2="6.72708" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint5_linear" x1="16.72" y1="2.07513" x2="16.72" y2="6.09412" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint6_linear" x1="0.806608" y1="1.35431" x2="0.806608" y2="6.72708" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    <linearGradient id="paint7_linear" x1="2.27959" y1="1.9877" x2="2.27959" y2="6.00669" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C609E"/>
                                    <stop offset="1" stop-color="#1C609E"/>
                                    </linearGradient>
                                    </defs>
                                </svg>
                                <a href="tel:+797867834358">+797867834358</a>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__mail">
                        Или напишите нам на почту
                        <a href="mailto:mirdetstva@gmail.com">mirdetstva@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="title contacts__minititle">Оставьте ваш отзыв</div>
                <!-- <form action="#" class="contacts__feed">
                    <label for="feedname">
                        Ваше имя <span>*</span>
                    </label>
                    <input required type="text" id="feedname" name="feedname">

                    <label for="feedtext">
                        Ваш отзыв <span>*</span>
                    </label>
                    <textarea required name="feedtext" id="feedtext"></textarea>
                    <button class="minibutton">Отправить</button>

                    <svg class="lds-spinner" width="65px"  height="65px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;"><g transform="rotate(0 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(30 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(60 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(90 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(120 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(150 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(180 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(210 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(240 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(270 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(300 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                            </rect>
                        </g><g transform="rotate(330 50 50)">
                            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                    </svg>
            
                    <svg class="confirm ldt-bounce-in" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="38px" height="38px" viewBox="0 0 448.8 448.8" style="enable-background:new 0 0 448.8 448.8; color: green" xml:space="preserve"
                    ><g><g>
                        <polygon fill="green" points="142.8,323.85 35.7,216.75 0,252.45 142.8,395.25 448.8,89.25 413.1,53.55 		"/>
                    </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                
            
                    <svg class="reject ldt-bounce-in " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="圖層_1" x="0px" y="0px" viewBox="0 0 100 100" style="transform-origin: 50px 50px 0px; width: 40px;" xml:space="preserve"><g style="transform-origin: 50px 50px 0px;"><g style="transform-origin: 50px 50px 0px; transform: scale(1);"><g class="ld ldt-bounce-in" style="transform-origin: 50px 50px 0px; animation-duration: 1.7s; animation-delay: 0s; animation-direction: normal;"><g><style type="text/css" style="transform-origin: 50px 50px 0px;">.st0{fill:#333333;} .st1{fill:#FFFFFF;} .st2{fill:#849B87;} .st3{fill:#FFFFFF;stroke:#333333;stroke-width:6;stroke-miterlimit:10;} .st4{fill:#CCCCCC;} .st5{fill:#ABBD81;} .st6{fill:#E0E0E0;} .st7{fill:#77A4BD;} .st8{fill:#E15B64;} .st9{fill:#FFFFFF;stroke:#333333;stroke-width:12;stroke-miterlimit:10;} .st10{fill:#666666;} .st11{fill-rule:evenodd;clip-rule:evenodd;fill:#666666;} .st12{fill:none;stroke:#E15B64;stroke-width:16;stroke-miterlimit:10;} .st13{fill:none;stroke:#849B87;stroke-width:16;stroke-miterlimit:10;} .st14{fill:none;stroke:#E15B64;stroke-width:22;stroke-miterlimit:10;} .st15{fill:none;stroke:#849B87;stroke-width:22;stroke-miterlimit:10;} .st16{fill:#A0C8D7;} .st17{fill:none;stroke:#E0E0E0;stroke-width:6;stroke-miterlimit:10;} .st18{fill:none;stroke:#E0E0E0;stroke-width:6;stroke-miterlimit:10;stroke-dasharray:7.5147,8.5882;} .st19{fill:#FFFFFF;stroke:#E15B64;stroke-width:6;stroke-miterlimit:10;} .st20{fill:#FFFFFF;stroke:#ABBD81;stroke-width:6;stroke-miterlimit:10;} .st21{fill:#E0E0E0;stroke:#B3B3B3;stroke-width:4;stroke-miterlimit:10;} .st22{fill:#E0E0E0;stroke:#ABBD81;stroke-width:4;stroke-miterlimit:10;} .st23{fill:#E0E0E0;stroke:#E15B64;stroke-width:4;stroke-miterlimit:10;} .st24{fill:none;stroke:#B3B3B3;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;} .st25{fill:#FFFFFF;stroke:#666666;stroke-width:6;stroke-miterlimit:10;} .st26{fill:#FFFFFF;stroke:#666666;stroke-width:8;stroke-miterlimit:10;} .st27{fill:none;stroke:#F47E60;stroke-width:19;stroke-linecap:round;stroke-miterlimit:10;} .st28{fill:none;stroke:#F47E60;stroke-width:9;stroke-linecap:round;stroke-miterlimit:10;} .st29{fill:none;stroke:#F47E60;stroke-width:14;stroke-linecap:round;stroke-miterlimit:10;} .st30{fill:none;stroke:#F47E60;stroke-width:10.2857;stroke-linecap:round;stroke-miterlimit:10;} .st31{fill:url(#SVGID_1_);} .st32{fill:url(#SVGID_2_);}</style><g style="transform-origin: 50px 50px 0px;"><path class="st8" d="M69.863,19.947L50,39.81L30.137,19.946c-2.809-2.809-7.379-2.809-10.189,0s-2.809,7.38,0,10.189l19.863,19.863 L19.948,69.862c-2.809,2.809-2.809,7.38,0,10.189s7.379,2.809,10.189,0L50,60.188l19.863,19.863c2.809,2.809,7.379,2.809,10.189,0 s2.809-7.38,0-10.189L60.189,49.998l19.863-19.863c2.809-2.809,2.809-7.38,0-10.189S72.673,17.138,69.863,19.947z" fill="rgb(225, 91, 100)" style="fill: rgb(225, 91, 100);"/></g><metadata xmlns:d="https://loading.io/stock/" style="transform-origin: 50px 50px 0px;">
                        <d:name style="transform-origin: 50px 50px 0px;">cross</d:name>
                        <d:tags style="transform-origin: 50px 50px 0px;">times,delete,clear,remove,error,forbid,deny,negative,drop,refuse,reject,cross,form</d:tags>
                        <d:license style="transform-origin: 50px 50px 0px;">cc0</d:license>
                        <d:slug style="transform-origin: 50px 50px 0px;">gsd528</d:slug>
                        </metadata></g></g></g></g><style type="text/css" style="transform-origin: 50px 50px 0px;">
                        </style>
                    </svg>

                </form> -->
                <div class='contacts__feed'>
                    <?php echo do_shortcode('[contact-form-7 id="134" title="Форма отзывов"]'); ?>
                </div>
            </div>
        </div>
        <div class="row mt70">
            <div class="col-lg-8 offset-lg-2">
                <div class="title">отзывы</div>
                <div class="feedslider glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">

                        <?php
                                                    // параметры по умолчанию
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'reviews',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                // формат вывода the_title() ...
                        ?>

                            <li class="glide__slide">
                                <div class="feedslider__title">
                                    <?php the_field('review_title'); ?>
                                </div>
                                <div class="feedslider__text">
                                    <?php the_field('review_descr'); ?>
                                </div>
                            </li>

                        <?php
                            }

                            wp_reset_postdata(); // сброс

                        ?>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>