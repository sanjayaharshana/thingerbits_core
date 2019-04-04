<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <style>
            .container {
                margin-right: auto;
                margin-left: auto;
                padding-left: 15px;
                padding-right: 15px;
            }

            @media (min-width: 768px) {
                .container {
                    width: 750px;
                }
            }

            @media (min-width: 992px) {
                .container {
                    width: 970px;
                }
            }

            @media (min-width: 1200px) {
                .container {
                    width: 1170px;
                }
            }

            .col-md-6,
            .col-sm-7 {
                position: relative;
                min-height: 1px;
                padding-left: 15px;
                padding-right: 15px;
            }

            @media (min-width: 768px) {
                .col-sm-7 {
                    float: left;
                }

                .col-sm-7 {
                    width: 58.33333333%;
                }
            }

            @media (min-width: 992px) {
                .col-md-6 {
                    float: left;
                }

                .col-md-6 {
                    width: 50%;
                }
            }

            .container:before,
            .container:after {
                content: " ";
                display: table;
            }

            .container:after {
                clear: both;
            }

            .text-center {
                text-align: center;
            }

            .center-block {
                display: block;
                margin-left: auto;
                margin-right: auto;
                float: none;
            }

            /* reset */
            html {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
                -webkit-print-color-adjust: exact;
            }

            body {
                font-family: 'Open Sans', sans-serif;
                font-size: 15px;
                min-width: 350px;
                margin: 0;
            }

            h1, h2, h3, h4, h5, h6,
            ul, li {
                margin: 0;
                padding: 0;
                color: #555555;
            }

            h1 {
                font-size: 36px;
                line-height: 44px;
            }

            h2 {
                font-size: 30px;
                line-height: 36px;
            }

            h3 {
                font-size: 24px;
                line-height: 29px;
            }

            h4 {
                font-size: 21px;
                line-height: 26px;
            }

            h5 {
                font-size: 18px;
                line-height: 22px;
            }

            h6 {
                font-size: 16px;
                line-height: 20px;
            }

            p {
                font-size: 16px;
                line-height: 26px;
                color: #666666;
                margin: 0;
            }

            span {
                font-size: 16px;
                line-height: 26px;
                color: #666666;
                display: block;
            }

            .btn {
                display: inline-block;
                background: transparent;
                border: none;
                border-radius: 3px;
                outline: 0;
                padding: 11px 30px;
                text-decoration: none;
                -webkit-transition: 200ms ease-in-out;
                -o-transition: 200ms ease-in-out;
                transition: 200ms ease-in-out;
            }

            .rtl {
                direction: rtl;
            }

            .theme-blue .btn-primary {
                background: #0068e1;
                color: #fafafa;
            }

            .theme-violet .btn-primary {
                background: #783392;
                color: #fafafa;
            }

            .theme-red .btn-primary {
                background: #e30047;
                color: #fafafa;
            }

            .theme-sky-blue .btn-primary {
                background: #2ba1c0;
                color: #fafafa;
            }

            .theme-marrs-green .btn-primary {
                background: #0a6f75;
                color: #fafafa;
            }

            .theme-navy-blue .btn-primary {
                background: #31629f;
                color: #fafafa;
            }

            .theme-pink .btn-primary {
                background: #f15497;
                color: #fafafa;
            }

            .theme-black .btn-primary {
                background: #333645;
                color: #fafafa;
            }

            .theme-blue .btn-primary:hover {
                background: #1a86ff;
            }

            .theme-violet .btn-primary:hover {
                background: #9d44be;
            }

            .theme-red .btn-primary:hover {
                background: #ff2167;
            }

            .theme-sky-blue .btn-primary:hover {
                background: #3bb4d3;
            }

            .theme-marrs-green .btn-primary:hover {
                background: #0c858c;
            }

            .theme-navy-blue .btn-primary:hover {
                background: #3b75be;
            }

            .theme-pink .btn-primary:hover {
                background: #f36ca5;
            }

            .theme-black .btn-primary:hover {
                background: #494d62;
            }

            .header {
                padding: 30px 0;
            }

            .theme-blue .header {
                background: #0068e1;
            }

            .theme-violet .header {
                background: #783392;
            }

            .theme-red .header {
                background: #e30047;
            }

            .theme-sky-blue .header {
                background: #2ba1c0;
            }

            .theme-marrs-green .header {
                background: #0a6f75;
            }

            .theme-navy-blue .header {
                background: #31629f;
            }

            .theme-pink .header {
                background: #f15497;
            }

            .theme-black .header {
                background: #333645;
            }

            .header h2 a {
                text-decoration: none;
                color: #fafafa;
            }

            .content-wrapper {
                background: #fafafa;
            }

            .content-wrapper .content {
                max-width: 600px;
                margin: auto;
                padding: 40px 0;
            }

            .content h3 {
                margin-bottom: 15px;
            }

            .content .link {
                word-break: break-all;
                -webkit-transition: 200ms ease-in-out;
                -o-transition: 200ms ease-in-out;
                transition: 200ms ease-in-out;
            }

            .theme-blue .content .link {
                color: #0068e1;
            }

            .theme-violet .content .link {
                color: #783392;
            }

            .theme-red .content .link {
                color: #e30047;
            }

            .theme-sky-blue .content .link {
                color: #2ba1c0;
            }

            .theme-marrs-green .content .link {
                color: #0a6f75;
            }

            .theme-navy-blue .content .link {
                color: #31629f;
            }

            .theme-pink .content .link {
                color: #f15497;
            }

            .theme-black .content .link {
                color: #333645;
            }

            .theme-blue .content .link:hover {
                color: #1a86ff;
            }

            .theme-violet .content .link:hover {
                color: #9d44be;
            }

            .theme-red .content .link:hover {
                color: #ff2167;
            }

            .theme-sky-blue .content .link:hover {
                color: #3bb4d3;
            }

            .theme-marrs-green .content .link:hover {
                color: #0c858c;
            }

            .theme-navy-blue .content .link:hover {
                color: #3b75be;
            }

            .theme-pink .content .link:hover {
                color: #f36ca5;
            }

            .theme-black .content .link:hover {
                color: #494d62;
            }

            .content .btn {
                display: table;
                margin: 30px auto;
            }

            .content .content-bottom {
                border-top: 1px solid #e9e9e9;
                margin-top: 24px;
            }

            .content-bottom span {
                font-size: 15px;
                line-height: 24px;
                margin: 5px 0 10px;
            }

            .footer {
                background: #f1f3f7;
                padding: 15px 0;
            }

            .footer span {
                color: #555555;
            }

            .footer span a {
                text-decoration: none;
                -webkit-transition: 200ms ease-in-out;
                -o-transition: 200ms ease-in-out;
                transition: 200ms ease-in-out;
            }

            .theme-blue .footer span a {
                color: #0068e1;
            }

            .theme-violet .footer span a {
                color: #783392;
            }

            .theme-red .footer span a {
                color: #e30047;
            }

            .theme-sky-blue .footer span a {
                color: #2ba1c0;
            }

            .theme-marrs-green .footer span a {
                color: #0a6f75;
            }

            .theme-navy-blue .footer span a {
                color: #31629f;
            }

            .theme-pink .footer span a {
                color: #f15497;
            }

            .theme-black .footer span a {
                color: #333645;
            }

            .footer span a:hover {
                text-decoration: underline;
            }

            .theme-blue .footer span a:hover {
                color: #1a86ff;
            }

            .theme-violet .footer span a:hover {
                color: #9d44be;
            }

            .theme-red .footer span a:hover {
                color: #ff2167;
            }

            .theme-sky-blue .footer span a:hover {
                color: #3bb4d3;
            }

            .theme-marrs-green .footer span a:hover {
                color: #0c858c;
            }

            .theme-navy-blue .footer span a:hover {
                color: #3b75be;
            }

            .theme-pink .footer span a:hover {
                color: #f36ca5;
            }

            .theme-black .footer span a:hover {
                color: #494d62;
            }
        </style>
    </head>

    <body class="{{ setting('storefront_theme', 'theme-blue') }} {{ is_rtl() ? 'rtl' : 'ltr' }}">
        <header class="header">
            <div class="col-md-6 col-sm-7 center-block">
                <h2 class="text-center">
                    <a href="{{ route('home') }}">{{ setting('store_name') }}</a>
                </h2>
            </div>
        </header>

        <section class="content-wrapper">
            <div class="col-md-6 col-sm-7 center-block">
                <div class="content">
                    <h3>
                        {{ trans('user::email.hello', ['first_name' => $user->first_name]) }}
                    </h3>

                    <span>
                        {{ trans('user::email.received_a_password_reset_request') }}
                    </span>

                    <a href="{{ $url }}" class="btn btn-primary">
                        {{ trans('user::email.reset_password') }}
                    </a>

                    <span>
                        {{ trans('user::email.no_further_action_is_required') }}
                    </span>

                    <div class="content-bottom">
                        <span>
                            {{ trans('user::email.if_you\’re_having_trouble') }}
                        </span>

                        <a href="{{ $url }}" class="link">
                            {{ $url }}
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="col-md-6 col-sm-7 center-block">
                <span class="text-center">
                    &#xa9 {{ date('Y') }} <a href="{{ route('home') }}">{{ setting('store_name') }}</a>. {{ trans('user::email.all_rights_reserved') }}
                </span>
            </div>
        </footer>
    </body>
</html>
