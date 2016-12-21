<?php

namespace Badger\Component\Tag\Taggable;

use Badger\Component\Tag\Model\TagInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @author  Adrien Pétremann <hello@grena.fr>
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */
interface TaggableInterface
{
    /**
     * @param TagInterface $tag
     *
     * @return TaggableInterface
     */
    public function addTag(TagInterface $tag);

    /**
     * @param ArrayCollection $tags
     */
    public function setTags(ArrayCollection $tags);

    /**
     * @return ArrayCollection
     */
    public function getTags();
}