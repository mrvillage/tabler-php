<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAccessPoint extends Icon {
    public static function getName(): string {
        return 'access-point';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12l0 .01" />   <path d="M14.828 9.172a4 4 0 0 1 0 5.656" />   <path d="M17.657 6.343a8 8 0 0 1 0 11.314" />   <path d="M9.168 14.828a4 4 0 0 1 0 -5.656" />   <path d="M6.337 17.657a8 8 0 0 1 0 -11.314" />
        SVG;
    }
}