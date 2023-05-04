<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyEthereum extends \Tabler\Icon {
    public static function getName(): string {
        return 'currency-ethereum';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 12l6 -9l6 9l-6 9z" />   <path d="M6 12l6 -3l6 3l-6 2z" />
        SVG;
    }
}