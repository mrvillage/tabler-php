<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSourceCode extends \Tabler\Icon {
    public static function getName(): string {
        return 'source-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5" />   <path d="M6 5l-2 2l2 2" />   <path d="M10 9l2 -2l-2 -2" />
        SVG;
    }
}