<?php

namespace SNT\immobilierBundle\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SNT\immobilierBundle\Entity\UtilisateurEntite;
use SNT\immobilierBundle\Form\UtilisateurEntiteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Reponse;


class adminController extends Controller
{
    public function addAction(Request $request)
    {
        $user= new UtilisateurEntite();
        $formUser= $this->createForm(UtilisateurEntiteType::class,$user);
        if($request->isMethod('POST')) {
        $formUser->HandleRequest($request);
        if ($formUser->isValid()) {
        $em= $this
        ->getDoctrine()
        ->getManager();
        $user->setPwd("pass");
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('list');
        }
    }
    return $this->render('immobilierBundle:admin:add.html.twig',
array("form"=>$formUser->createView()
            // ...
    ));
    }
public function listAction(){
$repository = $this
->getDoctrine()
->getManager()
->getRepository('immobilierBundle:UtilisateurEntite');

$listuser = $repository->findAll();
return $this->render('immobilierBundle:admin:list.html.twig', array("users"=>$listuser));

}
public function editAction(Request $request, $id){
    $user=$this
    ->getDoctrine()
    ->getManager()
    ->getRepository('immobilierBundle:UtilisateurEntite')
    ->find($id);
    echo count($user->getRoles());
    $formUser= $this->createForm(UtilisateurEntiteType::class,$user);
    if($request->isMethod('POST')){
        $formUser->HandleRequest($request);
        if ($formUser->isValid()){
//$user->setnomcomplet("toto");
    $this->getDoctrine()
    ->getManager()
    ->flush();
        }
        }
    return $this->render('immobilierBundle:admin:edit.html.twig',
    array("form"=>$formUser->createView())
);

}
public function supprAction(UtilisateurEntite $utilisateur){

    $em= $this->getDoctrine()->getManager();
    $em->remove($utilisateur);
    $em->flush();

    return $this->redirectToRoute("list");
}

public function searchAction(Request $request)
    {

        $em=$this
        ->getDoctrine()
        ->getManager();
        $searchs=$em
        ->getRepository('immobilierBundle:UtilisateurEntite')
        ->findAll();
        if($request->isMethod("POST"))
        {
            $nomcomplet=$request->get('nomcomplet');
            $searchs=$em->getRepository('immobilierBundle:UtilisateurEntite')
            ->findBy(array('nomcomplet'=>$nomcomplet));

        }
        return $this->render('immobilierBundle:admin:search.html.twig', array('users'=>$searchs

            // ...
        ));
    }
    public function etatAction(UtilisateurEntite $user)
    {
        $em = $this
        ->getDoctrine()
        ->getManager();
        if($user->getEtat()==0){
       $user->setEtat(1);
        }
        else{
       $user->setEtat(0);
        }
        $em->flush();
        return $this->redirectToRoute("list");

    }
}
