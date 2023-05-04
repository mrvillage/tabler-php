<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSend extends Icon {
    public static function getName(): string {
        return 'send';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 14l11 -11" />   <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
        SVG;
    }
}