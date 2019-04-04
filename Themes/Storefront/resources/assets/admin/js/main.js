window.admin.removeSubmitButtonOffsetOn([
    '#logo', '#slider_banners', '#banner_section_1', '#banner_section_2', '#banner_section_3', '#brands'
]);

$('.banner-image').on('click', (e) => {
    let picker = new MediaPicker({ type: 'image' });

    picker.on('select', (file) => {
        $(e.currentTarget).find('i').remove();
        $(e.currentTarget).find('img').attr('src', file.path).removeClass('hide');
        $(e.currentTarget).find('.banner-file-id').val(file.id);
    });
});
