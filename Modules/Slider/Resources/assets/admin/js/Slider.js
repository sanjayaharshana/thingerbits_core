import Slide from './Slide';

export default class {
    constructor() {
        this.slideCount = 0;

        $('.add-slide').on('click', () => {
            this.addSlide();
        });

        this.addSliderSlides(FleetCart.data['slider.slides']);
        this.makeSlidesSortable();
        this.addSlideImage();
    }

    addSliderSlides(slides) {
        for (let attributes of slides) {
            this.addSlide(attributes);
        }

        // If there is no model slide or any old slide then
        // automatically add an empty slide on page load.
        if (slides.length === 0) {
            $('.add-slide').trigger('click');
        }
    }

    addSlide(attributes = {}) {
        let slide = new Slide({ slideNumber: this.slideCount++, slide: attributes });

        $('#slides-wrapper').append(slide.render());
    }

    makeSlidesSortable() {
        Sortable.create(document.getElementById('slides-wrapper'), {
            handle: '.slide-drag',
            animation: 150,
        });
    }

    addSlideImage() {
        $('#slides-wrapper').on('click', '.slide-image', (e) => {
            let picker = new MediaPicker({ type: 'image' });

            picker.on('select', (file) => {
                let html = `
                    <img src="${file.path}">
                    <input type="hidden" name="slides[${e.currentTarget.dataset.slideNumber}][file_id]" value="${file.id}">
                `;

                $(e.currentTarget).html(html);
            });
        });
    }
}
