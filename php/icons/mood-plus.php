<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodPlus extends Icon {
    public static function getName(): string {
        return 'mood-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.985 12.528a9 9 0 1 0 -8.45 8.456" />   <path d="M16 19h6" />   <path d="M19 16v6" />   <path d="M9 10h.01" />   <path d="M15 10h.01" />   <path d="M9.5 15c.658 .64 1.56 1 2.5 1s1.842 -.36 2.5 -1" />
        SVG;
    }
}