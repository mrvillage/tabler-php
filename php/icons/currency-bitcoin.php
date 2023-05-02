<?php
require_once('../Icon.php');

class IconCurrencyBitcoin extends Icon {
    public static function getName(): string {
        return 'currency-bitcoin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 6h8a3 3 0 0 1 0 6a3 3 0 0 1 0 6h-8" />   <path d="M8 6l0 12" />   <path d="M8 12l6 0" />   <path d="M9 3l0 3" />   <path d="M13 3l0 3" />   <path d="M9 18l0 3" />   <path d="M13 18l0 3" />
        SVG;
    }
}