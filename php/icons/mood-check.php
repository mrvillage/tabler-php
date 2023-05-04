<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodCheck extends Icon {
    public static function getName(): string {
        return 'mood-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.925 13.163a8.998 8.998 0 0 0 -8.925 -10.163a9 9 0 0 0 0 18" />   <path d="M9 10h.01" />   <path d="M15 10h.01" />   <path d="M9.5 15c.658 .64 1.56 1 2.5 1s1.842 -.36 2.5 -1" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}