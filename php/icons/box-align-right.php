<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBoxAlignRight extends Icon {
    public static function getName(): string {
        return 'box-align-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.248 19.753v-16h5a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-5z" />   <path d="M9.248 19.753h.01" />   <path d="M4.247 19.753h.011" />   <path d="M4.247 14.752h.011" />   <path d="M4.247 8.752h.011" />   <path d="M4.247 3.752h.011" />   <path d="M9.248 3.752h.01" />
        SVG;
    }
}