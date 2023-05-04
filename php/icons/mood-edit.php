<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodEdit extends Tabler\Icon {
    public static function getName(): string {
        return 'mood-edit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.955 11.104a9 9 0 1 0 -9.895 9.847" />   <path d="M9 10h.01" />   <path d="M15 10h.01" />   <path d="M9.5 15c.658 .672 1.56 1 2.5 1c.126 0 .251 -.006 .376 -.018" />   <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" />
        SVG;
    }
}