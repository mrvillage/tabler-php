<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrack extends \Tabler\Icon {
    public static function getName(): string {
        return 'track';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 15l11 -11m5 5l-11 11m-4 -8l7 7m-3.5 -10.5l7 7m-3.5 -10.5l7 7" />
        SVG;
    }
}