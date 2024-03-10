<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="{{ config('app.charset') }}">

    <meta name="viewport" content="{{ __('width=device-width, initial-scale=1') }}">
    <meta name="copyright" content="{{ __(' News') }}">
    <meta name="robots" content="{{ __(' News') }}">
    <meta http-equiv="X-UA-Compatible" content="{{ __('IE=edge') }}">

    @yield('meta_content')

    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <title>{{ settings()->title }}</title>

    <!-- Apple Favicon -->
    <link rel="apple-touch-icon" href="{{ asset(settings()->favicon) }}">
    <!-- All Device Favicon -->
    <link rel="icon" href="{{ asset(settings()->favicon) }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/frontend/fontawesome/all.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('public/frontend/fonts/fonts.css') }}">

    <link rel="stylesheet" href="{{ asset('public/frontend/fonts/front_clock.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
    <!-- Normalize -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/normalize.css') }}">
    <!-- Default -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/default.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/slick.css') }}">
    <!-- Venobox -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/venobox.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}">
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/toastr/toastr.css') }}">


    @if (googleanalytics())
        <!-- Global site tag (gtag.js) - Google Analytics -->
        @foreach (googleanalytics() as $googleanalytic)
            {!! $googleanalytic->google_analytics !!}
        @endforeach
    @endif




    {{-- external link start --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style type="text/css">
        .VIpgJd-ZVi9od-ORHb-OEVmcd {
            display: none;
        }

        .fixed-con {
            z-index: 9724790009779558 !important;
            background-color: #c2c2c2;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow-y: auto;
        }

        .VIpgJd-ZVi9od-aZ2wEe-wOHMyf {
            z-index: 9724790009779 !important;
            top: 0;
            left: unset;
            right: -5px;
            display: none !important;
            border-radius: 50%;
            border: 2px solid gold;
        }

        .VIpgJd-ZVi9od-aZ2wEe-OiiCO {
            width: 80px;
            height: 80px;
        }

        /*hide google translate link | logo | banner-frame */
        .goog-logo-link,
        .gskiptranslate,
        .goog-te-gadget span,
        .goog-te-banner-frame,
        #goog-gt-tt,
        .goog-te-balloon-frame,
        div#goog-gt- {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
            font-size: 0px;
        }

        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        /*google translate Dropdown */

        #google_translate_element select {
            background: #f6edfd;
            color: #383ffa;
            border: none;
            border-radius: 3px;
            padding: 6px 8px
        }


















        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='jetpack-videopress-video-block-view-css'
        href='wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-videopress/build/block-editor/blocks/video/view1eec.css?minify=false&amp;ver=34ae973733627b74a14e'
        type='text/css' media='all' />
    <style id='ce4wp-subscribe-style-inline-css' type='text/css'>
        .wp-block-ce4wp-subscribe {
            max-width: 840px;
            margin: 0 auto
        }

        .wp-block-ce4wp-subscribe .title {
            margin-bottom: 0
        }

        .wp-block-ce4wp-subscribe .subTitle {
            margin-top: 0;
            font-size: 0.8em
        }

        .wp-block-ce4wp-subscribe .disclaimer {
            margin-top: 5px;
            font-size: 0.8em
        }

        .wp-block-ce4wp-subscribe .disclaimer .disclaimer-label {
            margin-left: 10px
        }

        .wp-block-ce4wp-subscribe .inputBlock {
            width: 100%;
            margin-bottom: 10px
        }

        .wp-block-ce4wp-subscribe .inputBlock input {
            width: 100%
        }

        .wp-block-ce4wp-subscribe .inputBlock label {
            display: inline-block
        }

        .wp-block-ce4wp-subscribe .submit-button {
            margin-top: 25px;
            display: block
        }

        .wp-block-ce4wp-subscribe .required-text {
            display: inline-block;
            margin: 0;
            padding: 0;
            margin-left: 0.3em
        }

        .wp-block-ce4wp-subscribe .onSubmission {
            height: 0;
            max-width: 840px;
            margin: 0 auto
        }

        .wp-block-ce4wp-subscribe .firstNameSummary .lastNameSummary {
            text-transform: capitalize
        }

        .wp-block-ce4wp-subscribe .ce4wp-inline-notification {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 13px 10px;
            width: 100%;
            height: 40px;
            border-style: solid;
            border-color: orange;
            border-width: 1px;
            border-left-width: 4px;
            border-radius: 3px;
            background: rgba(255, 133, 15, 0.1);
            flex: none;
            order: 0;
            flex-grow: 1;
            margin: 0px 0px
        }

        .wp-block-ce4wp-subscribe .ce4wp-inline-warning-text {
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 20px;
            display: flex;
            align-items: center;
            color: #571600;
            margin-left: 9px
        }

        .wp-block-ce4wp-subscribe .ce4wp-inline-warning-icon {
            color: orange
        }

        .wp-block-ce4wp-subscribe .ce4wp-inline-warning-arrow {
            color: #571600;
            margin-left: auto
        }

        .wp-block-ce4wp-subscribe .ce4wp-banner-clickable {
            cursor: pointer
        }

        .ce4wp-link {
            cursor: pointer
        }

        .no-flex {
            display: block
        }

        .sub-header {
            margin-bottom: 1em
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='style-css'
        href="{{ asset('public/wp-content/themes/Dhaka%20Post/style18cf.css?ver=6.2.3') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href="{{ asset('public/wp-content/themes/Dhaka%20Post/fontawesome/css/all18cf.css?ver=6.2.3') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='bootstarp-css'
        href="{{ asset('public/wp-content/themes/Dhaka%20Post/inc/bootstrap18cf.css?ver=6.2.3') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='fonts-css'
        href="{{ asset('public/wp-content/themes/Dhaka%20Post/css/fonts18cf.css?ver=6.2.3') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='normalize-css'
        href="{{ asset('public/wp-content/themes/Dhaka%20Post/css/normalize18cf.css?ver=6.2.3') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='lightgallery-css'
        href="{{ asset('public/wp-content/themes/Dhaka%20Post/css/lightgallery18cf.css?ver=6.2.3') }}" type='text/css'
        media='all' />
    <style id='font-awesome-official-v4shim-inline-css' type='text/css'>
        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.eot"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.woff2") format("woff2"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.woff") format("woff"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.ttf") format("truetype"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.svg#fontawesome") format("svg");
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.eot"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.woff2") format("woff2"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.woff") format("woff"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.ttf") format("truetype"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.svg#fontawesome") format("svg");
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.eot"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.woff2") format("woff2"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.woff") format("woff"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.ttf") format("truetype"),
                url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.svg#fontawesome") format("svg");
            unicode-range: U+F004-F005, U+F007, U+F017, U+F022, U+F024, U+F02E, U+F03E, U+F044, U+F057-F059, U+F06E, U+F070, U+F075, U+F07B-F07C, U+F080, U+F086, U+F089, U+F094, U+F09D, U+F0A0, U+F0A4-F0A7, U+F0C5, U+F0C7-F0C8, U+F0E0, U+F0EB, U+F0F3, U+F0F8, U+F0FE, U+F111, U+F118-F11A, U+F11C, U+F133, U+F144, U+F146, U+F14A, U+F14D-F14E, U+F150-F152, U+F15B-F15C, U+F164-F165, U+F185-F186, U+F191-F192, U+F1AD, U+F1C1-F1C9, U+F1CD, U+F1D8, U+F1E3, U+F1EA, U+F1F6, U+F1F9, U+F20A, U+F247-F249, U+F24D, U+F254-F25B, U+F25D, U+F267, U+F271-F274, U+F279, U+F28B, U+F28D, U+F2B5-F2B6, U+F2B9, U+F2BB, U+F2BD, U+F2C1-F2C2, U+F2D0, U+F2D2, U+F2DC, U+F2ED, U+F328, U+F358-F35B, U+F3A5, U+F3D1, U+F410, U+F4AD;
        }
    </style>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.2.3" />
    <link rel='shortlink' href='https://wp.me/do8NT' />


    <style type="text/css">
        .ajax-calendar {
            position: relative;
        }

        #bddp_ac_widget th {
            background: none repeat scroll 0 0 #2cb2bc;
            color: #FFFFFF;
            font-weight: normal;
            padding: 5px 1px;
            text-align: center;
            font-size: 16px;
        }

        #bddp_ac_widget {
            padding: 5px;
        }

        #bddp_ac_widget td {
            border: 1px solid #CCCCCC;
            text-align: center;
        }

        #my-calendar a {
            background: none repeat scroll 0 0 #008000;
            color: #FFFFFF;
            display: block;
            padding: 6px 0;
            width: 100% !important;
        }

        #my-calendar {
            width: 100%;
        }


        #my_calender span {
            display: block;
            padding: 6px 0;
            width: 100% !important;
        }

        #today a,
        #today span {
            background: none repeat scroll 0 0 #2cb2bc !important;
            color: #FFFFFF;
        }

        #bddp_ac_widget #my_year {
            float: right;
        }

        .select_ca #my_month {
            float: left;
        }
    </style>
    <style>
        img#wpstats {
            display: none
        }
    </style>
    <style type="text/css" id="wp-custom-css">
        .footer_our_text {
            color: black;
        }
    </style>
    <style type="text/css" title="dynamic-css" class="options-output">
        * {
            font-family: SolaimanLipi;
        }

        .bottom_header_bg,
        .leatest_one_video_post,
        .all-videos,
        .marquee_name,
        .footer_three_col {
            background-color: #eaeaea;
        }
    </style>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-100428463-1');
    </script>


    {{-- external link end --}}

</head>

<body>

    <div id="main-wrapper">
        {{-- <header class="sticky-manu">
            <!--  Top Bar Start -->
            @include('frontend.layouts._topheader')
            <!--  Top Bar End -->
            <!--  Mid Bar Start -->
            @include('frontend.layouts._header')
            <!--  Mid Bar End -->
            <!--  Manu Bar Start -->
            @include('frontend.layouts._menu')
            <!--  Manu Bar End -->
        </header> --}}

        <header>




            @include('frontend.layouts._header')
            @include('frontend.layouts._menu')
        </header>
        <main>


            <!--  Breaking News Start -->
            {{-- @if (Route::currentRouteName() != 'signup' && Route::currentRouteName() != 'signin')
                @include('frontend.layouts._breakingnews')
            @endif --}}
            <!--  Breaking News End -->
            <!--  news  preloader start -->
            {{-- <div class="loader-inner ball-scale-multiple">
                <div></div>
                <div></div>
                <div></div>
            </div> --}}
            <link rel="stylesheet" href="{{ asset('public/frontend/css/loaders.css') }}">


            <!--  news  preloader end -->
            <!-- Main Content Start -->
            @yield('main_content')
            <!-- Main Content End -->
        </main>
        @include('frontend.layouts._footer')
    </div>

    <!-- jQuery -->
    <script src="{{ asset('public/frontend/js/vendor/jquery-3.6.0.min.js') }} "></script>
    <!-- Popper -->
    <script src="{{ asset('public/frontend/js/vendor/popper.min.js') }} "></script>
    <!-- Bootstrap -->
    <script src="{{ asset('public/frontend/js/vendor/bootstrap.min.js') }} "></script>
    <!-- Slick -->
    <script src="{{ asset('public/frontend/js/vendor/slick.min.js') }} "></script>
    <!-- Counter Up -->
    <script src="{{ asset('public/frontend/js/vendor/counterup.min.js') }} "></script>
    <!-- Waypoints -->
    <script src="{{ asset('public/frontend/js/vendor/waypoints.min.js') }} "></script>
    <!-- Venobox -->
    <script src="{{ asset('public/frontend/js/vendor/venobox.min.js') }} "></script>
    <!-- Index -->
    <script src="{{ asset('public/frontend/js/index.js') }} "></script>
    <!-- toastr -->
    <script src="{{ asset('public/admin/plugins/toastr/toastr.min.js') }} "></script>

    <script>
        $("#loginMessage").show().delay(5000).fadeOut('slow');
    </script>


    {{-- external link start --}}


    <script type='text/javascript'
        src="{{ asset('public/wp-content/plugins/creative-mail-by-constant-contact/assets/js/block/submit4981.js?ver=1681736995') }}"
        id='ce4wp_form_submit-js'></script>
    <script type='text/javascript'
        src="{{ asset('public/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-image-cdn/dist/image-cdndca9.js?minify=false&amp;ver=132249e245926ae3e188') }}"
        id='jetpack-photon-js'></script>
    <script type='text/javascript' src="{{ asset('public/wp-content/themes/Dhaka%20Post/js/lightgallery-all.min.js') }}"
        id='script_lightgallery-js'></script>
    <script type='text/javascript' src="{{ asset('public/wp-content/themes/Dhaka%20Post/js/jquery.mousewheel.min.js') }}"
        id='script_mousewheel-js'></script>
    <script type='text/javascript' src="{{ asset('public/wp-content/themes/Dhaka%20Post/js/script.js') }}" id='script-js'>
    </script>



    {{-- extarnal link end --}}





    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'bn',
                includedLanguages: "en,bn",
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');
        }
    </script>
    <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>



</body>

</html>
