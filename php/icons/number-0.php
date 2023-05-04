<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNumber0 extends Icon {
    public static function getName(): string {
        return 'number-0';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 16v-8" />   <path d="M12 20a4 4 0 0 0 4 -4v-8a4 4 0 1 0 -8 0v8a4 4 0 0 0 4 4z" />
        SVG;
    }
}