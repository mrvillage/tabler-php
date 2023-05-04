<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyGuarani extends Icon {
    public static function getName(): string {
        return 'currency-guarani';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16.007 7.54a5.965 5.965 0 0 0 -4.008 -1.54a6 6 0 0 0 -5.992 6c0 3.314 2.682 6 5.992 6a5.965 5.965 0 0 0 4 -1.536c.732 -.66 1.064 -2.148 1 -4.464h-5" />   <path d="M12 20v-16" />
        SVG;
    }
}