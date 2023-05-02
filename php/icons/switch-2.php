<?php
require_once(__DIR__ . '/../Icon.php');

class IconSwitch2 extends Icon {
    public static function getName(): string {
        return 'switch-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 17h5l1.67 -2.386m3.66 -5.227l1.67 -2.387h6" />   <path d="M18 4l3 3l-3 3" />   <path d="M3 7h5l7 10h6" />   <path d="M18 20l3 -3l-3 -3" />
        SVG;
    }
}