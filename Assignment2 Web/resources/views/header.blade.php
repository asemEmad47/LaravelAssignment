<nav>
    @if(session('from_arabic'))
        <button class="actors" onclick="switchLanguage('ar')">عربي</button>
        <button class="actors" onclick="switchLanguage('en')">English</button>
        <p>{{ __('استمارة تسجيل') }}</p>
    @else
        <button class="actors" onclick="switchLanguage('ar')">عربي</button>
        <button class="actors" onclick="switchLanguage('en')">English</button>
        <p>{{ __('REGISTRATION FORM') }}</p>
    @endif
</nav>
