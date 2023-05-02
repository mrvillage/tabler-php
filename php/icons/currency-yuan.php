<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrencyYuan extends Icon {
    public static function getName(): string {
        return 'currency-yuan';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 19v-7l-5 -7" />   <path d="M17 5l-5 7" />   <path d="M8 13h8" />
        SVG;
    }
}