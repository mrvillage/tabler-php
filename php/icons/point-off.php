<?php
require_once(__DIR__ . '/../Icon.php');

class IconPointOff extends Icon {
    public static function getName(): string {
        return 'point-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.15 9.194a4 4 0 0 0 5.697 5.617m1.153 -2.811a4 4 0 0 0 -4 -4" />   <path d="M3 3l18 18" />
        SVG;
    }
}