<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGitPullRequestClosed extends \Tabler\Icon {
    public static function getName(): string {
        return 'git-pull-request-closed';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 8v8" />   <path d="M18 11v5" />   <path d="M16 4l4 4m0 -4l-4 4" />
        SVG;
    }
}