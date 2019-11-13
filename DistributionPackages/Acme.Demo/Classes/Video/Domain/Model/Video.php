<?php
namespace Acme\Demo\Video\Domain\Model;

use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Video {

    /**
     * @var SomeOtherComponent
     * @ORM\OneToOne(inversedBy="video", orphanRemoval=false)
     * @ORM\Id
     */
    protected $component;

    public function __construct(SomeOtherComponent $component) {
        $this->component = $component;
    }

    /**
     * @return SomeOtherComponent
     */
    public function getComponent() : SomeOtherComponent {
        return $this->component;
    }
}
