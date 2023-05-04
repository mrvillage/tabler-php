<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPyramidOff extends Tabler\Icon {
    public static function getName(): string {
        return 'pyramid-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8.483 8.471l-5.483 8.529l9 4l6.22 -2.764m2.78 -1.236l-9 -14l-1.937 3.014" />   <path d="M12 3v5m0 4v9" />   <path d="M3 3l18 18" />
        SVG;
    }
}