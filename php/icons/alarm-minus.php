<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlarmMinus extends Tabler\Icon {
    public static function getName(): string {
        return 'alarm-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M7 4l-2.75 2" />   <path d="M17 4l2.75 2" />   <path d="M10 13h4" />
        SVG;
    }
}