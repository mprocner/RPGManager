<?php


namespace Core\Common;

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