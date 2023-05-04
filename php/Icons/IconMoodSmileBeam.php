<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodSmileBeam extends \Tabler\Icon {
    public static function getName(): string {
        return 'mood-smile-beam';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />   <path d="M10 10c-.5 -1 -2.5 -1 -3 0" />   <path d="M17 10c-.5 -1 -2.5 -1 -3 0" />   <path d="M14.5 15a3.5 3.5 0 0 1 -5 0" />
        SVG;
    }
}