(function($) {
    dw_Tooltip.defaultProps = {
    //supportTouch: true, // set false by default
    content_source: 'class_id' // class holds id of element with tooltip content
}

// Problems, errors? See http://www.dyn-web.com/tutorials/obj_lit.php#syntax

// Write style rule that hides elements with tipContent class for capable browsers 
dw_Tooltip.writeStyleRule();
})(jQuery);