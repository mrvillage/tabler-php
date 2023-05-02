<?php
require_once('../Icon.php');

class IconRadar extends Icon {
    public static function getName(): string {
        return 'radar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12h-8a1 1 0 1 0 -1 1v8a9 9 0 0 0 9 -9" />   <path d="M16 9a5 5 0 1 0 -7 7" />   <path d="M20.486 9a9 9 0 1 0 -11.482 11.495" />
        SVG;
    }
}