<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconColorPickerOff extends Icon {
    public static function getName(): string {
        return 'color-picker-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 7l6 6" />   <path d="M12 8l3.699 -3.699a1 1 0 0 1 1.4 0l2.6 2.6a1 1 0 0 1 0 1.4l-3.702 3.702m-2 2l-6 6h-4v-4l6 -6" />   <path d="M3 3l18 18" />
        SVG;
    }
}