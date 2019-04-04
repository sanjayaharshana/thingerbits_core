export default class {
    addOptionsErrors(errors) {
        for (let key in errors) {
            let inputField = this.getInputFieldForErrorKey(key);

            inputField.closest('.option').addClass('option-has-errors');

            let parent = inputField.parent();

            parent.addClass('has-error');
            parent.append(`<span class="help-block">${errors[key][0]}</span>`);
        }
    }

    getRowTemplate(data) {
        let template = _.template($('#option-select-values-template').html());

        return $(template(data));
    }

    changeOptionType({ optionId, values = [] }) {
        let optionValuesElement = this.getOptionValuesElement(optionId);
        let optionValuesData = { optionId, value: { id: '', label: '', price: '', price_type: 'fixed' } };

        let template = _.template($('#option-select-template').html());

        optionValuesElement.html(template(optionValuesData));

        this.addOptionRowEventListener(optionId);

        this.addOptionRows({ optionId, values });

        if (values.length === 0) {
            this.getAddNewRowButton(optionId).trigger('click');
        }
    }

    addOptionRows({ optionId, values }) {
        for (let [index, value] of values.entries()) {
            this.addOptionRow({
                optionId,
                valueId: index,
                value,
            });
        }
    }

    initOptionRow(template, selectValues) {
        if (selectValues.length !== 0 && ! selectValues.is('.sortable')) {
            this.makeSortable(selectValues[0]);

            selectValues.addClass('sortable');
        }

        this.deleteOptionRowEventListener(template);

        window.admin.tooltip();
    }

    deleteOptionRowEventListener(row) {
        row.find('.delete-row').on('click', (e) => {
            $(e.currentTarget).closest('.option-row').remove();
        });
    }

    makeSortable(el) {
        Sortable.create(el, {
            handle: '.drag-icon',
            animation: 150,
        });
    }
}
