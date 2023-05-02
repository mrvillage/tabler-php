<?php
require_once('../Icon.php');

class IconBracketsOff extends Icon {
    public static function getName(): string {
        return 'brackets-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5v15h3" />   <path d="M16 4h3v11m0 4v1h-3" />   <path d="M3 3l18 18" />
        SVG;
    }
}