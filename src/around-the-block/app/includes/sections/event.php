<section id="event" class="event lang-pt" itemscope itemtype="http://schema.org/Event">
    <h2 class="visually-hidden">Event</h2>
    <div class="event-wrapper">
        <div class="event-container">
            <div class="event-top">
                <ul class="event-lang">
                    <li class="event-lang-item">
                        <button v-on:click="changeLang('pt', $event)" class="event-lang-link" href="#pt">
                            <span class="event-lang-icon">
                                <svg class="event-lang-svg"><use xlink:href="#icon-br"></svg>
                            </span>
                            <span class="event-lang-text">PT</span>
                        </button>
                    </li>
                    <li class="event-lang-item">
                        <button v-on:click="changeLang('en', $event)" class="event-lang-link" href="#en">
                            <span class="event-lang-icon">
                                <svg class="event-lang-svg"><use xlink:href="#icon-en"></svg>
                            </span>
                            <span class="event-lang-text">EN</span>
                        </button>
                    </li>
                </ul>
                <button class="event-button-close"><span class="event-button-close-text">{{ content.event_button_close }}</span><svg class="event-button-close-icon"><use xlink:href="#icon-close"></svg></button>
            </div>
            <div class="event-splash">
                <div class="event-content">
                    <p class="event-splash-presents" v-html="content.event_splash_presents"></p>
                    <h3 class="event-splash-title" itemprop="name">{{ content.event_splash_title }}</h3>
                    <h4 class="event-splash-text" itemprop="description">{{ content.event_splash_text }}</h4>
                    <span class="visually-hidden" itemprop="startDate" content="2017-12-08T13:00">Dec 08</span>
                </div>
            </div>
            <div class="event-speeches">
                <div class="event-content">
                    <p class="event-speeches-title" v-html="content.event_talk_text"></p>
                    <ul class="event-speeches-list">
                        <li
                            class="event-speeches-item"
                            v-for="(item, index) in content.speeches"
                            key="index"
                        >{{ item }}</li>
                    </ul>
                    <p class="event-speeches-endtext">
                        <strong class="event-speeches-endtext-text">{{ content.event_talk_endtext_text }}</strong>
                        <svg class="event-speeches-svg" viewBox="899.011 1660 112.701 76.312">
                            <defs>
                                <linearGradient id="linear-gradient" x1=".003" y1=".306" x2="1.126" y2=".306" gradientUnits="objectBoundingBox">
                                  <stop offset="0" stop-color="#ec125f"/>
                                  <stop offset="1" stop-color="#eb008b"/>
                                </linearGradient>
                                <linearGradient id="linear-gradient-2" x1="-.035" y1=".357" x2="1.09" y2=".357" xlink:href="#linear-gradient"/>
                                <linearGradient id="linear-gradient-3" y1=".5" x2=".999" y2=".5" xlink:href="#linear-gradient"/>
                                <linearGradient id="linear-gradient-4" y1=".5" x2="1" y2=".5" xlink:href="#linear-gradient"/>
                            </defs>
                            <g>
                              <path id="Path_175" data-name="Path 175" style="fill: url(#linear-gradient);" d="M931.919 1719.033a4.2 4.2 0 0 1-1.55-.3c-1.7-.656-3.458-2.444-5.485-5.664-3.756-5.9-6.677-6.677-12.043-3.279-3.219 2.027-5.366 2.981-7.244 3.19-2.3.238-4.084-.745-5.485-2.981-1.218-1.934-1.427-3.634-.622-5.364.835-1.789 2.742-3.607 6.022-5.694 3.309-2.087 4.74-3.667 5.008-5.455s-.566-3.965-2.951-7.721c-4.293-6.737-2.116-9.39.6-11.119 3.667-2.325 7.005-1.014 10.195 4.024 2.5 3.935 4.144 5.664 5.9 6.141s3.816-.209 7.363-2.444c3.219-2.027 5.753-2.921 7.75-2.713a5.2 5.2 0 0 1 3.935 2.683 6.223 6.223 0 0 1 1.252 4.71c-.447 2.027-2.236 4.054-5.545 6.141-3.518 2.236-5.157 3.875-5.6 5.634s.2 3.843 2.32 7.154c4.889 7.691 2.713 9.956-.149 11.775a7.423 7.423 0 0 1-3.671 1.282zm-13.712-12.1c2.713 0 4.948 1.848 7.393 5.694 1.938 3.07 3.547 4.77 5.068 5.336 1.282.507 2.593.238 4.382-.894 2.206-1.4 4.74-3.011-.119-10.612-2.236-3.547-2.951-5.783-2.415-7.81.507-2 2.236-3.756 5.962-6.141 3.1-1.967 4.8-3.816 5.187-5.6a5.455 5.455 0 0 0-1.133-4.084 4.361 4.361 0 0 0-3.309-2.3c-1.789-.179-4.233.686-7.214 2.593-3.16 2-5.723 3.19-8.019 2.564s-4.144-2.951-6.409-6.5c-2.921-4.62-5.813-5.813-9.032-3.756-2.444 1.55-4.2 3.845-.328 9.956 2.087 3.309 3.428 5.992 3.07 8.317-.3 2.057-1.878 3.816-5.4 6.051-3.07 1.967-4.948 3.7-5.694 5.336a4.535 4.535 0 0 0 .566 4.561c1.252 1.967 2.742 2.772 4.71 2.593 1.7-.179 3.845-1.1 6.886-3.041a10.457 10.457 0 0 1 5.852-2.266z"/>
                              <path id="Path_176" data-name="Path 176" style=" fill: url(#linear-gradient-2); " d="M939.689 1723.854c-2.325 0-4.442-1.878-7.035-5.962-3.756-5.9-6.677-6.677-12.043-3.279-3.219 2.027-5.366 2.981-7.244 3.19-2.3.238-4.084-.745-5.485-2.981-1.222-1.938-1.431-3.637-.626-5.366.835-1.789 2.742-3.607 6.022-5.694 6.2-3.935 6.528-6.141 2.057-13.206-4.293-6.737-2.116-9.39.6-11.119 3.667-2.325 7.005-1.014 10.195 4.024 2.5 3.935 4.144 5.664 5.9 6.141s3.816-.209 7.363-2.444c5.723-3.607 9.33-3.607 11.626.03a6.223 6.223 0 0 1 1.252 4.71c-.447 2.027-2.236 4.054-5.545 6.141-3.518 2.236-5.157 3.875-5.6 5.634s.209 3.845 2.325 7.154c4.889 7.691 2.713 9.956-.149 11.775a6.828 6.828 0 0 1-3.613 1.252zm-13.708-12.075c2.713 0 4.948 1.848 7.393 5.694 3.994 6.29 6.32 6.439 9.45 4.442 2.206-1.4 4.74-3.011-.119-10.612-2.236-3.547-2.951-5.783-2.415-7.81.507-2 2.236-3.756 5.962-6.141 3.1-1.967 4.8-3.816 5.187-5.6a5.455 5.455 0 0 0-1.133-4.084c-1.431-2.266-3.816-3.994-10.523.268-3.16 2-5.723 3.19-8.019 2.564s-4.144-2.951-6.409-6.5c-2.921-4.62-5.813-5.813-9.032-3.756-2.444 1.55-4.2 3.845-.328 9.956 4.68 7.363 4.233 10.195-2.325 14.368-3.07 1.967-4.948 3.7-5.694 5.336a4.535 4.535 0 0 0 .566 4.561c1.252 1.967 2.742 2.772 4.71 2.593 1.7-.179 3.845-1.1 6.886-3.041a10.693 10.693 0 0 1 5.843-2.238z"/>
                            </g>
                            <g>
                              <path id="Path_177" data-name="Path 177" style="fill: url(#linear-gradient-3);" d="M967.277 1732.169c-7.661 0-14.1-2.057-18.6-5.932a19.368 19.368 0 0 1-6.737-15.2c0-12.341 7.244-17.29 10.731-19.644.447-.3.8-.566 1.1-.775a7.124 7.124 0 0 0 3.041-5.336 9.492 9.492 0 0 0-.537-3.249 22.829 22.829 0 0 1-1.073-6.946 14.013 14.013 0 0 1 5.276-10.97 18.855 18.855 0 0 1 12.016-4.117c11.119 0 18.3 6.081 18.3 15.5 0 1.192-.328 7.423-6.8 12.58-1.908 1.55-3.845 3.4-3.845 5.1 0 4.382 3.368 8.824 5.813 8.824 1.431 0 2.355-.924 3.428-2 1.222-1.222 2.593-2.623 5.008-2.623 3.428 0 7.065 2.116 7.065 6.051a13.648 13.648 0 0 1-1.938 6.618 11.5 11.5 0 0 0-1.669 5.455c0 2.8 1.669 3.756 3.786 4.948l1.252.715a5.491 5.491 0 0 1 2.8 4.77c0 3.935-2.3 5.843-7.065 5.843a21.736 21.736 0 0 1-9.45-1.938 10.621 10.621 0 0 0-4.233-1.1 21.128 21.128 0 0 0-6.23 1.341 35.062 35.062 0 0 1-11.439 2.085zm5.217-71.334c-8.078 0-16.455 5.336-16.455 14.249a21.6 21.6 0 0 0 1.043 6.737 10.027 10.027 0 0 1 .566 3.547 7.933 7.933 0 0 1-3.368 5.932c-.3.238-.686.507-1.133.8-3.368 2.3-10.344 7.065-10.344 18.959 0 12.311 9.628 20.27 24.5 20.27a34.742 34.742 0 0 0 11.208-2.027 21.341 21.341 0 0 1 6.5-1.371 10.961 10.961 0 0 1 4.531 1.163 21.024 21.024 0 0 0 9.122 1.848c4.293 0 6.2-1.55 6.2-5.008a4.7 4.7 0 0 0-2.415-4.054c-.417-.238-.8-.477-1.222-.715-2.176-1.222-4.2-2.385-4.2-5.694a12.476 12.476 0 0 1 1.759-5.843 13.118 13.118 0 0 0 1.848-6.23c0-3.368-3.19-5.217-6.2-5.217-2.057 0-3.249 1.192-4.412 2.355-1.1 1.1-2.236 2.266-4.024 2.266-3.1 0-6.648-5.157-6.648-9.658 0-2.057 2-3.965 4.173-5.753 6.171-4.919 6.469-10.791 6.469-11.924-.03-8.879-6.886-14.632-17.498-14.632zm-2.832 59.887h-2.8a10.642 10.642 0 0 1-10.076-10.88c0-4.263 3.786-9.658 8.049-9.658 2.146 0 4.382 1.818 6.588 5.425l4.233 6.826a5.239 5.239 0 0 1-.149 5.246 6.612 6.612 0 0 1-5.845 3.041zm-4.8-19.7c-3.428 0-7.214 4.62-7.214 8.824a9.783 9.783 0 0 0 9.211 10.016h2.8a5.817 5.817 0 0 0 5.127-2.623 4.35 4.35 0 0 0 .119-4.382l-4.2-6.8c-1.401-2.297-3.547-5.039-5.842-5.039zm7.84-20.27c-2.772 0-4.442-2.564-4.442-5.038a4.546 4.546 0 0 1 4.65-4.65 4.4 4.4 0 0 1 4.442 4.65 4.9 4.9 0 0 1-4.65 5.033zm.179-8.853a3.7 3.7 0 0 0-3.786 3.786c0 2.057 1.341 4.2 3.607 4.2a4.07 4.07 0 0 0 3.786-4.2 3.54 3.54 0 0 0-3.607-3.791z"/>
                              <path id="Path_178" data-name="Path 178" style=" fill: url(#linear-gradient-4); " d="M973.288 1736.313c-7.661 0-14.1-2.057-18.6-5.932a19.368 19.368 0 0 1-6.737-15.2c0-12.341 7.244-17.29 10.731-19.644.447-.3.8-.566 1.1-.775a7.125 7.125 0 0 0 3.041-5.336 9.491 9.491 0 0 0-.537-3.249 22.828 22.828 0 0 1-1.073-6.946 14.013 14.013 0 0 1 5.276-10.97 18.855 18.855 0 0 1 12.016-4.117c11.119 0 18.3 6.081 18.3 15.5 0 1.192-.328 7.423-6.8 12.58-1.908 1.55-3.845 3.4-3.845 5.1 0 4.382 3.368 8.824 5.813 8.824 1.431 0 2.355-.924 3.428-2 1.222-1.222 2.593-2.623 5.008-2.623 3.428 0 7.065 2.116 7.065 6.051a13.648 13.648 0 0 1-1.938 6.618 11.5 11.5 0 0 0-1.669 5.455c0 2.8 1.669 3.756 3.786 4.948.417.238.8.477 1.252.715a5.491 5.491 0 0 1 2.8 4.77c0 3.935-2.3 5.843-7.065 5.843a21.736 21.736 0 0 1-9.45-1.938 10.621 10.621 0 0 0-4.233-1.1 21.129 21.129 0 0 0-6.23 1.341 34.75 34.75 0 0 1-11.439 2.085zm5.246-71.334c-8.078 0-16.455 5.336-16.455 14.249a21.6 21.6 0 0 0 1.043 6.737 10.028 10.028 0 0 1 .566 3.547 7.933 7.933 0 0 1-3.368 5.932c-.3.238-.686.507-1.133.8-3.368 2.3-10.344 7.065-10.344 18.959 0 12.311 9.628 20.27 24.5 20.27a34.742 34.742 0 0 0 11.208-2.027 21.341 21.341 0 0 1 6.5-1.371 10.961 10.961 0 0 1 4.535 1.169 21.025 21.025 0 0 0 9.122 1.848c4.293 0 6.2-1.55 6.2-5.008a4.7 4.7 0 0 0-2.415-4.054c-.417-.238-.8-.477-1.222-.715-2.176-1.222-4.2-2.385-4.2-5.694a12.476 12.476 0 0 1 1.759-5.843 13.118 13.118 0 0 0 1.848-6.23c0-3.368-3.19-5.217-6.2-5.217-2.057 0-3.249 1.192-4.412 2.355-1.1 1.1-2.236 2.266-4.024 2.266-3.1 0-6.648-5.157-6.648-9.658 0-2.057 2-3.965 4.173-5.753 6.171-4.919 6.469-10.791 6.469-11.924-.063-8.885-6.886-14.638-17.501-14.638zm-2.832 59.858h-2.8a10.642 10.642 0 0 1-10.076-10.88c0-4.263 3.786-9.658 8.049-9.658 2.146 0 4.382 1.818 6.588 5.425l4.233 6.826a5.239 5.239 0 0 1-.146 5.246 6.548 6.548 0 0 1-5.847 3.04zm-4.8-19.674c-3.428 0-7.214 4.62-7.214 8.824a9.783 9.783 0 0 0 9.211 10.016h2.8a5.852 5.852 0 0 0 5.127-2.623 4.35 4.35 0 0 0 .119-4.382l-4.2-6.826c-1.4-2.268-3.546-5.01-5.842-5.01zm7.81-20.3c-2.772 0-4.442-2.564-4.442-5.038a4.546 4.546 0 0 1 4.65-4.65 4.4 4.4 0 0 1 4.442 4.65 4.865 4.865 0 0 1-4.649 5.037zm.209-8.824a3.7 3.7 0 0 0-3.786 3.786c0 2.057 1.341 4.2 3.607 4.2a4.07 4.07 0 0 0 3.786-4.2 3.54 3.54 0 0 0-3.606-3.787z"/>
                            </g>
                        </svg>
                    </p>
                </div>
            </div>

            <div class="event-getin">
                <div class="event-content">
                    <div class="event-getin-location">
                        <p class="event-getin-title"><strong>Casa Baixo Augusta</strong></p>
                        <br>
                        <p>Rua da consolação 768<br>
                            com Reigo Freitas<br>
                            São Paulo - Sp<br><br>
                            13hrs - 23 hrs
                        </p>
                    </div>
                    <div class="event-getin-invite">
                        <p class="event-getin-title"><strong>{{ content.event_getin_title }}</strong></p>
                        <br>
                        <p class="event-getin-text" v-html="content.event_getin_text"></p>
                        <a class="button-submit red" href="https://www.sympla.com.br/paratii-bem-vindos-ao-futuro-descentralizado__218999" target="_blank">{{ content.event_getin_button }}</a>
                    </div>
                </div>
            </div>

            <div class="event-sponsor">
                <div class="event-content">
                    <div class="event-sponsor-content">
                        <p class="event-sponsor-title">{{ content.event_support_title_1 }}</p>
                        <ul class="event-sponsor-list">
                            <li class="event-sponsor-item">
                                <a class="event-sponsor-link paratii" href="http://paratii.video/" target="_blank" title="Paratii">
                                    <svg class="event-sponsor-svg"><use xlink:href="#logo-paratii"></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="event-sponsor-content">
                        <p class="event-sponsor-title">{{ content.event_support_title_2 }}</p>
                        <ul class="event-sponsor-list">
                            <li class="event-sponsor-item">
                                <a class="event-sponsor-link bossa" href="http://www.bossanovafilms.com.br/" target="_blank" title="Bossa Nova Films">
                                    <svg class="event-sponsor-svg" viewBox="1082 2734.605 55.366 61.395">
                                      <defs>
                                        <clipPath id="clip-path">
                                          <path id="Path_375" data-name="Path 375" d="M13.757 13.29c0-2.505.594-5.987 3.779-5.987s3.779 3.482 3.779 5.987-.594 5.987-3.779 5.987-3.779-3.482-3.779-5.987m-2.08 0c0 5.477 2.59 7.727 5.859 7.727s5.859-2.25 5.859-7.727-2.595-7.728-5.86-7.728-5.859 2.25-5.859 7.727m12.143-3.651c0 5.265 7.727 3.482 7.727 7.176a2.57 2.57 0 0 1-2.846 2.505 4.105 4.105 0 0 1-3.821-2.378l-1.654 1.019a6 6 0 0 0 5.475 3.057 4.458 4.458 0 0 0 4.8-4.628c0-4.925-7.727-3.354-7.727-6.963 0-1.486 1.274-2.165 2.632-2.165a3.835 3.835 0 0 1 3.354 1.953L33.2 8.067a5.63 5.63 0 0 0-4.88-2.547c-2.42.042-4.5 1.571-4.5 4.118m10.487 0c0 5.265 7.727 3.482 7.727 7.176a2.57 2.57 0 0 1-2.845 2.505 4.105 4.105 0 0 1-3.821-2.378l-1.656 1.019a6 6 0 0 0 5.477 3.057 4.458 4.458 0 0 0 4.8-4.628c0-4.925-7.727-3.354-7.727-6.963 0-1.486 1.274-2.165 2.632-2.165a3.835 3.835 0 0 1 3.354 1.953l1.442-1.147a5.63 5.63 0 0 0-4.883-2.547c-2.463.042-4.5 1.571-4.5 4.118m12.186 7.006c0-2.632 3.567-3.4 5.52-3.991l.807-.255v4.288a5.787 5.787 0 0 1-4.161 2.378 2.378 2.378 0 0 1-2.165-2.42m-1.444-8.11l1.444 1.1a4.407 4.407 0 0 1 3.567-2.293 2.491 2.491 0 0 1 2.8 2.59v.807l-.679.17c-3.227.892-7.643 1.783-7.643 5.944a4.125 4.125 0 0 0 4.034 4.2c1.741 0 3.057-1.1 4.246-2.293l.212 1.868h2.25a8.33 8.33 0 0 1-.382-3.227v-7.3c0-3.354-2.845-4.543-4.84-4.543a6.043 6.043 0 0 0-5.01 2.972M2.08 16.516V9.723a3.935 3.935 0 0 1 3.44-2.378C8.407 7.345 9 11.336 9 13.5c0 4.288-2.038 5.689-3.482 5.689-1.444.042-2.887-1.444-3.439-2.675M0 0v20.635h2.08v-1.656a4.659 4.659 0 0 0 3.736 2.08c2 0 5.35-1.826 5.35-7.43C11.167 7.9 8.237 5.6 5.732 5.6A5.318 5.318 0 0 0 2.08 7.558V0z"/>
                                        </clipPath>
                                      </defs>
                                      <g id="bossa">
                                        <g id="Group_61" data-name="Group 61">
                                          <path id="Path_374" data-name="Path 374" class="cls-1" d="M1095.757 2747.895c0-2.505.594-5.987 3.779-5.987s3.779 3.482 3.779 5.987-.594 5.987-3.779 5.987-3.779-3.482-3.779-5.987m-2.08 0c0 5.477 2.59 7.727 5.859 7.727s5.859-2.25 5.859-7.727-2.595-7.728-5.86-7.728-5.859 2.25-5.859 7.727m12.143-3.651c0 5.265 7.727 3.482 7.727 7.176a2.57 2.57 0 0 1-2.846 2.505 4.105 4.105 0 0 1-3.821-2.378l-1.654 1.019a6 6 0 0 0 5.475 3.057 4.458 4.458 0 0 0 4.8-4.628c0-4.925-7.727-3.354-7.727-6.963 0-1.486 1.274-2.165 2.632-2.165a3.835 3.835 0 0 1 3.354 1.953l1.441-1.147a5.63 5.63 0 0 0-4.88-2.547c-2.42.042-4.5 1.571-4.5 4.118m10.487 0c0 5.265 7.727 3.482 7.727 7.176a2.57 2.57 0 0 1-2.845 2.505 4.105 4.105 0 0 1-3.821-2.378l-1.656 1.019a6 6 0 0 0 5.477 3.057 4.458 4.458 0 0 0 4.8-4.628c0-4.925-7.727-3.354-7.727-6.963 0-1.486 1.274-2.165 2.632-2.165a3.835 3.835 0 0 1 3.354 1.953l1.442-1.147a5.63 5.63 0 0 0-4.883-2.547c-2.463.042-4.5 1.571-4.5 4.118m12.186 7.006c0-2.632 3.567-3.4 5.52-3.991l.807-.255v4.288a5.787 5.787 0 0 1-4.161 2.378 2.378 2.378 0 0 1-2.165-2.42m-1.444-8.11l1.444 1.1a4.407 4.407 0 0 1 3.567-2.293 2.491 2.491 0 0 1 2.8 2.59v.807l-.679.17c-3.227.892-7.643 1.783-7.643 5.944a4.125 4.125 0 0 0 4.034 4.2c1.741 0 3.057-1.1 4.246-2.293l.212 1.868h2.25a8.33 8.33 0 0 1-.382-3.227v-7.3c0-3.354-2.845-4.543-4.84-4.543a6.043 6.043 0 0 0-5.01 2.972m-42.969 7.987v-6.793a3.935 3.935 0 0 1 3.44-2.378c2.887 0 3.48 3.991 3.48 6.155 0 4.288-2.038 5.689-3.482 5.689-1.444.042-2.887-1.444-3.439-2.675m-2.079-16.514v20.635h2.08v-1.656a4.659 4.659 0 0 0 3.736 2.08c2 0 5.35-1.826 5.35-7.43.001-5.729-2.929-8.029-5.434-8.029a5.318 5.318 0 0 0-3.652 1.958v-7.558z"/>
                                        </g>
                                        <g id="Group_63" data-name="Group 63">
                                          <g id="Group_62" data-name="Group 62">
                                            <path id="Path_376" data-name="Path 376" class="cls-1" d="M1100.894 2757.533c-1.613 0-2.76.934-3.949 1.953v-1.528h-2.038v14.648h2.038v-11.124c.807-.977 2.463-2.25 3.694-2.25 2.168.001 1.868 2.25 1.868 3.778v9.553h2.038v-10.062c0-3.822-1.656-4.968-3.651-4.968zm10.148 0c-3.185 0-5.735 2.25-5.735 7.727s2.548 7.727 5.732 7.727 5.732-2.25 5.732-7.727c-.04-5.477-2.588-7.727-5.73-7.727zm0 13.757c-3.1 0-3.694-3.482-3.694-5.987s.594-5.987 3.694-5.987 3.694 3.482 3.694 5.987c-.001 2.463-.595 5.987-3.695 5.987zm14.223-13.332l-3.567 12.737-3.651-12.737h-1.953l4.118 14.648h2.93l4.034-14.648zm11.719 11.421v-7.26a4.488 4.488 0 0 0-4.713-4.543 5.9 5.9 0 0 0-4.925 2.972l1.4 1.1c.849-1.231 1.911-2.293 3.482-2.293a2.444 2.444 0 0 1 2.717 2.59v.807l-.637.17c-3.142.892-7.43 1.783-7.43 5.987a4.083 4.083 0 0 0 3.949 4.2c1.7 0 2.972-1.1 4.118-2.293l.212 1.868h2.208a8.96 8.96 0 0 1-.381-3.305zm-2.038-.722a5.62 5.62 0 0 1-4.076 2.376 2.376 2.376 0 0 1-2.165-2.42c0-2.632 3.482-3.439 5.392-3.991l.807-.255v4.288z"/>
                                          </g>
                                        </g>
                                        <path id="Line_4" data-name="Line 4" class="cls-1" d="M1130.063 2777.87h.042"/>
                                        <g id="Group_64" data-name="Group 64">
                                          <path id="Path_377" data-name="Path 377" class="cls-1" d="M1136.942 2782.371c0-5.6-3.354-7.43-5.35-7.43a4.774 4.774 0 0 0-3.736 2.08v-1.528h-2.081v20.508h2.08v-7.515a5.318 5.318 0 0 0 3.651 1.953c2.506-.043 5.436-2.298 5.436-8.068zm-2.208.042c0 2.208-.594 6.157-3.482 6.157a3.986 3.986 0 0 1-3.439-2.378v-6.793c.594-1.231 2-2.717 3.439-2.717 1.444.042 3.482 1.443 3.482 5.732z"/>
                                          <path id="Path_378" data-name="Path 378" class="cls-1" d="M1118.768 2789.971c1.613 0 2.76-.934 3.949-1.953v1.529h2.038v-14.054h-2.038v10.572c-.807.977-2.42 2.208-3.694 2.208-2.165 0-1.868-2.25-1.868-3.779v-9h-2.038v9.553c.042 3.82 1.656 4.924 3.651 4.924z"/>
                                          <path id="Path_379" data-name="Path 379" class="cls-1" d="M1108.791 2774.941c-3.184 0-5.732 2.25-5.732 7.727s2.548 7.727 5.732 7.727 5.732-2.25 5.732-7.727-2.548-7.727-5.732-7.727zm0 13.714c-3.1 0-3.694-3.482-3.694-5.987s.594-5.987 3.694-5.987 3.694 3.482 3.694 5.987-.595 5.987-3.694 5.987z"/>
                                          <path id="Path_380" data-name="Path 380" class="cls-1" d="M1099.323 2778.55c1.189-.977 2.293-1.953 3.949-1.953a5.2 5.2 0 0 1 .807.085l.127-1.656a3.968 3.968 0 0 0-.977-.085c-1.613 0-2.76.934-3.949 1.953v-1.528h-1.995v14.648h2.038v-11.464z"/>
                                          <path id="Path_381" data-name="Path 381" class="cls-1" d="M1096.648 2775.493a4.211 4.211 0 0 0-3.015 1.019 4.786 4.786 0 0 0-3.736-1.571c-3.269 0-5.1 2.42-5.1 5.435a5.455 5.455 0 0 0 1.953 4.458 2.933 2.933 0 0 0-1.486 2.25 2.021 2.021 0 0 0 1.189 1.826 3.525 3.525 0 0 0-2.288 3.231c0 2.165 1.529 3.482 5.6 3.482 3.524 0 6.157-1.529 6.157-4.076 0-2.208-1.359-3.312-4.883-3.694l-2.208-.255c-1.359-.212-1.741-.425-1.741-.977 0-.467.425-.807.849-1.1a5.53 5.53 0 0 0 1.953.34c3.312 0 5.1-2.42 5.1-5.435a6.37 6.37 0 0 0-.594-2.717 4.363 4.363 0 0 1 2.25-.594zm-8.662 13.842a1.176 1.176 0 0 0 .382.042l2.293.3c2.505.3 3.354.934 3.354 2.123 0 1.4-1.783 2.208-4.076 2.208-2.845 0-3.991-.722-3.991-2.208a3.227 3.227 0 0 1 2.038-2.465zm1.911-5.222c-2.08 0-3.142-1.7-3.142-3.736 0-2.08 1.146-3.736 3.142-3.736s3.142 1.7 3.142 3.736-1.062 3.735-3.142 3.735z"/>
                                        </g>
                                      </g>
                                    </svg>




                                </a>
                            </li>
                            <li class="event-sponsor-item">
                                <a class="event-sponsor-link vya" href="https://www.vya.com.br/" target="_blank" title="Vya">
                                    <svg class="event-sponsor-svg"><use xlink:href="#logo-vya"></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>