<?php

namespace App\Controller;

use App\Form\DevisType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DevisController extends AbstractController
{
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
    
    #[Route('/devis', name: 'app_devis')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(DevisType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $email = (new Email())
                ->from($formData['email'])
                ->to('thomas.donotreply@gmail.com')
                ->subject('Nouveau message de contact')
                ->text($formData['message']);

            $this->mailer->send($email);
            $this->addFlash('success', 'Votre message a été envoyé avec succès !');

            return $this->redirectToRoute('app_devis');
        }
        return $this->render('devis/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
