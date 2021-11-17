<?php

namespace App\Action\Authe;

use App\Domain\Authe\Service\LoginService;
use App\Responder\Responder;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Fig\Http\Message\StatusCodeInterface;
use App\CoreFunctions\InternalCoreFunction;


/**
 * Action.
 */
final class Login{

    private $responder;
    private $service;

    public function __construct(Responder $responder,LoginService $service, InternalCoreFunction $internalCoreFunction){
        $this->responder = $responder;
        $this->service = $service;
        $this->internalCoreFunction = $internalCoreFunction;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface{
        $data = (array) $request->getParsedBody();
        $firewall = [];

        //Checking Firewall and make decisions...
        if($data['email'] === ""){
            $firewall['data'] = [];
            $firewall['message'] = 'Email is empty';
            $firewall['status'] = StatusCodeInterface::STATUS_EARLY_HINTS;
        }
        //if(decisions is not statisfiable):
            //$firewall['data'] = [];
            //$firewall['message'] = 'Send the Message to user'
            //$firewall['status'] = status code here

        //checking ends here...


        if(empty($firewall)){
            //if satisfy call on service and go to repository
            $passer = $this->service->action($data);
            if($passer){
                return $this->responder
                ->json($response, ['response' => $passer, 'RequestStates' => 'success'])
                ->withStatus($passer['status']);
            }else {
                return $this->responder
                ->json($response, ['response' => [], 'RequestStates' => 'success'])
                ->withStatus(StatusCodeInterface::STATUS_OK);
            }
        }else {
            //populate $firewall and send the response
            $responseData = $this->internalCoreFunction->requestResponser($firewall['data'],$firewall['message'],$firewall['status']);
            return $this->responder
                ->json($response, ['response' => $responseData, 'RequestStates' => 'success'])
                ->withStatus($firewall['status']);
        }
    }
}
