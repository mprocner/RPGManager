<?php
declare(strict_types=1);

namespace Core\Common\Contracts;

/**
 * Interface FactoryInterface
 * @package Core\Common\Contracts
 */
interface FactoryInterface
{

    /**
     * @return mixed
     */
    public function create();
}