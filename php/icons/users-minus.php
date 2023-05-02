<?php
require_once(__DIR__ . '/../Icon.php');

class IconUsersMinus extends Icon {
    public static function getName(): string {
        return 'users-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />   <path d="M3 21v-2a4 4 0 0 1 4 -4h4c.948 0 1.818 .33 2.504 .88" />   <path d="M16 3.13a4 4 0 0 1 0 7.75" />   <path d="M16 19h6" />
        SVG;
    }
}