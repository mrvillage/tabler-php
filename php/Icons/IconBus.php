<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBus extends \Tabler\Icon {
    public static function getName(): string {
        return 'bus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8" />   <path d="M16 5l1.5 7l4.5 0" />   <path d="M2 10l15 0" />   <path d="M7 5l0 5" />   <path d="M12 5l0 5" />
        SVG;
    }
}