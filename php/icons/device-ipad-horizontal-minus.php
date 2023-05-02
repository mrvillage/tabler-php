<?php
require_once('../Icon.php');

class IconDeviceIpadHorizontalMinus extends Icon {
    public static function getName(): string {
        return 'device-ipad-horizontal-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 20h-7a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9" />   <path d="M9 17h3.5" />   <path d="M16 19h6" />
        SVG;
    }
}