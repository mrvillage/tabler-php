<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGitMerge extends \Tabler\Icon {
    public static function getName(): string {
        return 'git-merge';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 8l0 8" />   <path d="M7 8a4 4 0 0 0 4 4h4" />
        SVG;
    }
}