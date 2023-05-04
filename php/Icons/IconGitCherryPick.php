<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGitCherryPick extends \Tabler\Icon {
    public static function getName(): string {
        return 'git-cherry-pick';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M7 3v6" />   <path d="M7 15v6" />   <path d="M13 7h2.5l1.5 5l-1.5 5h-2.5" />   <path d="M17 12h3" />
        SVG;
    }
}