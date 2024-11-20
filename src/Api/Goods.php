<?php

namespace Zhujinkui\Ddxpdd\Api;

use Zhujinkui\Ddxpdd\PddGateWay;

/**
 * | Notes：商品
 * +----------------------------------------------------------------------
 * | PHP Version 8.0+
 * +----------------------------------------------------------------------
 * | Copyright (c) 2011-2024 https://www.zhujinkui.com, All rights reserved.
 * +----------------------------------------------------------------------
 * | Author: 阶级娃儿 <zhujinkui.com@gmail.com>
 * +----------------------------------------------------------------------
 * | Date: 2024/11/18 16:05
 * +----------------------------------------------------------------------
 */
class Goods extends PddGateWay
{
    /**
     * 商品分类
     *
     * @param array $client_params
     *
     * @return bool|mixed|string
     */
    public function goodsCatsGet(array $client_params = []): mixed
    {
        $params = [
            'apikey' => $this->apikey
        ];

        if (!empty($client_params)) {
            $params = array_merge($params, $client_params);
        }

        return $this->send('/pdd/cats', $params, "POST");
    }

    /**
     * 拼多多查询商品标签列表
     *
     * @param array $client_params
     *
     * @return mixed
     */
    public function goodsOptGet(array $client_params = []): mixed
    {
        $params = [
            'apikey' => $this->apikey
        ];

        if (!empty($client_params)) {
            $params = array_merge($params, $client_params);
        }

        return $this->send('/pdd/goods_opt', $params, "POST");
    }

    /**
     * 商品搜索
     *
     * @param array $client_params
     *
     * @return bool|mixed|string
     */
    public function goodsSearch(array $client_params = []): mixed
    {
        $params = [
            'apikey' => $this->apikey,
            'pid'    => $this->pid,
        ];

        if (!empty($client_params)) {
            $params = array_merge($params, $client_params);
        }

        return $this->send('/pdd/goods_search', $params, "POST");
    }

    /**
     * 商品详情
     *
     * @param array $client_params
     *
     * @return mixed
     */
    public function goodsDetail(array $client_params = []): mixed
    {
        $params = [
            'apikey' => $this->apikey,
        ];

        if (!empty($client_params)) {
            $params = array_merge($params, $client_params);
        }

        return $this->send('/pdd/goods_detail2', $params, "POST");
    }

    /**
     * 拼多多商品转链
     *
     * @param array $client_params
     *
     * @return bool|mixed|string
     */
    public function goodsPromotionUrlGenerate(array $client_params = []): mixed
    {
        $params = [
            'apikey' => $this->apikey,
            'p_id'   => $this->pid,
        ];

        if (!empty($client_params)) {
            $params = array_merge($params, $client_params);
        }

        return $this->send('/pdd/convert', $params, "POST");
    }
}