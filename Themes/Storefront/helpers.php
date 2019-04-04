<?php

if (! function_exists('storefront_layout')) {
    /**
     * Get storefront layout name.
     *
     * @return string
     */
    function storefront_layout()
    {
        return setting('storefront_layout', 'default');
    }
}

if (! function_exists('is_filtering')) {
    /**
     * Check if current route is filter products using given value of attributes.
     *
     * @param string $value
     * @return bool
     */
    function is_filtering($value)
    {
        $value = mb_strtolower($value);
        $requestQueries = array_flatten(request('attribute', []));

        return in_array($value, $requestQueries);
    }
}

if (! function_exists('rating_star_class')) {
    /**
     * Get class for rating star.
     *
     * @param int|float $rating
     * @param int $forStar
     * @return string
     */
    function rating_star_class($rating, $forStar)
    {
        $class = $rating >= $forStar ? 'fa fa-star rated' : 'fa fa-star-o';

        if (fmod($rating, 1) === 0.0) {
            return $class;
        }

        if (is_float($rating) && ceil($rating) === (float) $forStar) {
            $class = 'fa fa-star-half-o rated';
        }

        return $class;
    }
}

if (! function_exists('review_form_has_error')) {
    /**
     * Determine if review form has any error.
     *
     * @param \Illuminate\Support\ViewErrorBag $errors
     * @return bool
     */
    function review_form_has_error($errors)
    {
        return $errors->has('rating') || $errors->has('reviewer_name') || $errors->has('comment');
    }
}
