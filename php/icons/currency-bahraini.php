<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyBahraini extends Tabler\Icon {
    public static function getName(): string {
        return 'currency-bahraini';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 10v1a4 4 0 0 0 4 4h2a2 2 0 0 0 2 -2v-3" />   <path d="M7 19.01v-.01" />   <path d="M14 15.01v-.01" />   <path d="M17 15h2a2 2 0 0 0 1.649 -3.131l-2.653 -3.869" />
        SVG;
    }
}