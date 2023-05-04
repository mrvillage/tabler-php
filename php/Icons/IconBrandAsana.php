<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandAsana extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-asana';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M7 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}