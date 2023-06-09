<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBluetooth extends \Tabler\Icon {
    public static function getName(): string {
        return 'bluetooth';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 8l10 8l-5 4l0 -16l5 4l-10 8" />
        SVG;
    }
}