<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodAnnoyed2 extends Icon {
    public static function getName(): string {
        return 'mood-annoyed-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />   <path d="M15 14c-2 0 -3 1 -3.5 2.05" />   <path d="M10 9.25c-.5 1 -2.5 1 -3 0" />   <path d="M17 9.25c-.5 1 -2.5 1 -3 0" />
        SVG;
    }
}