<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBluetoothConnected extends \Tabler\Icon {
    public static function getName(): string {
        return 'bluetooth-connected';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 8l10 8l-5 4l0 -16l5 4l-10 8" />   <path d="M4 12l1 0" />   <path d="M18 12l1 0" />
        SVG;
    }
}