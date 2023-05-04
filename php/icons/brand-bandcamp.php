<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandBandcamp extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-bandcamp';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8.5 6h13.5l-7 12h-13z" />
        SVG;
    }
}