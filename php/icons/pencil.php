<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPencil extends Tabler\Icon {
    public static function getName(): string {
        return 'pencil';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />   <path d="M13.5 6.5l4 4" />
        SVG;
    }
}