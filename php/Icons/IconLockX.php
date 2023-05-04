<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLockX extends \Tabler\Icon {
    public static function getName(): string {
        return 'lock-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 21h-6a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v.5" />   <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M8 11v-4a4 4 0 1 1 8 0v4" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}