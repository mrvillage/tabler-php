<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandGoogle extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-google';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" />
        SVG;
    }
}