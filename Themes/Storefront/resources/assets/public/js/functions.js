export function stopButtonLoading(button) {
    button = button instanceof jQuery ? button : $(button);

    button.data('loading-text', button.html())
        .removeClass('btn-loading')
        .button('reset');
}

export function trans(key) {
    return FleetCart.langs[key];
}
