<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Quote;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadJobData
 * @package AppBundle\DataFixtures\ORM
 */
class LoadQuotesData implements FixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $QuotesDescriptions = [
            'Clean coffee machine',
            'Restock snacks baskets',
            'Mop the floor',
            'Throw out the rubbish',
            'Clean the tables',
            'Vacuum the carpet',
        ];

        foreach ($QuotesDescriptions as $quoteDescription) {
            $quote = new Quote();
            $quote->setDescription($quoteDescription);

            $manager->persist($quote);
        }

        $manager->flush();
    }
}
