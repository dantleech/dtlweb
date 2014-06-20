<?php

namespace Acme\BasicCmsBundle\DataFixtures\Phpcr;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\BasicCmsBundle\Document\Post;
use PHPCR\Util\NodeHelper;

class LoadPostData implements FixtureInterface
{
    public function load(ObjectManager $dm)
    {
        $parent = $dm->find(null, '/cms/posts');
        $tags = array('one', 'two', 'cars', 'planes', 'train', 'rocket', 'scooter');

        foreach (array('First', 'Second', 'Third', 'Forth',
        'Fith', 'Sixth', 'Seventh', 'Nth', 'Awesome', 'Shitty', 'Incredible', 'Interesting', 'Uninteresting') as $title) {
            $post = new Post();
            $post->setTitle(sprintf('My %s Post', $title));
            $post->setPublished(true);
            $post->setParent($parent);
            $post->setContent(<<<HERE
This is the content of my post.
HERE
        );

            $tagPool = $tags;
            $postTags = array();
            for ($i = 0; $i < rand(1, count($tags)); $i++) {
                shuffle($tagPool);
                $postTags[] = array_shift($tagPool);
            }

            $post->setTags($postTags);

            $dm->persist($post);
        }

        $dm->flush();
    }
}
