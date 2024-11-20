<?php

namespace Zhujinkui\Ddxpdd;

use Zhujinkui\Ddxpdd\Api\Goods;
use Zhujinkui\Ddxpdd\Api\Oauth;
use Zhujinkui\Ddxpdd\Api\Order;
use Exception;

/**
 * @package Zhujinkui\Ddxpdd
 * @property Goods $goods
 * @property Oauth $oauth
 * @property Order $order
 */
class PddFactory
{
    private mixed $config;
    private mixed $error;

    /**
     * @throws Exception
     */
    public function __construct($config = null)
    {
        if (empty($config)) {
            throw new Exception('no config');
        }

        $this->config = $config;

        return $this;
    }


    /**
     *
     * @param $api
     *
     * @return mixed
     * @throws \Exception
     */
    public function __get($api)
    {
        try {
            $classname = __NAMESPACE__ . "\\Api\\" . ucfirst($api);

            if (!class_exists($classname)) {
                throw new Exception('Pdd Sdk Api Undefined');

                return false;
            }

            return new $classname($this->config, $this);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * 设置错误
     *
     * @param $message
     */
    public function setError($message): void
    {
        $this->error = $message;
    }

    /**
     * 获取错误
     *
     * @return mixed
     */
    public function getError(): mixed
    {
        return $this->error;
    }
}