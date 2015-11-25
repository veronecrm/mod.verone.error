<?php
/**
 * Verone CRM | http://www.veronecrm.com
 *
 * @copyright  Copyright (C) 2015 Adam Banaszkiewicz
 * @license    GNU General Public License version 3; see license.txt
 */

namespace App\Module\Error\Controller;

use CRM\App\Controller\BaseController;

class NotFound extends BaseController
{
    public function indexAction($request)
    {
        return $this->render('index.NotFound.Error', [
            /**
             * @todo If ENV will be PROD, then we shows only standard notice (page not found)
             *       but when will be DEV, we shows message from request (passed to Exception object)
             */
            'message' => $request->get('message', $this->t('errorGivenPageDoesntExists'))
        ]);
    }
}
