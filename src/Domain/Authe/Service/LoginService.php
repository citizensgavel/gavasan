<?php

namespace App\Domain\Authe\Service;

use App\Domain\Authe\Repository\LoginRepository;
use UnexpectedValueException;

final class LoginService {

    private $repository;
    
    public function __construct(LoginRepository $repository){
        $this->repository = $repository;
    }


    public function action($data){
        return $this->repository->action($data);
    }

}
