<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrencyPeso extends Icon {
    public static function getName(): string {
        return 'currency-peso';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 19v-14h3.5a4.5 4.5 0 1 1 0 9h-3.5" />   <path d="M18 8h-12" />   <path d="M18 11h-12" />
        SVG;
    }
}