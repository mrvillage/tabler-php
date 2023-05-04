<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTemplate extends \Tabler\Icon {
    public static function getName(): string {
        return 'template';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" />   <path d="M4 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M14 12l6 0" />   <path d="M14 16l6 0" />   <path d="M14 20l6 0" />
        SVG;
    }
}