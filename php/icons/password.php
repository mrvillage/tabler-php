<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPassword extends Icon {
    public static function getName(): string {
        return 'password';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10v4" />   <path d="M10 13l4 -2" />   <path d="M10 11l4 2" />   <path d="M5 10v4" />   <path d="M3 13l4 -2" />   <path d="M3 11l4 2" />   <path d="M19 10v4" />   <path d="M17 13l4 -2" />   <path d="M17 11l4 2" />
        SVG;
    }
}