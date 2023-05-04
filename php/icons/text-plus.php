<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTextPlus extends Tabler\Icon {
    public static function getName(): string {
        return 'text-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 10h-14" />   <path d="M5 6h14" />   <path d="M14 14h-9" />   <path d="M5 18h6" />   <path d="M18 15v6" />   <path d="M15 18h6" />
        SVG;
    }
}