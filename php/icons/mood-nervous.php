<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodNervous extends Icon {
    public static function getName(): string {
        return 'mood-nervous';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M9 10h.01" />   <path d="M15 10h.01" />   <path d="M8 16l2 -2l2 2l2 -2l2 2" />
        SVG;
    }
}