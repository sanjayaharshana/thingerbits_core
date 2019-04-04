<div id="additional-information" class="specification tab-pane fade in">
    <div class="table-responsive">
        <table class="table">
            <tbody>
                @foreach ($product->attributeSets as $attributeSet => $attributes)
                    <tr>
                        <td><h4>{{ $attributeSet }}</h4></td>

                        <td>
                            @foreach ($attributes as $attribute)
                                <div class="information-data clearfix">
                                    <label class="pull-left">{{ $attribute->name }}</label>
                                    <span>
                                        {{ $attribute->values->implode('value', ', ') }}
                                    </span>
                                </div>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
