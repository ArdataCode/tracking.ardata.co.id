<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>{{ENV('APP_NAME')}}</title>
        <meta name="generator" content="Laravel" />
        <link rel="canonical" href="{{url()->current()}}" />
        <link rel="shortlink" href="{{url()->current()}}" />
        <link rel="shortcut icon" href="{{url('favicon.ico')}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

        <link rel="stylesheet" id="wp-block-library-css" href="{{asset('frontpage/includes/css/dist/block-library/style.min.css?ver=6.2.2')}}" media="all" />
        <link rel="stylesheet" id="classic-theme-styles-css" href="{{asset('frontpage/includes/css/classic-themes.min.css?ver=6.2.2')}}" media="all" />
        
        <style id="global-styles-inline-css">
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
                --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
                --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
                --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
                --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
                --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
                --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
                --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
                --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
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
            body .is-layout-flow > .alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }
            body .is-layout-flow > .alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }
            body .is-layout-flow > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > .alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }
            body .is-layout-constrained > .alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }
            body .is-layout-constrained > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > .alignwide {
                max-width: var(--wp--style--global--wide-size);
            }
            body .is-layout-flex {
                display: flex;
            }
            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }
            body .is-layout-flex > * {
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

        <link rel="stylesheet" id="hello-elementor-css" href="{{asset('frontpage/content/themes/hello-elementor/style.min.css?ver=2.7.1')}}" media="all" />
        <link rel="stylesheet" id="hello-elementor-theme-style-css" href="{{asset('frontpage/content/themes/hello-elementor/theme.min.css?ver=2.7.1')}}" media="all" />
        <link rel="stylesheet" id="elementor-frontend-css" href="{{asset('frontpage/content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.13.3')}}" media="all" />
        <link rel="stylesheet" id="elementor-icons-css" href="{{asset('frontpage/content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.20.0')}}" media="all" />
        <link rel="stylesheet" id="swiper-css" href="{{asset('frontpage/content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5')}}" media="all" />
        <link rel="stylesheet" id="elementor-pro-css" href="{{asset('frontpage/content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.13.2')}}" media="all" />
        <link rel="stylesheet" id="elementor-post-472-css" href="{{asset('frontpage/content/uploads/elementor/css/post-472.css?ver=1690591545')}}" media="all" />

        <link
            rel="stylesheet"
            id="google-fonts-1-css"
            href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.2.2"
            media="all"
        />

        <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{asset('frontpage/content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3')}}" media="all" />
        <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{asset('frontpage/content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3')}}" media="all" />
        <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{asset('frontpage/content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3')}}" media="all" />
        <link rel="stylesheet" id="elementor-icons-fa-regular-css" href="{{asset('frontpage/content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3')}}" media="all" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <script src="{{asset('frontpage/includes/js/jquery/jquery.min.js?ver=3.6.4')}}" id="jquery-core-js"></script>
    </head>

    <body class="home page-template page-template-elementor_canvas page page-id-472 elementor-default elementor-template-canvas elementor-kit-53 elementor-page elementor-page-472">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-dark-grayscale">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
                        <fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-grayscale">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0 1"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-yellow">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-red">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
                        <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-midnight">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 0"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
                        <fefuncb type="table" tablevalues="0 1"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-magenta-yellow">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
                        <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-green">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-orange">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
                        <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <div data-elementor-type="wp-page" data-elementor-id="472" class="elementor elementor-472">

            @include('frontend.header')

            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-7b6b2e53 elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                data-id="7b6b2e53"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4ce5033c" data-id="4ce5033c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d4e1e31 elementor-widget elementor-widget-heading" data-id="d4e1e31" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.13.3 - 22-05-2023 */
                                        .elementor-heading-title {
                                            padding: 0;
                                            margin: 0;
                                            line-height: 1;
                                        }
                                        .elementor-widget-heading .elementor-heading-title[class*="elementor-size-"] > a {
                                            color: inherit;
                                            font-size: inherit;
                                            line-height: inherit;
                                        }
                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                            font-size: 15px;
                                        }
                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                            font-size: 19px;
                                        }
                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                            font-size: 29px;
                                        }
                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                            font-size: 39px;
                                        }
                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                            font-size: 59px;
                                        }
                                    </style>
                                    <h2 class="elementor-heading-title elementor-size-default">Lacak Paket Anda</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2c6c67ca elementor-widget elementor-widget-heading" data-id="2c6c67ca" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-heading-title elementor-size-default">
                                        Kami adalah solusi terbaik untuk pengiriman barang Anda.<br />
                                        Cepat, aman dan terpercaya!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-7b48729b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="7b48729b"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-144cb686" data-id="144cb686" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-76f5c247 elementor-widget elementor-widget-heading" data-id="76f5c247" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">Yuk! Cek Paket Anda</h3>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-64c9446d elementor-button-align-end elementor-mobile-button-align-stretch elementor-widget elementor-widget-form"
                                data-id="64c9446d"
                                data-element_type="widget"
                                data-settings='{"step_next_label":"Next","step_previous_label":"Previous","button_width":"100","step_type":"number_text","step_icon_shape":"circle"}'
                                data-widget_type="form.default"
                            >
                                <div class="elementor-widget-container">
                                    <style>
                                        .elementor-button.elementor-hidden,
                                        .elementor-hidden {
                                            display: none;
                                        }
                                        .e-form__step {
                                            width: 100%;
                                        }
                                        .e-form__step:not(.elementor-hidden) {
                                            display: flex;
                                            flex-wrap: wrap;
                                        }
                                        .e-form__buttons {
                                            flex-wrap: wrap;
                                        }
                                        .e-form__buttons,
                                        .e-form__buttons__wrapper {
                                            display: flex;
                                        }
                                        .e-form__indicators {
                                            display: flex;
                                            justify-content: space-between;
                                            align-items: center;
                                            flex-wrap: nowrap;
                                            font-size: 13px;
                                            margin-bottom: var(--e-form-steps-indicators-spacing);
                                        }
                                        .e-form__indicators__indicator {
                                            display: flex;
                                            flex-direction: column;
                                            align-items: center;
                                            justify-content: center;
                                            flex-basis: 0;
                                            padding: 0 var(--e-form-steps-divider-gap);
                                        }
                                        .e-form__indicators__indicator__progress {
                                            width: 100%;
                                            position: relative;
                                            background-color: var(--e-form-steps-indicator-progress-background-color);
                                            border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                            overflow: hidden;
                                        }
                                        .e-form__indicators__indicator__progress__meter {
                                            width: var(--e-form-steps-indicator-progress-meter-width, 0);
                                            height: var(--e-form-steps-indicator-progress-height);
                                            line-height: var(--e-form-steps-indicator-progress-height);
                                            padding-right: 15px;
                                            border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                            background-color: var(--e-form-steps-indicator-progress-color);
                                            color: var(--e-form-steps-indicator-progress-meter-color);
                                            text-align: right;
                                            transition: width 0.1s linear;
                                        }
                                        .e-form__indicators__indicator:first-child {
                                            padding-left: 0;
                                        }
                                        .e-form__indicators__indicator:last-child {
                                            padding-right: 0;
                                        }
                                        .e-form__indicators__indicator--state-inactive {
                                            color: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2);
                                        }
                                        .e-form__indicators__indicator--state-inactive [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                                            background-color: var(--e-form-steps-indicator-inactive-secondary-color, #fff);
                                        }
                                        .e-form__indicators__indicator--state-inactive object,
                                        .e-form__indicators__indicator--state-inactive svg {
                                            fill: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2);
                                        }
                                        .e-form__indicators__indicator--state-active {
                                            color: var(--e-form-steps-indicator-active-primary-color, #39b54a);
                                            border-color: var(--e-form-steps-indicator-active-secondary-color, #fff);
                                        }
                                        .e-form__indicators__indicator--state-active [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                                            background-color: var(--e-form-steps-indicator-active-secondary-color, #fff);
                                        }
                                        .e-form__indicators__indicator--state-active object,
                                        .e-form__indicators__indicator--state-active svg {
                                            fill: var(--e-form-steps-indicator-active-primary-color, #39b54a);
                                        }
                                        .e-form__indicators__indicator--state-completed {
                                            color: var(--e-form-steps-indicator-completed-secondary-color, #fff);
                                        }
                                        .e-form__indicators__indicator--state-completed [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                                            background-color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
                                        }
                                        .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                                            color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
                                        }
                                        .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                                            color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
                                            background-color: initial;
                                        }
                                        .e-form__indicators__indicator--state-completed object,
                                        .e-form__indicators__indicator--state-completed svg {
                                            fill: var(--e-form-steps-indicator-completed-secondary-color, #fff);
                                        }
                                        .e-form__indicators__indicator__icon {
                                            width: var(--e-form-steps-indicator-padding, 30px);
                                            height: var(--e-form-steps-indicator-padding, 30px);
                                            font-size: var(--e-form-steps-indicator-icon-size);
                                            border-width: 1px;
                                            border-style: solid;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            overflow: hidden;
                                            margin-bottom: 10px;
                                        }
                                        .e-form__indicators__indicator__icon img,
                                        .e-form__indicators__indicator__icon object,
                                        .e-form__indicators__indicator__icon svg {
                                            width: var(--e-form-steps-indicator-icon-size);
                                            height: auto;
                                        }
                                        .e-form__indicators__indicator__icon .e-font-icon-svg {
                                            height: 1em;
                                        }
                                        .e-form__indicators__indicator__number {
                                            width: var(--e-form-steps-indicator-padding, 30px);
                                            height: var(--e-form-steps-indicator-padding, 30px);
                                            border-width: 1px;
                                            border-style: solid;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            margin-bottom: 10px;
                                        }
                                        .e-form__indicators__indicator--shape-circle {
                                            border-radius: 50%;
                                        }
                                        .e-form__indicators__indicator--shape-square {
                                            border-radius: 0;
                                        }
                                        .e-form__indicators__indicator--shape-rounded {
                                            border-radius: 5px;
                                        }
                                        .e-form__indicators__indicator--shape-none {
                                            border: 0;
                                        }
                                        .e-form__indicators__indicator__label {
                                            text-align: center;
                                        }
                                        .e-form__indicators__indicator__separator {
                                            width: 100%;
                                            height: var(--e-form-steps-divider-width);
                                            background-color: #babfc5;
                                        }
                                        .e-form__indicators--type-icon,
                                        .e-form__indicators--type-icon_text,
                                        .e-form__indicators--type-number,
                                        .e-form__indicators--type-number_text {
                                            align-items: flex-start;
                                        }
                                        .e-form__indicators--type-icon .e-form__indicators__indicator__separator,
                                        .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,
                                        .e-form__indicators--type-number .e-form__indicators__indicator__separator,
                                        .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                                            margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2);
                                        }
                                        .elementor-field-type-hidden {
                                            display: none;
                                        }
                                        .elementor-field-type-html {
                                            display: inline-block;
                                        }
                                        .elementor-login .elementor-lost-password,
                                        .elementor-login .elementor-remember-me {
                                            font-size: 0.85em;
                                        }
                                        .elementor-field-type-recaptcha_v3 .elementor-field-label {
                                            display: none;
                                        }
                                        .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                                            z-index: 1;
                                        }
                                        .elementor-button .elementor-form-spinner {
                                            order: 3;
                                        }
                                        .elementor-form .elementor-button > span {
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                        }
                                        .elementor-form .elementor-button .elementor-button-text {
                                            white-space: normal;
                                            flex-grow: 0;
                                        }
                                        .elementor-form .elementor-button svg {
                                            height: auto;
                                        }
                                        .elementor-form .elementor-button .e-font-icon-svg {
                                            height: 1em;
                                        }
                                        .elementor-select-wrapper .select-caret-down-wrapper {
                                            position: absolute;
                                            top: 50%;
                                            transform: translateY(-50%);
                                            inset-inline-end: 10px;
                                            pointer-events: none;
                                            font-size: 11px;
                                        }
                                        .elementor-select-wrapper .select-caret-down-wrapper svg {
                                            display: unset;
                                            width: 1em;
                                            aspect-ratio: unset;
                                            fill: currentColor;
                                        }
                                        .elementor-select-wrapper .select-caret-down-wrapper i {
                                            font-size: 19px;
                                            line-height: 2;
                                        }
                                        .elementor-select-wrapper.remove-before:before {
                                            content: "" !important;
                                        }
                                    </style>

                                    <form class="form" method="post" name="TrackingForm" id="TrackingForm" action="{{route('track')}}">

                                        @csrf

                                        <div class="elementor-form-fields-wrapper elementor-labels-">
                                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-awb elementor-col-100 elementor-field-required">
                                                <label for="awb" class="elementor-field-label elementor-screen-only">AWB</label>
                                                <input
                                                    size="1"
                                                    type="text"
                                                    name="awb"
                                                    id="awb"
                                                    class="elementor-field elementor-size-md elementor-field-textual"
                                                    placeholder="Masukkan No Resi"
                                                    required="required"
                                                    aria-required="true"
                                                    value="{{$track->awb}}"
                                                />
                                            </div>

                                            <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                <button type="submit" class="elementor-button elementor-size-md">
                                                    <span>
                                                        <span class="elementor-button-icon"></span>
                                                        <span class="elementor-button-text">Lacak Paket</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-3d7dc58f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="3d7dc58f"
                data-element_type="section">


<!-- // START // -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<div class="container padding-bottom-3x mb-1">
<div class="card mb-3">
  <div class="card-body">
    <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
      <div class="step 
        @if ($last == 'Pick Up')
            completed
        @elseif ($last == 'Transit')
            completed
        @elseif ($last == 'Delivery')
            completed
        @elseif ($last == 'Delivered')
            completed
        @endif">
        <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-box1"></i></div>
        </div>
        <h4 class="step-title">Pick Up</h4>
      </div>
      <div class="step 
        @if ($last == 'Transit')
            completed
        @elseif ($last == 'Delivery')
            completed
        @elseif ($last == 'Delivered')
            completed
        @endif">
        <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-car"></i></div>
        </div>
        <h4 class="step-title">On Transit</h4>
      </div>
      <div class="step 
        @if ($last == 'Delivery')
            completed
        @elseif ($last == 'Delivered')
            completed
        @endif">
        <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-gift"></i></div>
        </div>
        <h4 class="step-title">On Delivery</h4>
      </div>
      <div class="step 
        @if ($last == 'Delivered')
            completed
        @endif">
        <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-check"></i></div>
        </div>
        <h4 class="step-title">Delivered</h4>
      </div>
    </div>
  </div>
</div>
</div>

<style type="text/css">
.steps .step {
display: block;
width: 100%;
margin-bottom: 35px;
text-align: center
}

.steps .step .step-icon-wrap {
    display: block;
    position: relative;
    width: 100%;
    height: 80px;
    text-align: center
}

.steps .step .step-icon-wrap::before,
.steps .step .step-icon-wrap::after {
    display: block;
    position: absolute;
    top: 50%;
    width: 50%;
    height: 3px;
    margin-top: -1px;
    background-color: #e1e7ec;
    content: '';
    z-index: 1
}

.steps .step .step-icon-wrap::before {
    left: 0
}

.steps .step .step-icon-wrap::after {
    right: 0
}

.steps .step .step-icon {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
    border: 1px solid #e1e7ec;
    border-radius: 50%;
    background-color: #f5f5f5;
    color: #374250;
    font-size: 38px;
    line-height: 81px;
    z-index: 5
}

.steps .step .step-title {
    margin-top: 16px;
    margin-bottom: 0;
    color: #606975;
    font-size: 14px;
    font-weight: 500
}

.steps .step:first-child .step-icon-wrap::before {
    display: none
}

.steps .step:last-child .step-icon-wrap::after {
    display: none
}

.steps .step.completed .step-icon-wrap::before,
.steps .step.completed .step-icon-wrap::after {
    background-color: #FF2023
}

.steps .step.completed .step-icon {
    border-color: #FF2023;
    background-color: #FF2023;
    color: #fff
}

@media (max-width: 576px) {
    .flex-sm-nowrap .step .step-icon-wrap::before,
    .flex-sm-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 768px) {
    .flex-md-nowrap .step .step-icon-wrap::before,
    .flex-md-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 991px) {
    .flex-lg-nowrap .step .step-icon-wrap::before,
    .flex-lg-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 1200px) {
    .flex-xl-nowrap .step .step-icon-wrap::before,
    .flex-xl-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

.bg-faded, .bg-secondary {
    background-color: #f5f5f5 !important;
}
</style>
<!-- // END // -->



                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b3e88c0" data-id="3b3e88c0" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-69148a7e elementor-widget elementor-widget-heading" data-id="69148a7e" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container" id="track">
                                    <h4 class="elementor-heading-title elementor-size-default">Status Paket Anda</h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1ea921ef elementor-widget elementor-widget-heading" data-id="1ea921ef" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-heading-title elementor-size-default">
                                        Terima kasih telah menggunakan layanan Delivery Express. Silahkan cek paket Anda
                                    </div>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-4de9e7e4 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="4de9e7e4"
                                data-element_type="section"
                            >
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-34b13d04 kiri" data-id="34b13d04" data-element_type="column" id="kiri">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3f941ffb elementor-widget elementor-widget-heading" data-id="3f941ffb" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">Details</h5>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4834f0ad elementor-widget elementor-widget-text-editor" data-id="4834f0ad" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                            background-color: #69727d;
                                                            color: #fff;
                                                        }
                                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                            color: #69727d;
                                                            border: 3px solid;
                                                            background-color: transparent;
                                                        }
                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                            margin-top: 8px;
                                                        }
                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                            width: 1em;
                                                            height: 1em;
                                                        }
                                                        .elementor-widget-text-editor .elementor-drop-cap {
                                                            float: left;
                                                            text-align: center;
                                                            line-height: 1;
                                                            font-size: 50px;
                                                        }
                                                        .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                            display: inline-block;
                                                        }
                                                    </style>
                                                    <p>
                                                        <strong>Tgl Terima:</strong><br />
                                                        @if ($track->receipt_date)
                                                            {{$track->receipt_date}}
                                                        @else
                                                            -
                                                        @endif
                                                    </p>
                                                    <p>
                                                        <strong>Asal:</strong><br />
                                                        {{$track->KotaAsal->name}}
                                                    </p>
                                                    <p>
                                                        <strong>Tujuan:</strong><br />
                                                        {{$track->KotaTujuan->name}}
                                                    </p>
                                                    <p>
                                                        <strong>Pengirim:</strong><br />
                                                        {{$track->Customer->name}}
                                                    </p>
                                                    <p>
                                                        <strong>Penerima:</strong><br />
                                                        {{$track->recipient}}
                                                    </p>
                                                    <p>
                                                        <strong>Status:</strong><br />
                                                        {{ucfirst($track->status)}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5a215ddc" data-id="5a215ddc" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6f356665 elementor-widget elementor-widget-heading" data-id="6f356665" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">History</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-46f2cfed elementor-widget elementor-widget-html" data-id="46f2cfed" data-element_type="widget" data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="jsx-awb check-awb-details_timeline">

                                                        @forelse ($data as $d)
                                                        <li class="jsx-awb">
                                                            <div class="jsx-awb d-flex flex-row">
                                                                <div class="jsx-awb check-awb-details_historyDate">
                                                                    @if ($d->date)
                                                                    <p class="jsx-awb">
                                                                        {{ \Carbon\Carbon::parse($d->date)->locale('id')->dayName }}
                                                                    </p>
                                                                    <h5 class="jsx-awb">
                                                                        {{ \Carbon\Carbon::parse($d->date)->locale('id')->format('d M Y') }}
                                                                    </h5>
                                                                    @endif
                                                                </div>
                                                                <div class="jsx-awb check-awb-details_historyDescription">
                                                                    <p class="jsx-awb m-0">{{$d->time}}</p>
                                                                    <p class="jsx-awb">{{$d->notes}}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @empty
                                                            <span style="margin-left: -8%; color:#777; font-style: italic;">Data belum tersedia...</span>
                                                        @endforelse

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if ($d->receipt_photo)
                                <div style="padding:10px;">
                                    <div class="elementor-element elementor-element-6f356665 elementor-widget elementor-widget-heading" data-id="6f356665" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h6 class="elementor-heading-title elementor-size-default">Bukti Penerimaan</h6>
                                    </div>
                                    </div>
                                    
                                    <a href="/storage/{{$d->receipt_photo}}" target="_blank"><img src="/storage/{{$d->receipt_photo}}" width="200"></a>
                                </div>
                                @endif

                            </section>
                        </div>
                    </div>
                </div>
            </section>

        @include('frontend.footer')

        </div>
        <script src="{{asset('frontpage/content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0" id="hello-theme-frontend-js')}}"></script>
        <script src="{{asset('frontpage/content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1" id="hello-theme-frontend-js')}}" id="smartmenus-js"></script>
        <script src="{{asset('frontpage/content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.13.2')}}" id="elementor-pro-webpack-runtime-js"></script>
        <!-- <script src="{{asset('frontpage/content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.13.3')}}" id="elementor-webpack-runtime-js"></script> -->
        <script src="{{asset('frontpage/content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.13.3')}}" id="elementor-frontend-modules-js"></script>
        <script src="{{asset('frontpage/includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2')}}" id="wp-polyfill-inert-js"></script>
        <script src="{{asset('frontpage/includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11')}}" id="regenerator-runtime-js"></script>
        <script src="{{asset('frontpage/includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0')}}" id="wp-polyfill-js"></script>
        <script src="{{asset('frontpage/includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5')}}" id="wp-hooks-js"></script>
        <script src="{{asset('frontpage/includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae')}}" id="wp-i18n-js"></script>

        <script id="elementor-pro-frontend-js-before">
            var ElementorProFrontendConfig = {
                ajaxurl: "ajax.php",
                nonce: "dd97883093",
                urls: { assets: "" },
                shareButtonsNetworks: {
                    facebook: { title: "Facebook", has_counter: true },
                    twitter: { title: "Twitter" },
                    linkedin: { title: "LinkedIn", has_counter: true },
                    pinterest: { title: "Pinterest", has_counter: true },
                    reddit: { title: "Reddit", has_counter: true },
                    vk: { title: "VK", has_counter: true },
                    odnoklassniki: { title: "OK", has_counter: true },
                    tumblr: { title: "Tumblr" },
                    digg: { title: "Digg" },
                    skype: { title: "Skype" },
                    stumbleupon: { title: "StumbleUpon", has_counter: true },
                    mix: { title: "Mix" },
                    telegram: { title: "Telegram" },
                    pocket: { title: "Pocket", has_counter: true },
                    xing: { title: "XING", has_counter: true },
                    whatsapp: { title: "WhatsApp" },
                    email: { title: "Email" },
                    print: { title: "Print" },
                },
                facebook_sdk: { lang: "en_US", app_id: "" },
                lottie: { defaultAnimationUrl: ".\/\/content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json" },
            };
        </script>

        <script src="{{asset('frontpage/content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.13.2')}}" id="elementor-pro-frontend-js"></script>
        <script src="{{asset('frontpage/content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2')}}" id="elementor-waypoints-js"></script>
        <script src="{{asset('frontpage/includes/js/jquery/ui/core.min.js?ver=1.13.2')}}" id="jquery-ui-core-js"></script>

        <script id="elementor-frontend-js-before">
            var elementorFrontendConfig = {
                environmentMode: { edit: false, wpPreview: false, isScriptDebug: false },
                i18n: {
                    shareOnFacebook: "Share on Facebook",
                    shareOnTwitter: "Share on Twitter",
                    pinIt: "Pin it",
                    download: "Download",
                    downloadImage: "Download image",
                    fullscreen: "Fullscreen",
                    zoom: "Zoom",
                    share: "Share",
                    playVideo: "Play Video",
                    previous: "Previous",
                    next: "Next",
                    close: "Close",
                },
                is_rtl: false,
                breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
                responsive: {
                    breakpoints: {
                        mobile: { label: "Mobile Portrait", value: 767, default_value: 767, direction: "max", is_enabled: true },
                        mobile_extra: { label: "Mobile Landscape", value: 880, default_value: 880, direction: "max", is_enabled: false },
                        tablet: { label: "Tablet Portrait", value: 1024, default_value: 1024, direction: "max", is_enabled: true },
                        tablet_extra: { label: "Tablet Landscape", value: 1200, default_value: 1200, direction: "max", is_enabled: false },
                        laptop: { label: "Laptop", value: 1366, default_value: 1366, direction: "max", is_enabled: false },
                        widescreen: { label: "Widescreen", value: 2400, default_value: 2400, direction: "min", is_enabled: false },
                    },
                },
                version: "3.13.3",
                is_static: false,
                experimentalFeatures: {
                    e_dom_optimization: true,
                    e_optimized_assets_loading: true,
                    e_optimized_css_loading: true,
                    a11y_improvements: true,
                    additional_custom_breakpoints: true,
                    e_swiper_latest: true,
                    theme_builder_v2: true,
                    "hello-theme-header-footer": true,
                    "landing-pages": true,
                    "page-transitions": true,
                    notes: true,
                    loop: true,
                    "form-submissions": true,
                    e_scroll_snap: true,
                },
                urls: { assets: ".\/\/content\/plugins\/elementor\/assets\/" },
                swiperClass: "swiper",
                settings: { page: [], editorPreferences: [] },
                kit: {
                    active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                    global_image_lightbox: "no",
                    lightbox_enable_counter: "no",
                    lightbox_enable_fullscreen: "no",
                    lightbox_enable_zoom: "no",
                    lightbox_enable_share: "no",
                    lightbox_title_src: "title",
                    lightbox_description_src: "description",
                    hello_header_logo_type: "title",
                    hello_header_menu_layout: "horizontal",
                    hello_footer_logo_type: "logo",
                },
                post: { id: 472, title: "Website", excerpt: "", featuredImage: false },
            };
        </script>

        <script src="{{asset('frontpage/content/plugins/elementor/assets/js/frontend.min.js?ver=3.13.3')}}" id="elementor-frontend-js"></script>
        <script src="{{asset('frontpage/content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.13.2')}}" id="pro-elements-handlers-js"></script>
    </body>
</html>