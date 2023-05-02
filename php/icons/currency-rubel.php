<?php
require_once(__DIR__ . '/../Icon.php');

class IconCurrencyRubel extends Icon {
    public static function getName(): string {
        return 'currency-rubel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 19v-14h6a3 3 0 0 1 0 6h-8" />   <path d="M14 15h-8" />
        SVG;
    }
}