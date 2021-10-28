<?php
/**
 * User: BIPA
 * Date: 10/28/2021
 * Time: 9:41 PM
 */

namespace mvc;


/**
 * Class Application
 *
 * @author  Bård-Inge Pettersen <bard.i.a.pettersen@himolde.no>
 * @package mvc
 */
class Application
{

    public function __construct()
    {
        $router = new ROUTER();
    }


    function run()
    {

            //resolve, men husk må registrere rutene en plass
    }
}