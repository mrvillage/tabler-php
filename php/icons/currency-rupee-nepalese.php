<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyRupeeNepalese extends Tabler\Icon {
    public static function getName(): string {
        return 'currency-rupee-nepalese';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 5h-11h3a4 4 0 1 1 0 8h-3l6 6" />   <path d="M21 17l-4.586 -4.414a2 2 0 0 0 -2.828 2.828l.707 .707" />
        SVG;
    }
}