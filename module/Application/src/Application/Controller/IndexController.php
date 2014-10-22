<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Models\Portfolio;
use Zend\Db\Adapter\Adapter as DbAdapter;
use Zend\Db\Sql\Sql;
use Zend\Db\ResultSet\ResultSet;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {

    	/*
    	$adapter = new DbAdapter(array(
    		'driver' => 'mysqli',
    		'username' => 'root',
    		'database' => 'liamdonpain'
    	));

    	$sql = new Sql($adapter);
    	$select = $sql->select();
    	$select->from('users');
    	$select->where(array(1 => 1));

    	$statement = $sql->prepareStatementForSqlObject($select);
    	$results = $statement->execute();

    	$resultSet = new ResultSet();
    	$resultSet->initialize($results);


    	foreach( $resultSet as $row ) {
    		print_r($row);
    	}
    	//this will get us all the users in our table and they are now inside the results variable

    	// i know this is a bit complicated im just trying to illustrate a point
		*/
		
    	$chelsea = new Portfolio();
    	$chelsea->setOwner('chelsea');
    	$chelsea->setPieces(100);
    	$chelsea->setMedium('Toy Design');

    	$liam = new Portfolio();
    	$liam->setOwner('liam');
    	$liam->setPieces(100);
    	$liam->setMedium('Writing');

    	$eric = new Portfolio();
    	$eric->setOwner('eric');
    	$eric->setPieces(-200102);
    	$eric->setMedium('Pally Tanking');
    	$eric->setFavoriteArtist('Theck');

    	$stephen = new Portfolio();
    	$stephen->setOwner('Stephen');
    	$stephen->setPieces(2);
    	$stephen->setMedium('Graphic Design');

        return new ViewModel(array(
        	'bae' => "Chelsea",
        	'portfolios' => array($chelsea, $liam, $eric, $stephen)
        ));
    }
}
