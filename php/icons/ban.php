<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBan extends Icon {
    public static function getName(): string {
        return 'ban';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M5.7 5.7l12.6 12.6" />
        SVG;
    }
}