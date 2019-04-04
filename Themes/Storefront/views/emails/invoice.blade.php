<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

        <style>
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
            ul, li,
            p {
                margin: 0;
                padding: 0;
                color: #444444;
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
                line-height: 22px;
            }

            label {
                font-weight: 600;
                font-size: 16px;
            }

            span {
                font-size: 16px;
            }

            table {
                border-collapse: collapse;
                border-spacing: 0;
                background-color: transparent;
            }

            td,
            th {
                padding: 0;
            }

            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            *:before,
            *:after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

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

                .col-sm-6 {
                    float: left;
                    width: 50%;
                }

                .rtl .col-sm-6 {
                    float: right;
                }
            }

            @media (min-width: 992px) {
                .container {
                    width: 970px;
                }

                .col-md-3, .col-md-9, .col-md-12 {
                    float: left;
                }

                .rtl .col-md-3,
                .rtl .col-md-9,
                .rtl .col-md-12 {
                    float: right;
                }

                .col-md-12 {
                    width: 100%;
                }

                .col-md-9 {
                    width: 75%;
                }

                .col-md-3 {
                    width: 25%;
                }
            }

            @media (min-width: 1200px) {
                .container {
                    width: 1170px;
                }
            }

            .row {
                margin-left: -15px;
                margin-right: -15px;
            }

            .col-md-3, .col-sm-6, .col-md-9,.col-md-12 {
                position: relative;
                min-height: 1px;
                padding-left: 15px;
                padding-right: 15px;
            }

            th {
                text-align: left;
            }

            .rtl th {
                text-align: right;
            }

            .table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }

            .table > thead > tr > th,
            .table > tbody > tr > th,
            .table > tfoot > tr > th,
            .table > thead > tr > td,
            .table > tbody > tr > td,
            .table > tfoot > tr > td {
                padding: 8px;
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #f1f1f1;
            }

            .table > thead > tr > th {
                vertical-align: bottom;
                border-bottom: 1px solid #e9e9e9;
            }

            .table > caption + thead > tr:first-child > th,
            .table > colgroup + thead > tr:first-child > th,
            .table > thead:first-child > tr:first-child > th,
            .table > caption + thead > tr:first-child > td,
            .table > colgroup + thead > tr:first-child > td,
            .table > thead:first-child > tr:first-child > td {
                border-top: 0;
            }

            .table > tbody + tbody {
                border-top: 2px solid #dddddd;
            }

            .table .table {
                background-color: #fafafa;
            }

            table col[class*="col-"] {
                position: static;
                float: none;
                display: table-column;
            }

            table td[class*="col-"],
            table th[class*="col-"] {
                position: static;
                float: none;
                display: table-cell;
            }

            .table-responsive {
                overflow-x: auto;
                min-height: 0.01%;
            }

            @media screen and (max-width: 767px) {
                .table-responsive {
                    width: 100%;
                    overflow-y: hidden;
                    -ms-overflow-style: -ms-autohiding-scrollbar;
                }

                .table-responsive > .table {
                    margin-bottom: 0;
                }

                .table-responsive > .table > thead > tr > th,
                .table-responsive > .table > tbody > tr > th,
                .table-responsive > .table > tfoot > tr > th,
                .table-responsive > .table > thead > tr > td,
                .table-responsive > .table > tbody > tr > td,
                .table-responsive > .table > tfoot > tr > td {
                    white-space: nowrap;
                }
            }

            .clearfix:before,
            .clearfix:after,
            .container:before,
            .container:after,
            .container-fluid:before,
            .container-fluid:after,
            .row:before,
            .row:after {
                content: " ";
                display: table;
            }

            .clearfix:after,
            .container:after,
            .container-fluid:after,
            .row:after {
                clear: both;
            }

            .pull-right {
                float: right !important;
            }

            .rtl .pull-right {
                float: left !important;
            }

            .pull-left {
                float: left !important;
            }

            .rtl .pull-left {
                float: right !important;
            }

            /* invoice style */
            .rtl {
                direction: rtl;
            }

            .invoice-wrapper {
                position: relative;
                padding-bottom: 30px;
            }

            .theme-blue .invoice-wrapper {
                border-bottom: 2px solid #0068e1;
            }

            .theme-violet .invoice-wrapper {
                border-bottom: 2px solid #783392;
            }

            .theme-red .invoice-wrapper {
                border-bottom: 2px solid #e30047;
            }

            .theme-sky-blue .invoice-wrapper {
                border-bottom: 2px solid #2ba1c0;
            }

            .theme-marrs-green .invoice-wrapper {
                border-bottom: 2px solid #0a6f75;
            }

            .theme-navy-blue .invoice-wrapper {
                border-bottom: 2px solid #31629f;
            }

            .theme-pink .invoice-wrapper {
                border-bottom: 2px solid #f15497;
            }

            .theme-black .invoice-wrapper {
                border-bottom: 2px solid #333645;
            }

            .invoice-wrapper .left-background {
                position: absolute;
                left: 0;
                top: 0;
                width: 285px;
                height: 100%;
                background: #262938;
                z-index: -1;
            }

            .rtl .invoice-wrapper .left-background {
                left: auto;
                right: 0;
            }

            .invoice-wrapper .invoice-header {
                margin-top: 40px;
            }

            .theme-blue .invoice-wrapper .invoice-header {
                background: rgba(0, 104, 225, 0.8);
            }

            .theme-violet .invoice-wrapper .invoice-header {
                background: rgba(120, 51, 146, 0.8);
            }

            .theme-red .invoice-wrapper .invoice-header {
                background: rgba(227, 0, 71, 0.8);
            }

            .theme-sky-blue .invoice-wrapper .invoice-header {
                background: rgba(43, 161, 192, 0.8);
            }

            .theme-marrs-green .invoice-wrapper .invoice-header {
                background: rgba(10, 111, 117, 0.8);
            }

            .theme-navy-blue .invoice-wrapper .invoice-header {
                background: rgba(49, 98, 159, 0.8);
            }

            .theme-pink .invoice-wrapper .invoice-header {
                background: rgba(241, 84, 151, 0.8);
            }

            .theme-black .invoice-wrapper .invoice-header {
                background: rgba(51, 54, 69, 0.8);
            }

            .invoice-header .invoice-header-right {
                margin-right: 15px;
            }

            .rtl .invoice-header .invoice-header-right {
                margin-right: 0;
                margin-left: 15px;
            }

            .invoice-wrapper .invoice-header .store-name {
                height: 152px;
                width: 100%;
                display: flex;
                align-items: center;
                text-align: center;
            }

            .invoice-header .store-name h1 {
                display: inline-block;
                text-align: center;
                color: #fafafa;
                margin: auto;
            }

            .invoice-header .store-name img {
                width: 200px;
                margin: auto;
            }

            .invoice-header .title {
                font-size: 60px;
                font-weight: 600;
                display: block;
                color: #fafafa;
                margin-top: 6px;
            }

            .invoice-header .invoice-info {
                margin-left: 4px;
            }

            .rtl .invoice-header .invoice-info {
                margin-left: 0;
                margin-right: 4px;
            }

            .invoice-header .invoice-info label {
                color: #fafafa;
            }

            .invoice-header .invoice-info span {
                font-size: 15px;
                float: right;
                color: #f9f9f9;
            }

            .rtl .invoice-header .invoice-info span {
                float: left;
            }

            .invoice-body .order-details {
                margin-top: 30px;
                padding: 0 15px;
            }

            .order-details h5,
            .invoice-address h5 {
                font-weight: 400;
                color: #fafafa;
                margin-bottom: 8px;
            }

            .order-details .table-responsive {
                overflow: hidden;
                margin: 0 -8px;
            }

            .order-details .table {
                margin-bottom: 0;
            }

            .order-details .table td {
                font-size: 15px;
                color: #c2c2c2;
                border: none;
                padding: 4px 8px;
            }

            .order-details .table td:first-child {
                font-weight: 600;
            }

            .order-details .table td:last-child {
                word-break: break-all;
            }

            .invoice-body .invoice-address {
                margin-top: 25px;
                padding: 0 15px;
            }

            .invoice-address > span {
                font-size: 15px;
                display: block;
                color: #c2c2c2;
                padding: 4px 0;
            }

            .invoice-body .cart-list {
                border: none;
                margin-top: 22px;
            }

            .cart-list .table {
                border-bottom: 1px solid #e9e9e9;
                margin: 0;
            }

            .invoice-body .cart-list tbody td {
                padding: 14px 0;
            }

            .cart-list thead tr th {
                font-weight: 600;
                font-size: 16px;
                color: #626060;
            }

            .cart-list tbody td:nth-child(4) span {
                font-weight: 600;
            }

            .cart-list .table th {
                padding-left: 0;
                padding-right: 0;
            }

            .cart-list .table-responsive {
                padding: 0 15px;
            }

            .cart-list .table-responsive td {
                color: #444444;
                vertical-align: middle;
            }

            .cart-list .option {
                margin-top: 5px;
                white-space: nowrap;
            }

            .cart-list .option span {
                font-size: 14px;
                display: block;
            }

            .cart-list .option span span {
                margin-left: 10px;
                color: #9a9a9a;
                display: inline-block;
            }

            .rtl .cart-list .option span span {
                margin-left: 0;
                margin-right: 10px;
            }

            .invoice-body .total {
                width: 300px;
                margin: 20px 15px 0 0;
            }

            .rtl .invoice-body .total {
                margin: 20px 0 0 15px;
            }

            .total .table {
                margin-bottom: 0px;
            }

            .total .table tr:last-child {
                border-top: 1px solid #e9e9e9;
            }

            .total .table td {
                font-size: 17px;
                border: none;
                color: #444444;
                padding: 6px 0;
            }

            .total .table td:last-child {
                text-align: right;
            }

            .rtl .total .table td:last-child {
                text-align: left;
            }

            .total .table tr:last-child td {
                font-weight: 600;
            }

            .total .coupon-code {
                font-weight: 600;
            }

            @media screen and (max-width: 1200px) {
                .invoice-wrapper .left-background {
                    width: 235px;
                }

                .invoice-body .order-details,
                .invoice-body .invoice-address {
                    padding: 0;
                }
            }

            @media screen and (max-width: 991px) {
                .invoice-wrapper {
                    padding-bottom: 30px;
                }

                .invoice-wrapper .left-background {
                    display: none;
                }

                .invoice-wrapper .invoice-header .store-name {
                    height: auto;
                }

                .invoice-wrapper .invoice-header .store-name h1 {
                    margin-top: 23px;
                }

                .invoice-wrapper .invoice-header .store-name img {
                    margin-top: 22px;
                }

                .invoice-wrapper .invoice-header .invoice-header-right {
                    float: none !important;
                    margin: auto;
                    display: table;
                }

                .invoice-header .invoice-info {
                    margin-bottom: 17px;
                }

                .order-details h5,
                .invoice-address h5 {
                    font-weight: 600;
                    color: #444444;
                }

                .order-details .table td,
                .invoice-address > span {
                    color: #444444;
                }

                .order-details .table td:first-child {
                    color: #292929;
                }

                .cart-list .table-responsive {
                    padding: 0;
                }

                .invoice-body .total {
                    margin-right: 0;
                }

                .rtl .invoice-body .total {
                    margin-left: 0;
                }
            }

            @media screen and (max-width: 767px) {
                .invoice-wrapper {
                    margin-left: -15px;
                    margin-right: -15px;
                }

                .invoice-wrapper .invoice-body {
                    padding: 0;
                }

                .invoice-body .cart-list {
                    margin-top: 30px;
                }

                .cart-list thead {
                    display: none;
                }

                .cart-list .table > tbody > tr > td {
                    border-top: none;
                }

                .cart-list .table > tbody > tr {
                    border-top: 1px solid #f1f1f1;
                }

                .cart-list .table > tbody > tr:first-child {
                    border-top: 1px solid #e9e9e9;
                }

                .cart-list tbody td:nth-child(1) {
                    display: block;
                    padding: 14px 0 8px 0;
                }

                .cart-list tbody td:nth-child(2),
                .cart-list tbody td:nth-child(3) {
                    display: block;
                    padding: 0 0 5px 0;
                }

                .cart-list tbody td:nth-child(4) {
                    display: block;
                    padding: 0 0 14px 0;
                }

                .cart-list tbody td label {
                    font-size: 15px;
                }

                .rtl .cart-list tbody td label {
                    float: right;
                }

                .cart-list tbody td label + span {
                    font-size: 15px;
                    margin-left: 5px;
                }

                .rtl .cart-list tbody td label + span {
                    margin-left: 0;
                    margin-right: 5px;
                }
            }

            @media screen and (min-width: 768px) {
                .visible-xs {
                    display: none;
                }
            }

            @media print {
                .invoice-wrapper {
                    border: none !important;
                }

                .invoice-wrapper .invoice-header {
                    margin-top: 15px;
                }

                .invoice-wrapper .left-background {
                    width: 0;
                    height: 0;
                }

                .invoice-wrapper .invoice-header {
                    background: transparent !important;
                }

                .invoice-header .col-md-3 {
                    float: left;
                }

                .rtl .invoice-header .col-md-3 {
                    float: right;
                }

                .invoice-header .col-md-9 {
                    float: right;
                }

                .rtl .invoice-header .col-md-9 {
                    float: left;
                }

                .invoice-wrapper .invoice-header-right {
                    margin-right: 15px;
                }

                .rtl .invoice-wrapper .invoice-header-right {
                    margin-right: 0;
                    margin-left: 15px;
                }

                .invoice-header .store-name h1 {
                    margin-left: 15px;
                    color: #444444;
                }

                .rtl .invoice-header .store-name h1 {
                    margin-left: 0;
                    margin-right: 15px;
                }

                .invoice-header-right .title {
                    color: #444444;
                }

                .invoice-header-right .invoice-info label {
                    color: #444444;
                }

                .invoice-header-right .invoice-info span {
                    color: #626060;
                }

                .invoice-body .col-md-3 {
                    width: 100%;
                }

                .invoice-body .col-md-3 .col-sm-6 {
                    width: 50%;
                    float: left;
                }

                .rtl .invoice-body .col-md-3 .col-sm-6 {
                    float: right;
                }

                .invoice-body .col-md-9 {
                    width: 100%;
                }

                .invoice-body .order-details {
                    margin-top: 15px;
                }

                .order-details h5,
                .invoice-address h5 {
                    color: #292929;
                }

                .order-details .table td:first-child {
                    color: #626060;
                }

                .order-details .table td:last-child {
                    color: #626060;
                }

                .invoice-address > span {
                    color: #626060;
                }

                .invoice-body .cart-list {
                    margin-top: 30px;
                }

                .cart-list .table-responsive tbody td label {
                    display: none;
                }
            }

            @page {
                size: A4;
                margin: 0;
            }
        </style>
    </head>

    <body class="{{ setting('storefront_theme', 'theme-blue') }} {{ is_rtl() ? 'rtl' : 'ltr' }}">
        <div class="container">
            <div class="invoice-wrapper clearfix">
                <div class="left-background"></div>
                <div class="invoice-header clearfix">
                    <div class="col-md-3">
                        <div class="store-name">
                            <h1>{{ setting('store_name') }}</h1>
                        </div>
                    </div>

                    <div class="col-md-9 clearfix">
                        <div class="invoice-header-right pull-right">
                            <span class="title">
                                {{ trans('storefront::invoice.invoice') }}
                            </span>

                            <div class="invoice-info clearfix">
                                <div class="invoice-id">
                                    <label for="invoice-id">{{ trans('storefront::invoice.order_id') }}:</label>
                                    <span>#{{ $order->id }}</span>
                                </div>

                                <div class="invoice-date">
                                    <label for="invoice-date">{{ trans('storefront::invoice.date') }}:</label>
                                    <span>{{ $order->created_at->toFormattedDateString() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="invoice-body clearfix">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <div class="order-details">
                                    <h5>{{ trans('storefront::invoice.order_details') }}</h5>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>{{ trans('storefront::invoice.email') }}:</td>
                                                    <td>{{ $order->customer_email }}</td>
                                                </tr>

                                                <tr>
                                                    <td>{{ trans('storefront::invoice.phone') }}:</td>
                                                    <td>{{ $order->customer_phone ?: '-' }}</td>
                                                </tr>

                                                <tr>
                                                    <td>{{ trans('storefront::invoice.payment_method') }}:</td>
                                                    <td>{{ $order->payment_method }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <div class="invoice-address">
                                    <h5>{{ trans('storefront::invoice.shipping_address') }}</h5>

                                    <span>{{ $order->shipping_full_name }}</span>
                                    <span>{{ $order->shipping_address_1 }}</span>
                                    <span>{{ $order->shipping_address_2 }}</span>
                                    <span>{{ $order->shipping_city }}, {{ $order->shipping_state_name }} {{ $order->shipping_zip }}</span>
                                    <span>{{ $order->shipping_country_name }}</span>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-6">
                                <div class="invoice-address">
                                    <h5>{{ trans('storefront::invoice.billing_address') }}</h5>

                                    <span>{{ $order->billing_full_name }}</span>
                                    <span>{{ $order->billing_address_1 }}</span>
                                    <span>{{ $order->billing_address_2 }}</span>
                                    <span>{{ $order->billing_city }}, {{ $order->billing_state_name }} {{ $order->billing_zip }}</span>
                                    <span>{{ $order->billing_country_name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 clearfix">
                        <div class="cart-list">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{ trans('storefront::invoice.product') }}</th>
                                            <th>{{ trans('storefront::invoice.unit_price') }}</th>
                                            <th>{{ trans('storefront::invoice.quantity') }}</th>
                                            <th>{{ trans('storefront::invoice.line_total') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($order->products as $product)
                                            <tr>
                                                <td>
                                                    <span>{{ $product->name }}</span>

                                                    @if ($product->hasAnyOption())
                                                        <div class="option">
                                                            @foreach ($product->options as $option)
                                                                <span>{{ $option->name }}: <span>{{ $option->values->implode('label', ', ') }}</span></span>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </td>

                                                <td>
                                                    <label class="visible-xs">{{ trans('storefront::invoice.unit_price') }}:</label>
                                                    <span>{{ $product->unit_price->convert($order->currency, $order->currency_rate)->format($order->currency) }}</span>
                                                </td>

                                                <td>
                                                    <label class="visible-xs">{{ trans('storefront::invoice.quantity') }}:</label>
                                                    <span>{{ intl_number($product->qty) }}</span>
                                                </td>

                                                <td>
                                                    <label class="visible-xs">{{ trans('storefront::invoice.line_total') }}:</label>
                                                    <span>{{ $product->line_total->convert($order->currency, $order->currency_rate)->format($order->currency) }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="total pull-right">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>{{ trans('storefront::invoice.subtotal') }}</td>
                                        <td>{{ $order->sub_total->convert($order->currency, $order->currency_rate)->format($order->currency) }}</td>
                                    </tr>

                                    @if ($order->hasShippingMethod())
                                        <tr>
                                            <td>{{ $order->shipping_method }}</td>
                                            <td>{{ $order->shipping_cost->convert($order->currency, $order->currency_rate)->format($order->currency) }}</td>
                                        </tr>
                                    @endif

                                    @if ($order->hasCoupon())
                                        <tr>
                                            <td>{{ trans('storefront::invoice.coupon') }} (<span class="coupon-code">{{ $order->coupon->code }}</span>)</td>
                                            <td>{{ $order->discount->convert($order->currency, $order->currency_rate)->format($order->currency) }}</td>
                                        </tr>
                                    @endif

                                    @foreach ($order->taxes as $tax)
                                        <tr>
                                            <td>{{ $tax->name }}</td>
                                            <td>{{ $tax->order_tax->amount->convert($order->currency, $order->currency_rate)->format($order->currency) }}</td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td>{{ trans('storefront::invoice.total') }}:</td>
                                        <td>{{ $order->total->convert($order->currency, $order->currency_rate)->format($order->currency) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
