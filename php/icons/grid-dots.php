<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGridDots extends Icon {
    public static function getName(): string {
        return 'grid-dots';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M19 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M19 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}