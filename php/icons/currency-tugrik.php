<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrencyTugrik extends Icon {
    public static function getName(): string {
        return 'currency-tugrik';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 6h10" />   <path d="M12 6v13" />   <path d="M8 17l8 -3" />   <path d="M16 10l-8 3" />
        SVG;
    }
}