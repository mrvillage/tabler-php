<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAsteriskSimple extends Tabler\Icon {
    public static function getName(): string {
        return 'asterisk-simple';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12v-9" />   <path d="M12 12l-9 -2.5" />   <path d="M12 12l9 -2.5" />   <path d="M12 12l6 8.5" />   <path d="M12 12l-6 8.5" />
        SVG;
    }
}