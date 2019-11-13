<?php
namespace Acme\Demo\Video\Command;

use Neos\Flow\Annotations as Flow;
use Acme\Demo\Video\Domain\Model\Video;
use Acme\Demo\Video\Domain\Model\SomeOtherComponent;

/**
 * @Flow\Scope("singleton")
 */
class VideoCommandController extends \Neos\Flow\Cli\CommandController {

    /**
     * @Flow\Inject
     * @var \Acme\Demo\Video\Domain\Repository\SomeOtherComponentRepository
     */
    protected $someOtherComponentRepository;

    /**
     * @Flow\Inject
     * @var \Acme\Demo\Video\Domain\Repository\VideoRepository
     */
    protected $videoRepository;

    public function createComponentsCommand() {
        $someOtherComponent = new SomeOtherComponent();
	$video = new Video($someOtherComponent);

        $this->someOtherComponentRepository->add($someOtherComponent);
        $this->videoRepository->add($video);

        $this->outputLine("Done");
    }

    public function getVideosCommand() {
        $videos = $this->videoRepository->findAll();
        $this->outputLine(serialize($videos->toArray()));
    }

    public function countVideosCommand() {
        $this->outputLine($this->videoRepository->countAll());
    }
}
