<?php namespace Infusionsoft\Api\Rest;

use Infusionsoft\Api\Rest\Traits\CannotCreate;
use Infusionsoft\Api\Rest\Traits\CannotDelete;
<<<<<<< HEAD
<<<<<<< HEAD
use Infusionsoft\Api\Rest\Traits\CannotModel;
=======
>>>>>>> codeigniter4
=======
use Infusionsoft\Api\Rest\Traits\CannotModel;
>>>>>>> codeigniter4
use Infusionsoft\Api\Rest\Traits\CannotSave;
use Infusionsoft\Api\Rest\Traits\CannotSync;
use Infusionsoft\Infusionsoft;
use Infusionsoft\InfusionsoftException;

class CampaignService extends RestModel
{

<<<<<<< HEAD
<<<<<<< HEAD
    use CannotCreate, CannotDelete, CannotSave, CannotSync, CannotModel;
=======
    use CannotCreate, CannotDelete, CannotSave, CannotSync;
>>>>>>> codeigniter4
=======
    use CannotCreate, CannotDelete, CannotSave, CannotSync, CannotModel;
>>>>>>> codeigniter4

    public $full_url = 'https://api.infusionsoft.com/crm/rest/v1/campaigns';

    public $return_key = 'campaigns';

    public function __construct(Infusionsoft $client)
    {
        parent::__construct($client);
    }


}