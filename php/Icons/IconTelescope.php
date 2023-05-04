<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTelescope extends \Tabler\Icon {
    public static function getName(): string {
        return 'telescope';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 21l6 -5l6 5" />   <path d="M12 13v8" />   <path d="M3.294 13.678l.166 .281c.52 .88 1.624 1.265 2.605 .91l14.242 -5.165a1.023 1.023 0 0 0 .565 -1.456l-2.62 -4.705a1.087 1.087 0 0 0 -1.447 -.42l-.056 .032l-12.694 7.618c-1.02 .613 -1.357 1.897 -.76 2.905z" />   <path d="M14 5l3 5.5" />
        SVG;
    }
}