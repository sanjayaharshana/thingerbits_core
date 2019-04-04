import CategoryTree from './CategoryTree';

export default class {
    constructor() {
        let tree = $('.category-tree');

        new CategoryTree(this, tree);

        this.collapseAll(tree);
        this.expandAll(tree);
        this.addRootCategory();
        this.addSubCategory();

        $('#category-form').on('submit', this.submit);
    }

    collapseAll(tree) {
        $('.collapse-all').on('click', (e) => {
            e.preventDefault();

            tree.jstree('close_all');
        });
    }

    expandAll(tree) {
        $('.expand-all').on('click', (e) => {
            e.preventDefault();

            tree.jstree('open_all');
        });
    }

    addRootCategory() {
        $('.add-root-category').on('click', () => {
            this.loading(true);

            $('.add-sub-category').addClass('disabled');

            $('.category-tree').jstree('deselect_all');

            this.clear();

            // Intentionally delay 150ms so that user feel new form is loaded.
            setTimeout(this.loading, 150, false);
        });
    }

    addSubCategory() {
        $('.add-sub-category').on('click', () => {
            let selectedId = $('.category-tree').jstree('get_selected')[0];

            if (selectedId === undefined) {
                return;
            }

            this.clear();
            this.loading(true);

            window.form.appendHiddenInput('#category-form', 'parent_id', selectedId);

            // Intentionally delay 150ms so that user feel new form is loaded.
            setTimeout(this.loading, 150, false);
        });
    }

    fetchCategory(id) {
        this.loading(true);

        $('.add-sub-category').removeClass('disabled');

        $.ajax({
            type: 'GET',
            url: route('admin.categories.show', id),
            success: (category) => {
                this.update(category);

                this.loading(false);
            },
            error: (xhr) => {
                error(`${xhr.statusText}: ${xhr.responseJSON.message}`);

                this.loading(false);
            },
        });
    }

    update(category) {
        window.form.removeErrors();

        $('.btn-delete').removeClass('hide');
        $('.form-group .help-block').remove();

        $('#confirmation-form').attr('action', route('admin.categories.destroy', category.id));

        $('#name').val(category.name);

        $('#slug').val(category.slug);
        $('#slug-field').removeClass('hide');
        $('.category-details-tab .seo-tab').removeClass('hide');

        $('#is_searchable').prop('checked', category.is_searchable);
        $('#is_active').prop('checked', category.is_active);

        $('#category-form input[name="parent_id"]').remove();
    }

    clear() {
        $('#name').val('');

        $('#slug').val('');
        $('#slug-field').addClass('hide');
        $('.category-details-tab .seo-tab').addClass('hide');

        $('#is_searchable').prop('checked', false);
        $('#is_active').prop('checked', false);

        $('.btn-delete').addClass('hide');
        $('.form-group .help-block').remove();

        $('#category-form input[name="parent_id"]').remove();

        $('.general-information-tab a').click();
    }

    loading(state) {
        if (state === true) {
            $('.overlay.loader').removeClass('hide');
        } else {
            $('.overlay.loader').addClass('hide');
        }
    }

    submit(e) {
        let selectedId = $('.category-tree').jstree('get_selected')[0];

        if (! $('#slug-field').hasClass('hide')) {
            window.form.appendHiddenInput('#category-form', '_method', 'put');

            $('#category-form').attr('action', route('admin.categories.update', selectedId));
        }

        e.currentTarget.submit();
    }
}
