<?php
require_once(__DIR__ . '/../Icon.php');

class IconClothesRackOff extends Icon {
    public static function getName(): string {
        return 'clothes-rack-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 7v1m0 4v9" />   <path d="M9 21h6" />   <path d="M7.757 9.243a6 6 0 0 0 3.129 1.653m3.578 -.424a6 6 0 0 0 1.779 -1.229" />   <path d="M3 3l18 18" />
        SVG;
    }
}