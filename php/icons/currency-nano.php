<?php
require_once(__DIR__ . '/../Icon.php');

class IconCurrencyNano extends Icon {
    public static function getName(): string {
        return 'currency-nano';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 20l10 -16" />   <path d="M7 12h10" />   <path d="M7 16h10" />   <path d="M17 20l-10 -16" />
        SVG;
    }
}