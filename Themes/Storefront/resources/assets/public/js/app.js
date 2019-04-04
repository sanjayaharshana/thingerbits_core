require('./bootstrap');
import Drift from 'drift-zoom';
import noUiSlider from 'nouislider';
import { stopButtonLoading, trans } from './functions';

$(function () {
    let isRTL = $('body').hasClass('rtl');
    let directionClass = isRTL ? 'rtl' : 'ltr';

    /*----------------------------------------*/
    /*      sticky nav
    /*----------------------------------------*/

    let stickyNavTop = $('.header-wrapper').offset().top;

    let stickyNav = function () {
        let scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            $('.header-inner, .autocomplete-suggestions').addClass('sticky');
        } else {
            $('.header-inner, .autocomplete-suggestions').removeClass('sticky');
        }
    };

    $(window).on('load scroll', function () {
        stickyNav();
    });

    /*----------------------------------------*/
    /*      content wrapper minimum height
    /*----------------------------------------*/

    let contentWrapper = $('.content-wrapper');
    let footer = $('.footer');

    $(window).on('load resize', () => {
        $('.content-wrapper').css('min-height', $(window).height() - contentWrapper.offset().top - footer.height() + 'px');
    });

    /*----------------------------------------*/
    /*      search box
    /*----------------------------------------*/

    function autocomplete(selector, options) {
        $(selector).autocomplete(Object.assign({
            dataType: 'json',
            triggerSelectOnValidInput: false,
            transformResult(response) {
                let products = response.data.map((product) => {
                    return {
                        value: product.name.toLowerCase(),
                        label: product.name.toLowerCase(),
                    };
                });

                return { suggestions: products };
            },
            onSelect() {
                $(selector).closest('#search-box-form').submit();
            },
        }, options));
    }

    autocomplete('.search-box .search-box-input', {
        serviceUrl() {
            return route('products.index', { category: $('.search-box-select').val(), perPage: 10 });
        },
    });

    autocomplete('.mobile-search .search-box-input', {
        appendTo: '.mobile-search .dropdown-menu',
        serviceUrl() {
            return route('products.index', { perPage: 5 });
        },
        beforeRender(container) {
            container.addClass('mobile-search-suggestions');
        },
    });

    $('#search-box-form').on('submit', function (e) {
        e.preventDefault();

        let searchBoxInputs = $('.search-box-input');

        searchBoxInputs.each((i, el) => {
            if (el.value === '') {
                el.removeAttribute('name');
            }
        });

        let categorySelect = $('select[name="category"]');

        if (categorySelect.val() === '') {
            categorySelect.removeAttr('name');
        }

        e.currentTarget.submit();
    });

    /*----------------------------------------*/
    /*      dynamic select option width
    /*----------------------------------------*/

    $('.select').each(function () {
        let self = $(this);

        self.on('change', function () {
            let selectOption = self.find('option:selected').text();
            let tempSelect = $('<span>').html(selectOption);

            tempSelect.appendTo('body');

            let selectOptionWidth = tempSelect.width();

            tempSelect.remove();

            self.width(selectOptionWidth);
        }).change();
    });

    /*----------------------------------------*/
    /*      button loader
    /*----------------------------------------*/

    $(document).on('click', '[data-loading]', (e) => {
        let button = $(e.currentTarget);

        if (button.is('i')) {
            button = button.parent();
        }

        if (button.hasClass('disabled')) {
            return e.preventDefault();
        }

        button.data('loading-text', button.html())
            .addClass('btn-loading')
            .button('loading');
    });

    /*----------------------------------------*/
    /*      mega menu
    /*----------------------------------------*/

    $('.navbar-default .dropdown-toggle').append('<i class="fa fa-angle-down"></i>');

    /*----------------------------------------*/
    /*      sidebar
    /*----------------------------------------*/

    $('.navbar-toggle').on('click', function () {
        $('.wrapper').toggleClass('offcanvas');
    });

    $(window).on('load resize', function () {
        if ($(window).width() >= 768) {
            $('.wrapper').removeClass('offcanvas');
        }
    });

    $('.sidebar-content li').each(function () {
        if ($(this).children('ul').length > 0) {
            $(this).addClass('parent');
        }
    });

    let dropdown = $('.sidebar-content li.parent > a');

    dropdown.after('<i class="fa fa-angle-down pull-right" aria-hidden="true"></i>');

    let sidebarContent = $('.sidebar-content > li');

    sidebarContent.on('click', function () {

        if (! $(this).hasClass('active')) {
            $('.sidebar-content > li').removeClass('active');
            $(this).addClass('active');
        } else {
            $('.sidebar-content > li').removeClass('active');
        }

        if (! $(this).children('ul').hasClass('open')) {
            $('.sidebar-content .open').removeClass('open').slideUp(300);
            $(this).children('ul').addClass('open').slideDown(300);
        } else {
            $('.sidebar-content .open').removeClass('open').slideUp(300);
        }

    });

    $('.sidebar-content > li > a').on('click', function (e) {
        e.stopPropagation();
    });

    $('.sidebar-content > li > ul').on('click', function (e) {
        e.stopPropagation();
    });

    let submenu = $('.submenu');

    submenu.on('click', function () {

        if (! $(this).hasClass('active')) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }

        $(this).children('ul').slideToggle(300);
    });

    $('.submenu ul').on('click', function (e) {
        e.stopPropagation();
    });

    /*----------------------------------------*/
    /*      dropdown open on cart item remove
    /*----------------------------------------*/

    $('body').on('click', '.dropdown-menu', function (e) {
        $(this).parent().is('.open') && e.stopPropagation();
    });

    /*----------------------------------------*/
    /*      mini cart
    /*----------------------------------------*/

    $('.mini-cart').slimScroll({
        height: '250px',
    });

    let userCart = $('.user-cart');
    let miniCartVariants = $('.mini-cart-variants');

    userCart.on('mouseleave', () => {
        $('.mini-cart-variants').removeClass('open');
    });

    miniCartVariants.on('click', (e) => {
        let target = $(e.currentTarget);

        if (! target.hasClass('open')) {
            miniCartVariants.removeClass('open');

            target.addClass('open');
        } else {
            miniCartVariants.removeClass('open');
        }

        e.stopPropagation();
        e.preventDefault();
    });

    /*----------------------------------------*/
    /*      slider animation
    /*----------------------------------------*/

    $('.home-slider').on('init', () => {
        let firstAnimatingElements = $('div.slide:first-child').find('[data-effect]');

        animateSlider(firstAnimatingElements);
    });

    $('.home-slider').on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        let animatingElements = $(`div.slick-slide[data-slick-index=${nextSlide}]`).find('[data-effect]');

        animateSlider(animatingElements);
    });

    function animateSlider(elements) {
        let animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

        elements.each(function () {
            let element = $(this);
            let animationDelay = element.data('delay');
            let animationEffect = `animated ${element.data('effect')}`;

            element.css({
                'animation-delay': animationDelay,
                '-webkit-animation-delay': animationDelay,
            });

            element.addClass(animationEffect).one(animationEndEvents, () => {
                element.removeClass(animationEffect);
            });
        });
    }

    /*----------------------------------------*/
    /*      home slider
    /*----------------------------------------*/

    let homeSlider = $('.home-slider');

    if (homeSlider.length !== 0) {
        homeSlider.slick({
            autoplay: !! JSON.parse(homeSlider.data('autoplay')),
            autoplaySpeed: parseInt(homeSlider.data('autoplay-speed')),
            arrows: !! JSON.parse(homeSlider.data('arrows')),
            fade: true,
            dots: false,
            pauseOnHover: true,
            pauseOnFocus: false,
            rtl: isRTL,
        });
    }

    /*----------------------------------------*/
    /*      resize slick on active tab
    /*----------------------------------------*/

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('.product-slider, .tab-product-slider').slick('setPosition');
    });

    /*----------------------------------------*/
    /*      product slider
    /*----------------------------------------*/

    let productSlider = $('.product-slider');
    let productSlider2 = $('.product-slider-2');

    productSlider.slick({
        autoplay: false,
        autoplaySpeed: 10000,
        dots: false,
        arrows: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        rtl: isRTL,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                },
            },
            {
                breakpoint: 681,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 501,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    productSlider2.slick({
        autoplay: false,
        autoplaySpeed: 10000,
        dots: false,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        rtl: isRTL,
        responsive: [
            {
                breakpoint: 681,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 501,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    /*----------------------------------------*/
    /*      tab product slider
    /*----------------------------------------*/

    let tabProductSlider = $('.tab-product-slider');

    tabProductSlider.slick({
        autoplay: false,
        autoplaySpeed: 10000,
        dots: true,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        rtl: isRTL,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                },
            },
            {
                breakpoint: 681,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 501,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    /*----------------------------------------*/
    /*      vertical products slider
    /*----------------------------------------*/

    let verticalProducts = $('.vertical-products');

    verticalProducts.slick({
        autoplay: false,
        autoplaySpeed: 4000,
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        rows: 0,
        rtl: isRTL,
    });

    /*----------------------------------------*/
    /*      landscape product slider
    /*----------------------------------------*/

    let landscapeProducts = $('.landscape-products');

    landscapeProducts.slick({
        infinite: true,
        autoplay: false,
        autoplaySpeed: 10000,
        dots: false,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        rtl: isRTL,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    /*----------------------------------------*/
    /*      brands slider
    /*----------------------------------------*/

    let brands = $('.brands');

    brands.slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: false,
        arrows: false,
        rtl: isRTL,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                },
            },
            {
                breakpoint: 601,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            }
        ],
    });

    /*----------------------------------------*/
    /*      scroll to top
    /*----------------------------------------*/

    $(window).on('load scroll', function () {
        if ($(this).scrollTop() > 200) {
            $('.scroll-top').addClass('active');
        } else {
            $('.scroll-top').removeClass('active');
        }
    });

    $('.scroll-top').on('click', function () {
        $('html, body').animate({
            scrollTop: 0,
        }, 1000, 'easeInOutQuint');

        return false;
    });

    /*----------------------------------------*/
    /*      tooltip
    /*----------------------------------------*/

    $('[data-toggle="tooltip"]').tooltip({
        trigger: 'hover',
    });

    /*----------------------------------------*/
    /*      footer mobile collapse
    /*----------------------------------------*/

    $(window).on('load resize', function () {
        if ($(window).outerWidth() <= 767) {
            $('.mobile-collapse').next().slideUp(0);
        } else {
            $('.mobile-collapse').next().slideDown(0);
        }
    });

    $('.mobile-collapse').on('click', function () {
        if ($(window).outerWidth() >= 767) {
            return;
        }

        let list = $(this).next();

        if (!list.hasClass('show')) {
            $('.links .show').removeClass('show').slideUp(300);

            list.addClass('show').slideDown(300);
        } else {
            $('.links .show').removeClass('show').slideUp(300);
        }

        if (! $(this).hasClass('active')) {
            $('.links .active').removeClass('active');

            $(this).addClass('active');
        } else {
            $('.links .active').removeClass('active');
        }
    });

    /*----------------------------------------*/
    /*      quantity
    /*----------------------------------------*/

    function quantity() {
        $('.btn-number').on('click', function (e) {
            e.preventDefault();

            let type = $(this).attr('data-type');
            let input = $(this).closest('.input-group-quantity').find('input.input-quantity');
            let minValue = input.attr('min');
            let maxValue = input.attr('max');
            let currentValue = parseInt(input.val());

            if (! $.isNumeric(currentValue)) {
                input.val(minValue);
            }

            if (type === 'minus') {
                if (currentValue > minValue) {
                    input.val(currentValue - 1);
                    $('.btn-number.btn-plus').removeAttr('disabled');
                }

                if (input.val() === minValue) {
                    $(this).attr('disabled', true);
                }
            } else if (type === 'plus') {
                if (! maxValue || currentValue < maxValue) {
                    input.val(currentValue + 1);
                    $('.btn-number.btn-minus').removeAttr('disabled');
                }

                if (input.val() === maxValue) {
                    $(this).attr('disabled', true);
                }
            }
        });

        $('.input-number').on('input', function () {
            let self = $(this);
            let minValue = parseInt(self.attr('min'));
            let maxValue = parseInt(self.attr('max'));
            let currentValue = parseInt(self.val());

            if (! $.isNumeric(self.val())) {
                self.val(minValue);
                $('.btn-number.btn-minus').attr('disabled', true);
            }

            if (currentValue < minValue) {
                self.val(minValue);
                $('.btn-number.btn-minus').attr('disabled', true);
            }

            if (maxValue && currentValue > maxValue) {
                self.val(maxValue);
                $('.btn-number.btn-plus').attr('disabled', true);
            }
        });
    }

    quantity();

    /*----------------------------------------*/
    /*      product image
    /*----------------------------------------*/

    function productImage(baseImageConfig = {}, additionalImageConfig = {}) {
        let baseImage = $('.base-image');
        let additionalImage = $('.additional-image');

        baseImage.slick($.extend({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            infinite: false,
            fade: false,
            draggable: false,
            swipe: false,
            rows: 0,
            rtl: isRTL,
        }, baseImageConfig));

        additionalImage.slick($.extend({
            slidesToShow: 4,
            slideToScroll: 1,
            dots: false,
            arrows: true,
            infinite: false,
            centerMode: false,
            focusOnSelect: true,
            asNavFor: '.base-image',
            rows: 0,
            rtl: isRTL,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    },
                },
            ],
        }, additionalImageConfig));

        $('.base-image-inner img').each((i, img) => {
            new Drift(img, {
                sourceAttribute: 'src',
                paneContainer: document.querySelector('.product-details'),
                inlinePane: 991,
                inlineOffsetY: -80,
                containInline: true,
                hoverBoundingBox: true,
            });
        });

        baseImage.slickLightbox({
            itemSelector: '.base-image-inner',
            useHistoryApi: true,
            slick: {
                infinite: false,
                rtl: isRTL,
            },
        });
    }

    productImage();

    $('.thumb-image').on('click', function () {

        $('.thumb-image').removeClass('slick-current');
        $(this).addClass('slick-current');
    });

    /*----------------------------------------*/
    /*      selectize
    /*----------------------------------------*/

    function selectize() {
        let selects = $('select.selectize').removeClass('custom-select-black');

        for (let select of selects) {
            $(select).selectize({
                delimiter: ',',
                persist: true,
                selectOnTab: true,
                hideSelected: false,
                allowEmptyOption: true,
                plugins: ['remove_button'],
            });
        }
    }

    selectize();

    /*----------------------------------------*/
    /*      filter category
    /*----------------------------------------*/

    $('.filter-category li').each((i, li) => {
        if ($(li).children('ul').length > 0) {
            $(li).addClass('parent');
        }
    });

    let categoryDropdown = $('.filter-category li.parent > a');

    categoryDropdown.before('<i class="fa fa-angle-right pull-left" aria-hidden="true"></i>');

    let parentUls = $('.filter-category li.active').parentsUntil('.filter-category', 'ul');

    parentUls.slideDown().addClass('open');

    $('.filter-category ul.open').siblings('i').addClass('open');

    $('.filter-category li i').on('click', (e) => {
        $(e.currentTarget).toggleClass('open').siblings('ul').slideToggle(300);
    });

    /*----------------------------------------*/
    /*      tab wizard
    /*----------------------------------------*/

    let continueButton = $('.continue-button');

    $('.wizard .nav-tabs li a').on('click', function () {
        let self = $(this).parent();

        self.removeClass('selected');
        self.prev().addClass('selected');
        self.next().removeClass('selected');

        if (self.hasClass('disabled')) {
            self.prev().removeClass('selected');
        }

        if ($('.wizard .nav-tabs li').hasClass('selected')) {
            $('.wizard .nav-tabs li.selected').prev().addClass('selected');
        }

        if (self.hasClass('disabled') || self.hasClass('active')) {
            continueButton.removeClass('');
        } else {
            continueButton.removeClass('collapsed');
        }
    });

    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        let target = $(e.currentTarget);

        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $('.next-step').on('click', function (e) {
        let li = $('.wizard .nav-tabs li.active');

        li.next().removeClass('disabled');

        $(li).next().find('a[data-toggle="tab"]').click();

        $('.wizard .nav-tabs li.active').prev().addClass('selected');

        $(this).removeClass('collapsed');
    });

    $('.prev-step').on('click', function (e) {
        let li = $('.wizard .nav-tabs li.active');

        $(li).prev().find('a[data-toggle="tab"]').click();
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        let step = $(e.currentTarget).data('step');
        let percent = (parseInt(step - 1) / 3) * 150;

        $('.progress-bar').css({ width: percent + '%' });
    });

    $('.ship-to-a-different-address label').on('click', function () {
        $(this).parent().toggleClass('clicked');

        $('.shipping-address').toggleClass('hide');

        $(window).resize();
    });

    $('.prev-step, .next-step').on('click', function () {
        $('#confirm .next-step').attr('disabled', true);

        if (! $('.confirm-tab').hasClass('disabled') && $('.checkout-terms > label').hasClass('checked')) {
            checkoutButton.removeAttr('disabled');
        }

        $(window).resize();
    });

    let checkoutButton = $('.btn-checkout');

    $('.checkout-terms > label').on('click', (e) => {
        let target = $(e.currentTarget);
        target.toggleClass('checked');

        if (! $('.confirm-tab').hasClass('disabled')) {
            let value = target.hasClass('checked') ? null : true;

            checkoutButton.prop('disabled', value);
        }
    });

    let createAccount = $('.create-account > .checkbox > label');

    createAccount.on('click', () => {
        $('.create-account > .form-group').toggleClass('hide');
    });

    let stripePayment = $('#stripe-payment');

    $('#payment .next-step').on('click', () => {
        let paymentMethod = $('[name="payment_method"]:checked').val();

        if (paymentMethod === 'stripe') {
            stripePayment.slideDown(300, () => {
                $(window).resize();
            });
        }

        $(`.payment-instructions.${paymentMethod}`).removeClass('hide');
    });

    $('#confirm .prev-step, .address-tab, .payment-tab').on('click', () => {
        $('#stripe-payment').slideUp(300);

        $('.payment-instructions').addClass('hide');
    });

    $('.confirm-tab').on('click', function () {
        if ($(this).hasClass('disabled')) {
            return;
        }

        let paymentMethod = $('[name="payment_method"]:checked').val();

        if (paymentMethod === 'stripe') {
            stripePayment.slideDown(300, () => {
                $(window).resize();
            });
        }

        $(`.payment-instructions.${paymentMethod}`).removeClass('hide');
    });

    /*----------------------------------------*/
    /*      sticky sidebar
    /*----------------------------------------*/

    $(window).on('load scroll resize', function () {
        let wizard = $('.wizard');

        if (wizard.length === 0) {
            return;
        }

        let scrollTop = $(this).scrollTop();
        let orderReview = $('.order-review');
        let cartList = $('.cart-list');
        let checkoutSidebar = $('.checkout-sidebar');
        let cartListSidebar = $('.cart-list-sidebar');
        let checkoutSidebarTop = wizard.height() - checkoutSidebar.height();
        let cartListSidebarTop = cartList.height() - cartListSidebar.height();

        if ($(this).width() <= 991) {
            orderReview.removeClass('sticky').removeClass('bottom').width('').css('top', '');
            return;
        }

        let wizardBottom = '';
        let wizardOffsetTop = wizard.offset().top - 100;

        if (wizard.length !== 1) {
            wizardBottom = '';
        } else {
            wizardBottom = wizard.height() + wizard.offset().top - checkoutSidebar.height() - 100;
        }

        let cartListBottom = '';
        let cartListOffsetTop = cartList.offset().top - 100;

        if (cartList.length !== 1) {
            cartListBottom = '';
        } else {
            cartListBottom = cartList.height() + cartList.offset().top - cartListSidebar.height() - 100;
        }

        orderReview.width(
            orderReview.parent().width()
        );

        function stickySidebar(leftContainerOffsetTop, rightSidebar, leftContainerBottom, rightSidebarTop) {
            if (scrollTop >= leftContainerOffsetTop) {
                rightSidebar.addClass('sticky');
            } else {
                rightSidebar.removeClass('sticky');
            }

            if (scrollTop >= leftContainerBottom) {
                rightSidebar.removeClass('sticky').addClass('bottom').css('top', rightSidebarTop);
            } else {
                rightSidebar.removeClass('bottom').css('top', '');
            }
        }

        stickySidebar(wizardOffsetTop, checkoutSidebar, wizardBottom, checkoutSidebarTop);
        stickySidebar(cartListOffsetTop, cartListSidebar, cartListBottom, cartListSidebarTop);
    });

    /*----------------------------------------*/
    /*      range picker
    /*----------------------------------------*/

    let priceRangeSlider = document.getElementById('price-range-slider');

    if (priceRangeSlider !== null) {
        noUiSlider.create(priceRangeSlider, {
            start: [0, priceRangeSlider.dataset.toPrice],
            connect: true,
            direction: directionClass,
            range: {
                min: 0,
                max: Number(priceRangeSlider.dataset.max) + 1,
            },
        });

        let inputNumberFrom = document.querySelector('.range-from');
        let inputNumberTo = document.querySelector('.range-to');

        priceRangeSlider.noUiSlider.on('update', function (values, handle) {
            let value = values[handle];

            if (handle) {
                inputNumberTo.value = Math.round(value);
            } else {
                inputNumberFrom.value = Math.round(value);
            }
        });

        inputNumberFrom.addEventListener('change', function () {
            priceRangeSlider.noUiSlider.set([this.value, null]);
        });

        inputNumberTo.addEventListener('change', function () {
            priceRangeSlider.noUiSlider.set([null, this.value]);
        });
    }

    /*----------------------------------------*/
    /*      filter options scroll
    /*----------------------------------------*/

    $('.filter-scroll').slimScroll({
        height: '215px',
    });

    /*----------------------------------------*/
    /*      quick view modal
    /*----------------------------------------*/

    $('.btn-quick-view').on('click', (e) => {
        e.preventDefault();

        $('#quick-view-modal .modal-body').html(trans('storefront::products.loading'));
        $('#quick-view-modal').modal('show');

        $.ajax({
            type: 'GET',
            url: route('products.quick_view.show', { slug: e.currentTarget.dataset.slug }),
            success(html) {
                $('#quick-view-modal .modal-body').html(html);

                productImage({}, {
                    slidesToShow: 2,
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 3,
                            },
                        },
                    ],
                });

                selectize();
                quantity();
            },
            error(xhr) {
                $('#quick-view-modal .modal-body').html(xhr.statusText);
            },
        });
    });

    /*----------------------------------------*/
    /*      cart
    /*----------------------------------------*/

    $('#coupon-apply-form').on('submit', (e) => {
        if ($('#coupon').val() === '') {
            e.preventDefault();

            stopButtonLoading($('#coupon-apply-submit'));
        }
    });

    $('.cart-list .btn-update').on('click', (e) => {
        $(e.currentTarget).addClass('fa-spin');

        let quantity = $(e.currentTarget.dataset.quantityField).val();

        let form = $(`
            <form method="POST" action="${route('cart.items.update', e.currentTarget.dataset.id)}">
                <input type="hidden" name="_token" value="${FleetCart.csrfToken}">
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="qty" value="${quantity}">
            </form>
        `);

        $(document.body).append(form);

        form.submit();
    });

    $('.shipping-method').on('change', (e) => {
        $.ajax({
            type: 'POST',
            url: route('cart.shipping_method.store'),
            data: { shipping_method: e.currentTarget.value },
            success(response) {
                $('#coupon-value').html(`&#8211;${response.discount}`);
                $('#total-amount').text(response.total);
            },
        });
    });

    let hasShippingMethod = !! $('meta[name="cart-has-shipping-method"]').attr('content');

    if (! hasShippingMethod) {
        $('.shipping-method').first().trigger('change');
    }

    /*----------------------------------------*/
    /*      checkout
    /*----------------------------------------*/

    $('#billing-country, #shipping-country').on('change', (e) => {
        let stateFieldSelector;
        let inputField;
        let selectField;

        if (e.currentTarget.id === 'billing-country') {
            stateFieldSelector = '#billing-state';

            inputField = $('<input name="billing[state]" class="form-control" id="billing-state">');
            selectField = $('<select name="billing[state]" class="custom-select-black" id="billing-state"></select>');
        } else {
            stateFieldSelector = '#shipping-state';

            inputField = $('<input name="shipping[state]" class="form-control" id="shipping-state">');
            selectField = $('<select name="shipping[state]" class="custom-select-black" id="shipping-state"></select>');
        }

        $(stateFieldSelector).prop('disabled', true);

        $.ajax({
            type: 'GET',
            url: route('countries.states.index', e.currentTarget.value),
            dataType: 'json',
            success(states) {
                let oldState = $(stateFieldSelector).val();

                if ($.isEmptyObject(states)) {
                    $(stateFieldSelector).replaceWith(inputField).prop('disabled', false);

                    inputField.on('change', updateTax);

                    return $(stateFieldSelector).val(oldState);
                }

                $(stateFieldSelector).replaceWith(selectField);

                let options = `<option value="" selected>${trans('storefront::checkout.please_select')}</option>`;

                for (let code in states) {
                    options += `<option value="${code}">${states[code]}</option>`;
                }

                $(stateFieldSelector).html(options).val(oldState).prop('disabled', false);

                selectField.on('change', updateTax);
            },
            error() {
                $(stateFieldSelector).replaceWith(inputField).prop('disabled', false);

                inputField.on('change', updateTax);
            },
        });
    });

    $('#billing-country, #shipping-country').trigger('change');

    $(`
        #billing-city,
        #shipping-city,
        #billing-zip,
        #shipping-zip,
        #billing-country,
        #shipping-country
    `).on('change', updateTax);

    function updateTax() {
        if (addressIsNotEntered()) {
            return;
        }

        $.ajax({
            url: route('cart.taxes.store'),
            type: 'POST',
            data: $('#checkout-form').serializeArray(),
            success(response) {
                $('#taxes').html(getTaxesHtml(response.taxes));
                $('#total-amount').text(response.total);
            },
        });
    }

    function addressIsNotEntered() {
        if ($('.ship-to-a-different-address').hasClass('clicked')) {
            return $('#billing-state').val() === '' || $('#shipping-state').val() === '';
        }

        return $('#billing-state').val() === '';
    }

    function getTaxesHtml(taxes) {
        let html = '';

        for (let tax of taxes) {
            html += `
                <span class="item-amount">
                    ${tax.name}
                    <span>${tax.amount}</span>
                </span>
            `;
        }

        return html;
    }
});
