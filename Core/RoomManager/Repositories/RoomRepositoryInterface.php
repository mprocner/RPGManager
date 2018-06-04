<?php

namespace Core\RoomManager\Repositories;

/**
 * Interface RoomRepositoryInterface
 */
interface RoomRepositoryInterface
{

    /**
     * @param $data
     * @return mixed
     */
    public function createRoom($data);
}