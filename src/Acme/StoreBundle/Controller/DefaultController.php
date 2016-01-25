<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Acme\StoreBundle\Entity\Category;
use Acme\StoreBundle\Entity\Product;


/**
* @Route("/site.com")
*/
class DefaultController extends Controller
{	
	/**
	* @Route("/", name="home")
	*/
    public function indexAction()
    {	
    	$em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AcmeStoreBundle:Category')->findAll();
        $products = $em->getRepository('AcmeStoreBundle:Product')->findAll();
        return $this->render('site/home.html.twig', array(
            'categories' => $categories,
            'products' => $products
        ));
        //return $this->render('site/home.html.twig');
    }

    /**
    * @Route("/{id}", name="site_category_name")
    * @Method("GET")
    */
    public function showProductsCategoryAction(Category $category)
    {	
    	$em = $this->getDoctrine()->getManager();
    	$categories = $em->getRepository('AcmeStoreBundle:Category')->findAll();
    	$products = $em->getRepository('AcmeStoreBundle:Product')->findByCategory($category);
    	return $this->render('site/home.html.twig', array(
            'category' => $category,
            'categories' => $categories,
            'products' => $products
        ));
    }
}
