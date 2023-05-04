<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCategory2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'category-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 4h6v6h-6z" />   <path d="M4 14h6v6h-6z" />   <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}