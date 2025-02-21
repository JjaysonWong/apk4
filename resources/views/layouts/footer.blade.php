<footer>
    <div class="container">
        <div class="footer-link-list">
            <div>{{ __('auth.footer.about_us') }}</div>
            <div>{{ __('auth.footer.advertisement') }}</div>
            <div>{{ __('auth.footer.market_coop') }}</div>
            <div>{{ __('auth.footer.join_us') }}</div>
            <div>{{ __('auth.footer.contact_us') }}</div>
            <div>{{ __('auth.footer.copyright_notice') }}</div>
            <div>{{ __('auth.footer.sitemap') }}</div>
        </div>
        <div class="copyright">
            <p>{{ __('auth.footer.copyright_statement') }}</p>
            <p>Copyright © {{ date('Y') }} {{ strtolower(env('APP_NAME', 'APK4')) }}.com All rights reserved. 版权所有
                XXX游戏网站</p>
        </div>
        <div class="footer-bottom">
            <div class="report-section">
                <div class="imgWrap">
                    <img src="{{ asset('images/footer/report1.png') }}" alt="Report Center" />
                    <p>{{ __('auth.footer.online_criminal_website') }}</p>
                </div>
                <div class="imgWrap">
                    <img src="{{ asset('images/footer/report2.png') }}" alt="Report Center" />
                    <p>{{ __('auth.footer.hebei_internet') }}</p>
                </div>
                <div class="imgWrap">
                    <img src="{{ asset('images/footer/report3.png') }}" alt="Report Center" />
                    <p>{{ __('auth.footer.china_internet') }}</p>
                </div>
            </div>
            <div class="languageDropdown">
                <li class="dropdown top_lang_select" id="languageFooterDropdown">
                    <a class="dropdown-toggle" onclick="toggleFooterLangDropdown(event)">
                        @if (app()->getLocale() === 'en')
                            <img src="{{ asset('images/header/uk_flag.png') }}" alt="English Language" />
                        @else
                            <img src="{{ asset('images/header/china_flag.png') }}" alt="Chinese Language" />
                        @endif
                        <i class="dev_top_lang_icon"></i> {{ __('auth.' . app()->getLocale()) }} <b
                            class="minicaret"></b>
                    </a>
                    @php
                        $languages = ['en' => __('auth.en'), 'zh' => __('auth.zh')];
                        $currentLocale = app()->getLocale();
                    @endphp
                    <ul class="dropdownList">
                        @foreach ($languages as $langCode => $langName)
                            <li class="{{ $currentLocale === $langCode ? 'chosen' : '' }}"
                                onclick="changeLanguage('{{ $langCode }}', this)">
                                <a
                                    style="display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%;">
                                    <span>{{ $langName }}</span>
                                    @if ($currentLocale === $langCode)
                                        <span>✅</span>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </li>
            </div>
        </div>
    </div>
</footer>
