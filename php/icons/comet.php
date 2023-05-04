<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconComet extends \Tabler\Icon {
    public static function getName(): string {
        return 'comet';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.5 18.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z" />   <path d="M4 4l7 7" />   <path d="M9 4l3.5 3.5" />   <path d="M4 9l3.5 3.5" />
        SVG;
    }
}