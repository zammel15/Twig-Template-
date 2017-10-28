<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{

 private $client_data = [

                    [ 'id' => 0 ,
              'title' => 'mr' ,
                  'name' => 'Roy',
                 'last_name' => 'Adams',
                  'address' => '2872 marquette street',
                    'zip_code' => 'new york city ',
                  'state' => 'NY' ,
                     'email'=> 'radams1v@example.com'
                ] ,
               [ 'id' => 1 ,
               'title' => 'mrs',
             'name' => 'Bonnie',
            'last_name'=> 'Clark' ,
               'address' => '4 Porter Avenue ',
               'zip_code' => '80028',
               'city' => 'louisville',
            'state' => 'CO' ,
              'email' => 'bclark@exemple.com'
             ],
                     [ 'id' => 2 ,
                'title' => 'ms',
              'name' => 'Carol' ,
            'last_name' => 'Shaw',
                 'address' => '650 Grover Alley',
              'zip_code' => '30305',
                'city' => 'Atalanta' ,
             'state' => 'GA' ,
               'email' => 'cshaw@example.com'
]
];
 private $title = ['mr', 'ms','mrs','dr','mx'];

    /**
     *
     * @Route("/guests",name="index_clients")
     */
    public function showIndex()
    {
        $data = [];
        $data['clients'] = $this->client_data;

        return $this->render("clients/index.html.twig",$data);
        
    }

    /**
     * @Route("/guests/modify/{id_client}",name ="client_modify")
     *
     */
    
    public function showDetails( Request  $request ,$id_client)
    {
  $data = [] ;

  $data['mode'] = 'modify';
  $data['form'] = [] ;
  $client_data = $this->client_data[$id_client];
  $data['client'] = $this->client_data  ;
  return $this->render("clients/form.html.twig",$data);

    }

    /**
     *
     * @Route("/guests/new",name="clients_new")
     */
    
    public function showNew(Request $request )
    {
        $data = [] ;
        $data['mode']= 'new_client';
        $data['client'] = $this->client_data;
        return $this->render("clients/form.html.twig",$data);

        
    }

}