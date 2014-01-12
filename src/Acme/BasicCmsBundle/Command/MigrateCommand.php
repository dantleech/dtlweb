<?php

namespace Acme\BasicCmsBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Acme\BasicCmsBundle\Document\Post;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateCommand extends ContainerAwareCommand
{
    public function configure()
    {
        $this->setName('dtlweb:migrate');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $doctrine = $this->getContainer()->get('doctrine');
        $dm = $this->getContainer()->get('doctrine_phpcr')->getManager();
        $conn = $doctrine->getConnection('dantleech2');

        $stmt = $conn->executeQUery(
            'SELECT * FROM blog'
        );

        $parent = $dm->find(null, '/cms/posts');
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $output->writeln('Post: ' . $row['title']);
            $post = new Post();
            $post->setTitle($row['title']);
            $post->setContent(utf8_encode($row['body']));
            $post->setDate(new \DateTime($row['published_on']));
            $post->setParent($parent);

            $stmt2 = $conn->executeQuery(
                'SELECT name FROM tag t LEFT JOIN tagging tg ON tg.tag_id = t.id LEFT JOIN blog b ON b.id = tg.taggable_id WHERE b.id = ' . $row['id']
            );

            $tags = array();
            while ($row2 = $stmt2->fetch(\PDO::FETCH_ASSOC)) {
                $output->writeln('  ' . $row2['name']);
                $tags[] = $row2['name'];
            }

            $post->setTags($tags);
            $dm->persist($post);
        }

        $dm->flush();
    }
}
