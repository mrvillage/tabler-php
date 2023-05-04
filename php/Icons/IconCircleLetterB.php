<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleLetterB extends \Tabler\Icon {
    public static function getName(): string {
        return 'circle-letter-b';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M10 16h2a2 2 0 1 0 0 -4h-2h2a2 2 0 1 0 0 -4h-2v8z" />
        SVG;
    }
}