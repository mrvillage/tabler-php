<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlayVolleyball extends \Tabler\Icon {
    public static function getName(): string {
        return 'play-volleyball';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 21l3.5 -2l-4.5 -4l2 -4.5" />   <path d="M7 6l2 4l5 .5l4 2.5l2.5 3" />   <path d="M4 20l5 -1l1.5 -2" />   <path d="M15 7a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M9.5 5a.5 .5 0 1 0 0 -1a.5 .5 0 0 0 0 1z" fill="currentColor" />
        SVG;
    }
}