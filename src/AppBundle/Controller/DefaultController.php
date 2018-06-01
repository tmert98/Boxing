<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('bezoeker/home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/regels", name="regels")
     */
    public function regelsAction()
    {
        return $this->render('bezoeker/regels.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('bezoeker/contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/aanbod", name="aanbod")
     */
    public function aanbodAction()
    {
        return $this->render('bezoeker/aanbod.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/inloggen", name="inloggen")
     */
    public function inloggenAction()
    {
        return $this->render('bezoeker/inloggen.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>admin pagina!</body></html>');
    }

    /**
     * @Route ("/registreren", name="registreren")
     */
    public function registrerenAction()
    {
        return $this->render('bezoeker/registreren.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/user", name="user")
     */
    public function userAction()
    {
        return new Response('<html><body>user pagina!</body></html>');
    }
}
