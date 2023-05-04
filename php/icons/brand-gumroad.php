<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandGumroad extends Icon {
    public static function getName(): string {
        return 'brand-gumroad';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12a9 9 0 1 1 -18 0a9 9 0 0 1 18 0z" />   <path d="M13.5 13h2.5v3" />   <path d="M15.024 9.382a4 4 0 1 0 -3.024 6.618c1.862 0 2.554 -1.278 3 -3" />
        SVG;
    }
}