<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconIcons extends \Tabler\Icon {
    public static function getName(): string {
        return 'icons';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.5 6.5m-3.5 0a3.5 3.5 0 1 0 7 0a3.5 3.5 0 1 0 -7 0" />   <path d="M2.5 21h8l-4 -7z" />   <path d="M14 3l7 7" />   <path d="M14 10l7 -7" />   <path d="M14 14h7v7h-7z" />
        SVG;
    }
}