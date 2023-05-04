<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShieldDown extends \Tabler\Icon {
    public static function getName(): string {
        return 'shield-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.444 20.876c-.147 .044 -.295 .085 -.444 .124a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 .117 6.343" />   <path d="M19 16v6" />   <path d="M22 19l-3 3l-3 -3" />
        SVG;
    }
}