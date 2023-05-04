<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyLeu extends Tabler\Icon {
    public static function getName(): string {
        return 'currency-leu';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 18h-7a3 3 0 0 1 -3 -3v-10" />
        SVG;
    }
}