@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('user::roles.roles'))

    <li class="active">{{ trans('user::roles.roles') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('buttons', ['create'])
    @slot('resource', 'roles')
    @slot('name', trans('user::roles.role'))

    @slot('thead')
        <tr>
            @include('admin::partials.table.select_all')

            <th>{{ trans('user::roles.table.name') }}</th>
            <th data-sort>{{ trans('admin::admin.table.created') }}</th>
        </tr>
    @endslot
@endcomponent

@push('scripts')
    <script>
        new DataTable('#roles-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'name', name: 'name' },
                { data: 'created', name: 'created_at' },
            ]
        });
    </script>
@endpush
