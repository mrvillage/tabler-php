<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyFrank extends Icon {
    public static function getName(): string {
        return 'currency-frank';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 5h-6a2 2 0 0 0 -2 2v12" />   <path d="M7 15h4" />   <path d="M9 11h7" />
        SVG;
    }
}