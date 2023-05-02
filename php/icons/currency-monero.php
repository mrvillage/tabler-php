<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrencyMonero extends Icon {
    public static function getName(): string {
        return 'currency-monero';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 18h3v-11l6 7l6 -7v11h3" />
        SVG;
    }
}