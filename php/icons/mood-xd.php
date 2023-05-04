<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodXd extends Icon {
    public static function getName(): string {
        return 'mood-xd';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />   <path d="M9 14h6a3 3 0 1 1 -6 0z" />   <path d="M9 8l6 3" />   <path d="M9 11l6 -3" />
        SVG;
    }
}