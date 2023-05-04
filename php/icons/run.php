<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRun extends \Tabler\Icon {
    public static function getName(): string {
        return 'run';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M4 17l5 1l.75 -1.5" />   <path d="M15 21l0 -4l-4 -3l1 -6" />   <path d="M7 12l0 -3l5 -1l3 3l3 1" />
        SVG;
    }
}