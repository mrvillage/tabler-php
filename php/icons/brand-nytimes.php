<?php
require_once('../Icon.php');

class IconBrandNytimes extends Icon {
    public static function getName(): string {
        return 'brand-nytimes';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.036 5.058a8 8 0 1 0 8.706 9.965" />   <path d="M12 21v-11l-7.5 4" />   <path d="M17.5 3a2.5 2.5 0 1 1 0 5l-11 -5a2.5 2.5 0 0 0 -.67 4.91" />   <path d="M9 12v8" />   <path d="M16 13h-.01" />
        SVG;
    }
}