<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandTripadvisor extends Icon {
    public static function getName(): string {
        return 'brand-tripadvisor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0" />   <path d="M17.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0" />   <path d="M17.5 9a4.5 4.5 0 1 0 3.5 1.671l1 -1.671h-4.5z" />   <path d="M6.5 9a4.5 4.5 0 1 1 -3.5 1.671l-1 -1.671h4.5z" />   <path d="M10.5 15.5l1.5 2l1.5 -2" />   <path d="M9 6.75c2 -.667 4 -.667 6 0" />
        SVG;
    }
}