<?php
/**
 * Created by PhpStorm.
 * User: Tolga
 * Date: 1-6-2018
 * Time: 11:52
 */

namespace AppBundle\Handler;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authorization\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

/**
 * Custom authentication succes handler
 *
 * Defines what happens after login succes
 */
class LoginSuccesHandler implements AuthenticationSuccessHandlerInterface
{

}