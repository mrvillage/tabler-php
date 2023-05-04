<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHistory extends Icon {
    public static function getName(): string {
        return 'history';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 8l0 4l2 2" />   <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
        SVG;
    }
}