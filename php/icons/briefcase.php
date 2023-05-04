<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBriefcase extends Tabler\Icon {
    public static function getName(): string {
        return 'briefcase';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />   <path d="M12 12l0 .01" />   <path d="M3 13a20 20 0 0 0 18 0" />
        SVG;
    }
}