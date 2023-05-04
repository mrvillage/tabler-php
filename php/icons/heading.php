<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHeading extends Icon {
    public static function getName(): string {
        return 'heading';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 12h10" />   <path d="M7 5v14" />   <path d="M17 5v14" />   <path d="M15 19h4" />   <path d="M15 5h4" />   <path d="M5 19h4" />   <path d="M5 5h4" />
        SVG;
    }
}