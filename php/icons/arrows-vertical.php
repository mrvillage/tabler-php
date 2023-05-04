<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsVertical extends Icon {
    public static function getName(): string {
        return 'arrows-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 7l4 -4l4 4" />   <path d="M8 17l4 4l4 -4" />   <path d="M12 3l0 18" />
        SVG;
    }
}