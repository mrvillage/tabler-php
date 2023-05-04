<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPower extends Icon {
    public static function getName(): string {
        return 'power';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 6a7.75 7.75 0 1 0 10 0" />   <path d="M12 4l0 8" />
        SVG;
    }
}