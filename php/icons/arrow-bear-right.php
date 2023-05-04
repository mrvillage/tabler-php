<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBearRight extends Icon {
    public static function getName(): string {
        return 'arrow-bear-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3h5v5" />   <path d="M17 3l-7.536 7.536a5 5 0 0 0 -1.464 3.534v6.93" />
        SVG;
    }
}