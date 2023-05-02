<?php
require_once(__DIR__ . '/../Icon.php');

class IconUnderline extends Icon {
    public static function getName(): string {
        return 'underline';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 5v5a5 5 0 0 0 10 0v-5" />   <path d="M5 19h14" />
        SVG;
    }
}