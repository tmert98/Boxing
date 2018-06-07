<?php
/**
 * Created by PhpStorm.
 * User: Tolga
 * Date: 1-6-2018
 * Time: 11:52
 */

namespace AppBundle\Handler;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

/**
 * Custom authentication succes handler
 *
 * Defines what happens after login succes
 */
class LoginSuccesHandler implements AuthenticationSuccessHandlerInterface
{

    /**
     * @var RouterInterface $router
     */
    protected $router;
    /**
     * @var AuthorizationCheckerInterface implements AuthenticationSuccessHandlerInterface
     */
    protected $authorizationChecker;
    public function __construct(RouterInterface $router, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }

    /**
     * called when authentication secceeds
     *
     * @param Request        $request
     * @param TokenInterface $token
     *
     * @return Response never null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        if ($this->authorizationChecker->isGranted('ROLE_ADMIN'))
        {
            $response = new RedirectResponse($this->router->generate('adminDefault'));
        }
//        elseif ($this->authorizationChecker->isGranted('ROLE_USER'));
//        {
//            $response = new RedirectResponse($this->router->generate('user'));
//        }
        return $response;
    }
}