<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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

//    /**
//     * @Route ("/inloggen", name="inloggen")
//     */
//    public function inloggenAction()
//    {
//        return $this->render('bezoeker/inloggen.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
//        ]);
//    }

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
     * @Route("/admin", name="adminDefault")
     */
    public function adminAction()
    {
        return $this->render('admin/personen.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/registreren", name="registreren")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function registrerenAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $user->setRoles(["ROLE_USER"]);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();


            return $this->redirectToRoute('homepage');
        }

        return $this->render('bezoeker/registreren.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route ("/user", name="user")
     */
    public function userAction()
    {
        return new Response('<html><body>user pagina!</body></html>');
    }

    /**
     * @Route ("/personenAdmin", name="personenAdmin")
     */
    public function personenAdminAction()
    {

    }
}
