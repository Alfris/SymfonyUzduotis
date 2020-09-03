<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class ExpressionController extends AbstractController {

        /**
         * @Route("/")
         */
        public function index() {
            $i= rand(1, 6);        
            return $this->redirect('expression'.$i);           
        }

        /**
         * @Route("/expressions/{i}")
         */
        public function expression($i) {
            return $this->render('expressions/expression'.$i.'.html.twig');
        }

    }