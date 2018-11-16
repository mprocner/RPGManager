<?php
declare(strict_types=1);

namespace Core\Common\Contracts;

/**
 * Interface UseCaseInterface
 *
 * @package Core\Common
 */
interface UseCaseInterface
{

    /** Execute use case action
     *
     * @return mixed
     */
    public function execute();
}