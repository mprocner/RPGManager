<?php
declare(strict_types=1);

namespace Core\Roller\Repositories;

/**
 * Interface RollRepositoryInterface
 * @package Core\Roller\Repositories
 */
interface RollRepositoryInterface
{

    /**
     * Save roll to statistics
     *
     * @param array $data
     * @return mixed
     */
    public function saveRoll(array $data);
}