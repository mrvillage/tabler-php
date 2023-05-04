<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandBulma extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-bulma';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 16l1 -9l5 -5l6.5 6l-3.5 4l5 5l-8 5z" />
        SVG;
    }
}