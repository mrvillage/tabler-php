<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsMaximize extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrows-maximize';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 4l4 0l0 4" />   <path d="M14 10l6 -6" />   <path d="M8 20l-4 0l0 -4" />   <path d="M4 20l6 -6" />   <path d="M16 20l4 0l0 -4" />   <path d="M14 14l6 6" />   <path d="M8 4l-4 0l0 4" />   <path d="M4 4l6 6" />
        SVG;
    }
}