<?php
require_once '../model/deliverie.php';


class DeliverieApiController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Deliverie();
    }

    public function addDeliverie($data){    

        $json = $this->dataJson($data);
        $headers = array(
            'Accept: application/json',
            'api-key: ea670047974b650bbcba5dd759baf1ed',
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://stage.api.enviame.io/api/s2/v2/companies/401/deliveries");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $res = json_decode(curl_exec($ch));
        $ref = $this->random_ref();

        foreach ($res as $key => $value) {
            for ($i=0; $i < count($value); $i++) { 
                $this->model->addResponse($key,$value[$i],$ref);
            }
        }
        
        curl_close($ch);
    }

    public function dataJson($data){

        $json = '{
            "shipping_order": {
                "n_packages": "'.$data['n_packages'].'",
                "content_description": "'.$data['content_description'].'",
                "imported_id": "'.$data['imported_id'].'",
                "order_price": "'.$data['order_price'].'",
                "weight": "'.$data['weight'].'",
                "volume": "'.$data['volume'].'",
                "type": "'.$data['type'].'"
            },
            "shipping_origin": {
                "warehouse_code": "'.$data['warehouse_code'].'"
            },
            "shipping_destination": {
                "customer": {
                    "name": "'.$data['customer_name'].'",
                    "email": "'.$data['customer_email'].'",
                    "phone": "'.$data['customer_phone'].'"
                },
                "delivery_address": {
                    "home_address": {
                        "place": "'.$data['customer_place'].'",
                        "full_address": "'.$data['full_address'].'"
                    }
                }
            },
            "carrier": {
                "carrier_code": "'.$data['carrier_code'].'",
                "tracking_number": "'.$data['tracking_number'].'"
            }
        }';

        return $json;

    }

    public function random_ref()  
    {  
        $longitud = 8; 
        $ref = substr(md5(rand()),0,$longitud);  
        return($ref); 
    } 

}

?>