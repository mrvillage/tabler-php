<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandMessenger extends Icon {
    public static function getName(): string {
        return 'brand-messenger';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />   <path d="M8 13l3 -2l2 2l3 -2" />
        SVG;
    }
}