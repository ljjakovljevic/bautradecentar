<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-globe" aria-hidden="true"></i>&nbsp;
        {{ trans('navbar.lang') }} <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu">
        @foreach (config('translatable.locales') as $lang => $language)
            @if ($lang != app()->getLocale())
                <li>
                    <a href="{{ route('lang.switch', $lang) }}">
                        <img src="/images/{{ $lang }}.png" alt="{{ $language }}">&nbsp; {{ $language }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</li>