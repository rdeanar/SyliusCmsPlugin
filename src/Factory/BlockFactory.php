<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Factory;

use BitBag\SyliusCmsPlugin\Entity\BlockInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

final class BlockFactory implements BlockFactoryInterface
{
    /**
     * @var FactoryInterface
     */
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * {@inheritdoc}
     */
    public function createWithType(string $type): BlockInterface
    {
        /** @var BlockInterface $block */
        $block = $this->factory->createNew();
        $block->setType($type);

        return $block;
    }

    /**
     * {@inheritdoc}
     */
    public function createNew(): BlockInterface
    {
        /** @var BlockInterface $block */
        $block = $this->factory->createNew();

        return $block;
    }
}
