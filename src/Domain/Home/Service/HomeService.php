<?php

namespace App\Domain\Home\Service;

use App\Domain\Home\Repository\HomeRepository;
use UnexpectedValueException;

final class HomeService {

    private $repository;
    
    public function __construct(HomeRepository $repository){
        $this->repository = $repository;
    }


    public function action($data){
        return $this->repository->action($data);
    }

}
