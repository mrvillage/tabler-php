<?php
require_once(__DIR__ . '../Icon.php');

class IconQuoteOff extends Icon {
    public static function getName(): string {
        return 'quote-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1m4 4v3c0 2.667 -1.333 4.333 -4 5" />   <path d="M19 11h-4m-1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 .66 -.082 1.26 -.245 1.798m-1.653 2.29c-.571 .4 -1.272 .704 -2.102 .912" />   <path d="M3 3l18 18" />
        SVG;
    }
}