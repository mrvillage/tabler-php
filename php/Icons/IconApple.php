<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconApple extends \Tabler\Icon {
    public static function getName(): string {
        return 'apple';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 14m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M12 11v-6a2 2 0 0 1 2 -2h2v1a2 2 0 0 1 -2 2h-2" />   <path d="M10 10.5c1.333 .667 2.667 .667 4 0" />
        SVG;
    }
}