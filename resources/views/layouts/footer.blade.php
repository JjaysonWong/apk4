<footer>
        <div class="container">
            <div class="footer-link-list">
                <div>{{__('auth.footer.about_us')}}</div>
                <div>{{__('auth.footer.advertisement')}}</div>
                <div>{{__('auth.footer.market_coop')}}</div>
                <div>{{__('auth.footer.join_us')}}</div>
                <div>{{__('auth.footer.contact_us')}}</div>
                <div>{{__('auth.footer.copyright_notice')}}</div>
                <div>{{__('auth.footer.sitemap')}}</div>
            </div>
            <div class="copyright">
                <p>{{__('auth.footer.copyright_statement')}}</p>
                <p>Copyright © {{ date('Y') }} {{ strtolower(env('APP_NAME', 'APK4')) }}.com All rights reserved. 版权所有 XXX游戏网站</p>
            </div>
            <div class="footer-bottom">
                <div class="report-section">
                    <div class="imgWrap">
                        <img src="{{ asset('images/footer/report1.png') }}" alt="Report Center" />
                        <p>{{__('auth.footer.online_criminal_website')}}</p>
                    </div>
                    <div class="imgWrap">
                        <img src="{{ asset('images/footer/report2.png') }}"  alt="Report Center" />
                        <p>{{__('auth.footer.hebei_internet')}}</p>
                    </div>
                    <div class="imgWrap">
                        <img src="{{ asset('images/footer/report3.png') }}"  alt="Report Center" />
                        <p>{{__('auth.footer.china_internet')}}</p>
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