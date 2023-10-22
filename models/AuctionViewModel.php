<?php 

namespace App\Models;
use App\Core\DatabaseConnection;

use App\Core\Model;
use App\Core\Field;
use \PDO;




class AuctionViewModel extends Model{

    protected function getFields(): array{

        return [
            'auction_id'=> new Field('|^[1-9][0-9]{0,10}$|', true),
            'ip_adress'=> new Field('@^([0-9]{1,3}(\.[0-9]{1,3}){3})|(::[0-9]+)$@', true),
            'user_agent'=> new Field('|^.{0,255}$|', true)

        ];
    }

    public function getAllbyAuctionId($auctionId): array{

        return $this->getAllByFieldName('auction_id',$auctionId);

    }

    public function getAllByIpAddress($ipAdress): array{
        return  $this->getAllByFieldName('ip_adress', $ipAdress);
    }
}