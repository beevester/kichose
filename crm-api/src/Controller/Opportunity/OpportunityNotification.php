<?php


namespace App\Controller\Opportunity;



use App\Controller\User\BaseUserController;
use App\Entity\Opportunity;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OpportunityNotification extends AbstractController
{
    public function createNotification(Opportunity $opportunity): Opportunity
    {
        // Create the Transport
        $transport = (new Swift_SmtpTransport('smtp.mail.me.com', 587))
            ->setUsername(getenv('MAILER_USER_NAME'))
            ->setPassword(getenv('MAILER_USER_PASSWORD'))
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
        try {
            $message = (new Swift_Message())
                ->setSubject('New Opportunity was created')
                ->setFrom(getenv('MAIL_FROM'))
                ->setTo('nyikomdluli@icloud.com')
                ->setBody(
                    $this->renderView(
                        'emails/notification.html.twig',
                        [
                            'opportunity' => $opportunity,
                        ]
                    ),
                    'text/html'
                );

            $mailer->send($message);
        } catch (\Exception $e) {
            dd($e);
        }

        return $opportunity;
    }
}
