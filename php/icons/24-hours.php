<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class Icon24Hours extends Icon {
    public static function getName(): string {
        return '24-hours';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />   <path d="M4 13a8.094 8.094 0 0 0 3 5.24" />   <path d="M11 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2" />   <path d="M17 15v2a1 1 0 0 0 1 1h1" />   <path d="M20 15v6" />
        SVG;
    }
}