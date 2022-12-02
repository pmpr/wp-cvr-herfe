<?php

if (!defined('ABSPATH')) {
    exit;
}

global $post, $product;

if ($product->is_on_sale()) {

    $attrs  = pmpr_apply_filters('sale_flash_attributes', ['class' => 'mt-6 ribbon ribbon-left']);
    $ribbon = pmpr_generate_element('span', ['class' => 'onsale sale font-sm'], __('Sale', PR__CVR__HERFE));
    $flash  = pmpr_generate_element('div', $attrs, $ribbon);

    echo pmpr_apply_filters('sale_flash_html', $flash, $post, $product);
}

