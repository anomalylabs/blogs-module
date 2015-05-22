<?php namespace Anomaly\PostsModule\Post\Contract;

use Anomaly\PostsModule\Category\Contract\CategoryInterface;
use Anomaly\PostsModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface PostInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\PostsModule\Post
 */
interface PostInterface
{

    /**
     * Return the post's URL.
     *
     * @return string
     */
    public function url();

    /**
     * Return the post's path.
     *
     * @return string
     */
    public function path();

    /**
     * Get the ID.
     *
     * @return null|int
     */
    public function getId();

    /**
     * Get the post title.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Get the slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Get the type.
     *
     * @return null|TypeInterface
     */
    public function getType();

    /**
     * Get the type name.
     *
     * @return string
     */
    public function getTypeName();

    /**
     * Get the type description.
     *
     * @return string
     */
    public function getTypeDescription();

    /**
     * Get the category.
     *
     * @return null|CategoryInterface
     */
    public function getCategory();

    /**
     * Get the related entry.
     *
     * @return EntryInterface
     */
    public function getEntry();

    /**
     * Get the related entry's ID.
     *
     * @return null|int
     */
    public function getEntryId();
}
