<?php
require_once('../Icon.php');

class IconCurrencyYenOff extends Icon {
    public static function getName(): string {
        return 'currency-yen-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 19v-7m5 -7l-3.328 4.66" />   <path d="M8 17h8" />   <path d="M8 13h5" />   <path d="M3 3l18 18" />
        SVG;
    }
}