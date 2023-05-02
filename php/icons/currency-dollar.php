<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrencyDollar extends Icon {
    public static function getName(): string {
        return 'currency-dollar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />   <path d="M12 3v3m0 12v3" />
        SVG;
    }
}