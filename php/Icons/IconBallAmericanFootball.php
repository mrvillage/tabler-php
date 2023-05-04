<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBallAmericanFootball extends \Tabler\Icon {
    public static function getName(): string {
        return 'ball-american-football';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 9l-6 6" />   <path d="M10 12l2 2" />   <path d="M12 10l2 2" />   <path d="M8 21a5 5 0 0 0 -5 -5" />   <path d="M16 3c-7.18 0 -13 5.82 -13 13a5 5 0 0 0 5 5c7.18 0 13 -5.82 13 -13a5 5 0 0 0 -5 -5" />   <path d="M16 3a5 5 0 0 0 5 5" />
        SVG;
    }
}