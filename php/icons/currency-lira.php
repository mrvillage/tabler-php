<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyLira extends Tabler\Icon {
    public static function getName(): string {
        return 'currency-lira';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 5v15a7 7 0 0 0 7 -7" />   <path d="M6 15l8 -4" />   <path d="M14 7l-8 4" />
        SVG;
    }
}