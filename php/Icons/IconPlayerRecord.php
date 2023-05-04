<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlayerRecord extends \Tabler\Icon {
    public static function getName(): string {
        return 'player-record';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
        SVG;
    }
}