<?php
require_once('../Icon.php');

class IconArrowsExchange2 extends Icon {
    public static function getName(): string {
        return 'arrows-exchange-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 10h-14l4 -4" />   <path d="M7 14h14l-4 4" />
        SVG;
    }
}