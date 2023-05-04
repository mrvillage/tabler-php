<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNfc extends Tabler\Icon {
    public static function getName(): string {
        return 'nfc';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 20a3 3 0 0 1 -3 -3v-11l5 5" />   <path d="M13 4a3 3 0 0 1 3 3v11l-5 -5" />   <path d="M4 4m0 3a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3z" />
        SVG;
    }
}