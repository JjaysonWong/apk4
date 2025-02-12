<footer>
        <div class="container">
            <div class="footer-link-list">
                <div>关于我们</div>
                <div>广告服务</div>
                <div>市场合作</div>
                <div>加入我们</div>
                <div>联系我们</div>
                <div>版权声明</div>
                <div>网站地图</div>
            </div>
            <div class="copyright">
                <p>本站所有软件来自互联网，版权归原著所有。如有侵权，敬请来信告知（yx8899@gmail.com），我们将及时撤销。</p>
                <p>Copyright © {{ date('Y') }} {{ strtolower(env('APP_NAME', 'APK4')) }}.com All rights reserved. 版权所有 XXX游戏网站</p>
            </div>
            <div class="footer-bottom">
                <div class="report-section">
                    <div class="imgWrap">
                        <img src="{{ asset('images/footer/report1.png') }}" alt="Report Center" />
                        <p>网络违法犯罪举报网站</p>
                    </div>
                    <div class="imgWrap">
                        <img src="{{ asset('images/footer/report2.png') }}"  alt="Report Center" />
                        <p>河北互联网违法和不良信息举报</p>
                    </div>
                    <div class="imgWrap">
                        <img src="{{ asset('images/footer/report3.png') }}"  alt="Report Center" />
                        <p>中国互联网举报中心</p>
                    </div>
                </div>
                <div class="languageDropdown">
                    <li class="dropdown top_lang_select" id="languageFooterDropdown">
                        <a class="dropdown-toggle" onclick="toggleFooterLangDropdown(event)">
                            @if(app()->getLocale() === 'en')
                                <img src="{{ asset('images/header/uk_flag.png') }}" alt="English Language" />
                            @else
                                <img src="{{ asset('images/header/china_flag.png') }}" alt="Chinese Language" />
                            @endif
                            <i class="dev_top_lang_icon"></i> {{ __('auth.' . app()->getLocale()) }} <b class="minicaret"></b>
                        </a>
                        <ul class="dropdownList">
                            <li class="{{ app()->getLocale() === 'zh' ? 'chosen' : '' }}" onclick="changeLanguage('zh', this)">
                                <a>{{ __('auth.zh') }}</a>
                            </li>
                            <li class="{{ app()->getLocale() === 'en' ? 'chosen' : '' }}" onclick="changeLanguage('en', this)">
                                <a>{{ __('auth.en') }}</a>
                            </li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </footer>