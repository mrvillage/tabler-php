<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHierarchy3 extends Tabler\Icon {
    public static function getName(): string {
        return 'hierarchy-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M20 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M4 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M16 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 17l2 -3" />   <path d="M9 10l2 -3" />   <path d="M13 7l2 3" />   <path d="M17 14l2 3" />   <path d="M15 14l-2 3" />   <path d="M9 14l2 3" />
        SVG;
    }
}