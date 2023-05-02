<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandXing extends Icon {
    public static function getName(): string {
        return 'brand-xing';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 21l-4 -7l6.5 -11" />   <path d="M7 7l2 3.5l-3 4.5" />
        SVG;
    }
}