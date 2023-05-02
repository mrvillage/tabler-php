<?php
require_once(__DIR__ . '/../Icon.php');

class IconShieldPlus extends Icon {
    public static function getName(): string {
        return 'shield-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.462 20.87c-.153 .047 -.307 .09 -.462 .13a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 .11 6.37" />   <path d="M16 19h6" />   <path d="M19 16v6" />
        SVG;
    }
}