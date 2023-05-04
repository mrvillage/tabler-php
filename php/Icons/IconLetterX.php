<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLetterX extends \Tabler\Icon {
    public static function getName(): string {
        return 'letter-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 4l10 16" />   <path d="M17 4l-10 16" />
        SVG;
    }
}