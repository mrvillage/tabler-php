<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTextResize extends \Tabler\Icon {
    public static function getName(): string {
        return 'text-resize';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 7v10" />   <path d="M7 5h10" />   <path d="M7 19h10" />   <path d="M19 7v10" />   <path d="M10 10h4" />   <path d="M12 14v-4" />
        SVG;
    }
}