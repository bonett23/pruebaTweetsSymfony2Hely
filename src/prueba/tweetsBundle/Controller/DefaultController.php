<?php

namespace prueba\tweetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use prueba\tweetsBundle\Entity\Record;
use prueba\tweetsBundle\Entity\Tweets;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('pruebatweetsBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Route("/tweets", name="_prueba_tweets")
     * @Template()
     */
    public function tweetsAction() {

        $request = $this->get('request');
        $records = $this->saveAndReturnRecord($request->get('key'));
        $tweets = $this->getTweets($request->get('key'));
        return $this->render('pruebatweetsBundle:Default:tweets.html.twig', array('records' => $records, 'tweets' => $tweets));
    }

    private function saveAndReturnRecord($key) {

        $record = new Record();
        $record->setPalabra($key);
        $em = $this->getDoctrine()->getManager();
        $em->persist($record);
        $em->flush();

        $repository = $this->getDoctrine()->getRepository("pruebatweetsBundle:Record");
        return $repository->findAll();
    }

    private function getTweets($key) {
        $repository = $this->getDoctrine()->getRepository("pruebatweetsBundle:Tweets");
        return $repository->findAllByKeyLimit($key, 10);
    }

}
