<?php

namespace Usuarios\UsuariosBundle\Controller;

use Usuarios\UsuariosBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Description of UsersController
 *
 * @author flia
 */
class UsersController extends Controller{
    
    /**
     * 
     * @return array
     * @View()
     */
    public function getUsersAction() 
    {
        $users = $this->getDoctrine()->getRepository('UsuariosBundle:User')->findAll();
        return array('users'=>$users);
    }
    
    /**
     * 
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="UsuariosBundle:User")
     */
    public function getUserAction(User $user)
    {
        
        return array('user'=>$user);
    }

    /**
     * 
     * @return array
     * @View()
     */
    public function getExperienciasAction() 
    {
        $experiencias = $this->getDoctrine()->getRepository('AdminBundle:Experiencias')->findAll();
        return array('experiencias'=>$experiencias);
    }


   
}
