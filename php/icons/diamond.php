<?php
require_once('../Icon.php');

class IconDiamond extends Icon {
    public static function getName(): string {
        return 'diamond';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 5h12l3 5l-8.5 9.5a.7 .7 0 0 1 -1 0l-8.5 -9.5l3 -5" />   <path d="M10 12l-2 -2.2l.6 -1" />
        SVG;
    }
}