<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencySolana extends \Tabler\Icon {
    public static function getName(): string {
        return 'currency-solana';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 18h12l4 -4h-12z" />   <path d="M8 14l-4 -4h12l4 4" />   <path d="M16 10l4 -4h-12l-4 4" />
        SVG;
    }
}