<?php

if (!defined('K_COUCH_DIR')) {
    die();
} // cannot be loaded directly


function spaceless($params, $node)
{
    global $FUNCS;

    extract($FUNCS->get_named_vars(
        array('convert' => 'none'),
        $params)
    );

    foreach ($node->children as $child) {
        $html .= $child->get_HTML();
    }

    $html = preg_replace("/(^\s+|\s+$)/m", "", $html);

    switch (strtolower($convert)) {
        case'none':
            return preg_replace('/[\r\n]+/', '', $html);
            break;
        case'space':
            return preg_replace('/[\r\n]+/', ' ', $html);
            break;
        case'lf':
            return preg_replace('/[\r\n]+/', "\n", $html);
            break;
        case'crlf':
            return preg_replace('/[\r\n]+/', "\r\n", $html);
            break;
        default:
            return $html;
    }


}

$FUNCS->register_tag('spaceless', 'spaceless');