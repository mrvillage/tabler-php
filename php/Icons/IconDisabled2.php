<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDisabled2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'disabled-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M9 11a5 5 0 1 0 3.95 7.95" />   <path d="M19 20l-4 -5h-4l3 -5l-4 -3l-4 1" />
        SVG;
    }
}