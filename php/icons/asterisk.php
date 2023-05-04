<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAsterisk extends Tabler\Icon {
    public static function getName(): string {
        return 'asterisk';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12l8 -4.5" />   <path d="M12 12v9" />   <path d="M12 12l-8 -4.5" />   <path d="M12 12l8 4.5" />   <path d="M12 3v9" />   <path d="M12 12l-8 4.5" />
        SVG;
    }
}