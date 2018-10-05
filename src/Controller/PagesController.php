<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
  *@property \App\Model\Table\ContentsTable $Contents
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */

class PagesController extends AppController
{

  public function initialize()
  {

    $this->loadModel('Albums');
    $this->loadModel('Contentalbums');
    $this->loadModel('Resources');
    $this->loadModel('Contents');
    $this->loadComponent('RequestHandler');
    $data = null;

  }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $albums = $this->Albums->find('all');
        $this->set('albums',$albums);
        $this->set('_serialize', ['albums']);
        #Imagen aleatoria del albúm1
        $album1 = $this->Contentalbums->find('all',['conditions' => ['IdAlbum' => 1],'order'=> 'rand()','limit' => 1])->toArray();
        $albumA = $album1[0]['IdContent'];
        $reso = $this->Resources->find('all',['conditions'=> ['IdContent' => $albumA]])->toArray();
        #Imagen aleatoria del albúm2
        $album2 = $this->Contentalbums->find('all',['conditions' => ['IdAlbum' => 2],'order'=> 'rand()','limit' => 1])->toArray();
        $albumA2 = $album2[0]['IdContent'];
        $reso2 = $this->Resources->find('all',['conditions'=> ['IdContent' => $albumA2]])->toArray();
        #Imagen aleatoria del albúm 3
        $album3 = $this->Contentalbums->find('all',['conditions' => ['IdAlbum' => 3],'order'=> 'rand()','limit' => 1])->toArray();
        $albumA3 = $album3[0]['IdContent'];
        $reso3 = $this->Resources->find('all',['conditions'=> ['IdContent' => $albumA3]])->toArray();
        #Envio de variables a la vista para el albúm 1
        $this->set('albumA',$albumA);
        $this->set('reso',$reso);
        #Envio de variables a la vista para el albúm 2
        $this->set('albumA2',$albumA2);
        $this->set('reso2',$reso2);
        #Envio de variables a la vista para el albúm 3
        $this->set('albumA3',$albumA3);
        $this->set('reso3',$reso3);
        $this->set('-serialize',['reso',]);
        $this->set(compact('page', 'subpage'));



        try {

            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }


    public function especies($id = null)
    {


        $contents = $this->paginate($this->Contents->find('all',array('conditions' => array('Contents.IdCategory' => 1))),  ['limit' => 12]);

        $this->set(compact('contents'));
        $this->set('_serialize', ['contents']);

    }
    public function album($id = null)
    {
      $album = $this->Albums->get($id, [
          'contain' => []
      ]);
      $x = 0;
      $contentsByAlbum = $this->paginate($this->Contentalbums->find('all', array('conditions' => array('Contentalbums.IdAlbum' => $id),'contain' => ['Contents'])),  ['limit' => 12]);
      foreach ($contentsByAlbum as $content) {
        $Reso[] = $this->Resources->find('all',['conditions' =>['Resources.IdContent' => $content->IdContent]])->toArray();
        $x+=1;




      }

      $this->set(compact('Reso'));
      $this->set(compact('album'));
      $this->set(compact('data'));
      $this->set('_serialize', ['data']);
      $this->set(compact('contentsByAlbum'));
      $this->set('_serialize', ['contentsByAlbum']);
      $session = $this->request->session();
      $session->write('album', $id);


    }

    public function buscar($search = null)
    {
      $s = $_POST['search'];
      $session = $this->request->session();
      $album = $session->read('album');
      $data= $this->Contentalbums->find('all', array('conditions' => array('Contentalbums.IdAlbum' => $album, "AND" => array( "Contents.Name LIKE" => "$s%")),'contain' => ['Contents']));
      $data->select(['Contents.idContent','Contents.Name']);
      $this->set(compact('data'));
      $this->set('_serialize', ['data']);
      $this->RequestHandler->renderAs($this, 'json');
    }


    /**
     * View method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function detail($id = null)
    {

        $content = $this->Contents->get($id, [
            'contain' => ['Botanicalfamilies']
        ]);
        $resource = $this->Resources->find('all', [
            'conditions' => ['IdContent' => $content->IdContent]
        ])->toArray();

        $this->set('content', $content);
        $this->set('resource', $resource);
        $this->set('_serialize', ['content','resource']);

    }


    public function terminology($id = null)
    {


        $contents = $this->paginate($this->Contents->find('all',array('conditions' => array('Contents.IdCategory' => 2))),  ['limit' => 12]);

        $this->set(compact('contents'));
        $this->set('_serialize', ['contents']);

    }
    public function nosotros()
    {
      echo "nosotros";
      exit();
    }
    public function contacto()
    {
      echo "contacto";
      exit();
    }
  }
