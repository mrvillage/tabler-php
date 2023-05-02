<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrencyOff extends Icon {
    public static function getName(): string {
        return 'currency-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.531 14.524a7 7 0 0 0 -9.06 -9.053m-2.422 1.582a7 7 0 0 0 9.903 9.896" />   <path d="M4 4l3 3" />   <path d="M20 4l-3 3" />   <path d="M4 20l3 -3" />   <path d="M20 20l-3 -3" />   <path d="M3 3l18 18" />
        SVG;
    }
}