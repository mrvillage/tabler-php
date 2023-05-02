<?php
require_once('../Icon.php');

class IconCurrencyRiyal extends Icon {
    public static function getName(): string {
        return 'currency-riyal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 9v2a2 2 0 1 1 -4 0v-1v1a2 2 0 1 1 -4 0v-1v4a2 2 0 1 1 -4 0v-2" />   <path d="M18 12.01v-.01" />   <path d="M22 10v1a5 5 0 0 1 -5 5" />
        SVG;
    }
}