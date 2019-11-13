<?php
namespace Acme\Demo\Video\Domain\Model;

use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class SomeOtherComponent {

    /**
     * @var Video
     * @ORM\OneToOne(mappedBy="component", orphanRemoval=false)
     */
    protected $video;

    /**
     * @return Video|null
     */
    public function getVideo() : ?Video {
        return $this->video;
    }
}
 

