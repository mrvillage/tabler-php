<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClick extends Icon {
    public static function getName(): string {
        return 'click';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12l3 0" />   <path d="M12 3l0 3" />   <path d="M7.8 7.8l-2.2 -2.2" />   <path d="M16.2 7.8l2.2 -2.2" />   <path d="M7.8 16.2l-2.2 2.2" />   <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
        SVG;
    }
}