<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyKip extends \Tabler\Icon {
    public static function getName(): string {
        return 'currency-kip';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 12h12" />   <path d="M9 5v14" />   <path d="M16 19a7 7 0 0 0 -7 -7a7 7 0 0 0 7 -7" />
        SVG;
    }
}