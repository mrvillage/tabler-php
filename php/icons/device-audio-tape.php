<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceAudioTape extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-audio-tape';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M3 17l4 -3h10l4 3" />   <circle cx="7.5" cy="9.5" r=".5" fill="currentColor" />   <circle cx="16.5" cy="9.5" r=".5" fill="currentColor" />
        SVG;
    }
}