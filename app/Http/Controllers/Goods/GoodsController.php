<?php

namespace App\Http\Controllers\Goods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\GoodsModel;
class GoodsController extends Controller
{
    //商品详情
    public function detail(){
        $goods_id=$_GET['id'];
        echo 'goods_is:'.$goods_id;echo '</br>';
        //查询商品
        $info =GoodsModel::where(['goods_id'=>$goods_id])->get()->toArray();
        echo '<pre>';print_r($info);echo'</pre>';
    }
}
