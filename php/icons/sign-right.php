<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSignRight extends Tabler\Icon {
    public static function getName(): string {
        return 'sign-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 21h4" />   <path d="M10 21v-10" />   <path d="M10 6v-3" />   <path d="M6 6h10l2 2.5l-2 2.5h-10z" />
        SVG;
    }
}