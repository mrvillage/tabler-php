<?php
require_once('../Icon.php');

class IconBrandFinder extends Icon {
    public static function getName(): string {
        return 'brand-finder';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />   <path d="M7 8v1" />   <path d="M17 8v1" />   <path d="M12.5 4c-.654 1.486 -1.26 3.443 -1.5 9h2.5c-.19 2.867 .094 5.024 .5 7" />   <path d="M7 15.5c3.667 2 6.333 2 10 0" />
        SVG;
    }
}