<?php

namespace MyERP;


class MyERP{

    public static $DEFAULT_PARAMS  = [
      'protocol' => 'https',
      'host' => 'api.oneup.com',
      'port' => 443,
      'prefix' => '/v1/'
    ];

    protected $apiEmail;
    protected $apiKey;
    protected $params;

    protected $accounts;
    protected $customers;
    protected $projects;
    protected $items;
    protected $itemFamilies;
    protected $salesOrders;
    protected $transactions;
    protected $paymentTerms;
    protected $currencies;

    /**
     * @param string $apiEmail MyERP API email
     * @param string $apiKey MyERP API key
     * @param array $params
     */
    public function __construct($apiEmail, $apiKey, array $params = array()){
      $this->apiEmail = $apiEmail;
      $this->apiKey = $apiKey;
      $this->params = array_merge(self::$DEFAULT_PARAMS, $params);
    }

    public function accounts(){
      if(isset($this->accounts)){
          return $this->accounts;
      }
      $this->accounts = new Api\Accounts($this->apiEmail, $this->apiKey, $this->params);
      return $this->accounts;
    }

    public function customers(){
      if(isset($this->customers)){
	  return $this->customers;
      }
      $this->customers = new Api\Customers($this->apiEmail, $this->apiKey, $this->params);
      return $this->customers;
    }

    public function projects(){
      if(isset($this->projects)){
          return $this->projects;
      }
      $this->projects = new Api\Projects($this->apiEmail, $this->apiKey, $this->params);
      return $this->projects;
    }

    public function items(){
      if(isset($this->items)){
          return $this->items;
      }
      $this->items = new Api\Items($this->apiEmail, $this->apiKey, $this->params);
      return $this->items;
    }

    public function itemFamilies(){
      if(isset($this->itemFamilies)){
          return $this->itemFamilies;
      }
      $this->itemFamilies = new Api\ItemFamilies($this->apiEmail, $this->apiKey, $this->params);
      return $this->itemFamilies;
    }

    public function salesOrders(){
      if(isset($this->salesOrders)){
          return $this->salesOrders;
      }
      $this->salesOrders = new Api\SalesOrders($this->apiEmail, $this->apiKey, $this->params);
      return $this->salesOrders;
    }

    public function transactions(){
      if(isset($this->transactions)){
	  return $this->transactions;
      }
      $this->transactions = new Api\Transactions($this->apiEmail, $this->apiKey, $this->params);
      return $this->transactions;
    }

    public function paymentTerms(){
      if(isset($this->paymentTerms)){
          return $this->paymentTerms;
      }
      $this->paymentTerms = new Api\PaymentTerms($this->apiEmail, $this->apiKey, $this->params);
      return $this->paymentTerms;
    }

    public function currencies(){
      if(isset($this->currencies)){
          return $this->currencies;
      }
      $this->currencies = new Api\Currencies($this->apiEmail, $this->apiKey, $this->params);
      return $this->currencies;
    }
}
