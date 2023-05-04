<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHeartBroken extends \Tabler\Icon {
    public static function getName(): string {
        return 'heart-broken';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />   <path d="M12 6l-2 4l4 3l-2 4v3" />
        SVG;
    }
}