<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyRupee extends Icon {
    public static function getName(): string {
        return 'currency-rupee';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 5h-11h3a4 4 0 0 1 0 8h-3l6 6" />   <path d="M7 9l11 0" />
        SVG;
    }
}