<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodSad2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'mood-sad-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M14.5 16.05a3.5 3.5 0 0 0 -5 0" />   <path d="M10 9.25c-.5 1 -2.5 1 -3 0" />   <path d="M17 9.25c-.5 1 -2.5 1 -3 0" />
        SVG;
    }
}