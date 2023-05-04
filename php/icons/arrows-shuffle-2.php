<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsShuffle2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrows-shuffle-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 4l3 3l-3 3" />   <path d="M18 20l3 -3l-3 -3" />   <path d="M3 7h3a5 5 0 0 1 5 5a5 5 0 0 0 5 5h5" />   <path d="M3 17h3a5 5 0 0 0 5 -5a5 5 0 0 1 5 -5h5" />
        SVG;
    }
}