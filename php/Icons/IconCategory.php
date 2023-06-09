<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCategory extends \Tabler\Icon {
    public static function getName(): string {
        return 'category';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4h6v6h-6z" />   <path d="M14 4h6v6h-6z" />   <path d="M4 14h6v6h-6z" />   <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}