<?php
require_once('../Icon.php');

class IconCurrencyManat extends Icon {
    public static function getName(): string {
        return 'currency-manat';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 19v-7a5 5 0 1 1 10 0v7" />   <path d="M12 5v14" />
        SVG;
    }
}