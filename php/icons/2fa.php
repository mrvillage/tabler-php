<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class Icon2fa extends Tabler\Icon {
    public static function getName(): string {
        return '2fa';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 16h-4l3.47 -4.66a2 2 0 1 0 -3.47 -1.54" />   <path d="M10 16v-8h4" />   <path d="M10 12l3 0" />   <path d="M17 16v-6a2 2 0 0 1 4 0v6" />   <path d="M17 13l4 0" />
        SVG;
    }
}