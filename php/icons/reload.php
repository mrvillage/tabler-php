<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconReload extends \Tabler\Icon {
    public static function getName(): string {
        return 'reload';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19.933 13.041a8 8 0 1 1 -9.925 -8.788c3.899 -1 7.935 1.007 9.425 4.747" />   <path d="M20 4v5h-5" />
        SVG;
    }
}