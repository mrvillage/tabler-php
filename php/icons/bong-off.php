<?php
require_once('../Icon.php');

class IconBongOff extends Icon {
    public static function getName(): string {
        return 'bong-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5v-2h4v6m1.5 1.5l2.5 -2.5l2 2l-2.5 2.5m-.5 3.505a5 5 0 1 1 -7 -4.589v-2.416" />   <path d="M8 3h6" />   <path d="M6.1 17h9.8" />   <path d="M3 3l18 18" />
        SVG;
    }
}