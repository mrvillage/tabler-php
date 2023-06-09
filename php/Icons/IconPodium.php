<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPodium extends \Tabler\Icon {
    public static function getName(): string {
        return 'podium';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 8h14l-.621 2.485a2 2 0 0 1 -1.94 1.515h-8.878a2 2 0 0 1 -1.94 -1.515l-.621 -2.485z" />   <path d="M7 8v-2a3 3 0 0 1 3 -3" />   <path d="M8 12l1 9" />   <path d="M16 12l-1 9" />   <path d="M7 21h10" />
        SVG;
    }
}