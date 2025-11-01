<?php
declare(strict_types=1);

namespace Survos\BootstrapBundle\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent(
    name: 'tabler:header',
    template: '@SurvosBootstrap/components/tabler/header.html.twig'
)]
final class TablerHeader
{
    /** Main page title */
    public ?string $title = 'Dashboard';

    /** Optional pretitle (small text above title) */
    public ?string $pretitle = 'Overview';

    /** Optional subtitle (small gray text under title) */
    public ?string $subtitle = null;

    /** Dark/overlap styling hint */
    public bool $dark = false;

    /** Whether header visually overlaps a hero area */
    public bool $overlap = false;

    /** Show demo action buttons on the right */
    public bool $showActions = true;

    /** Show a props dump card for bring-up */
    public bool $debug = false;
}
