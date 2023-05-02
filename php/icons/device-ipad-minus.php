<?php
require_once(__DIR__ . '../Icon.php');

class IconDeviceIpadMinus extends Icon {
    public static function getName(): string {
        return 'device-ipad-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 21h-6.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v10" />   <path d="M9 18h3" />   <path d="M16 19h6" />
        SVG;
    }
}