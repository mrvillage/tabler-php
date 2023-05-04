<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBolt extends Icon {
    public static function getName(): string {
        return 'bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" />
        SVG;
    }
}