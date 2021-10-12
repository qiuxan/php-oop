<?php
/**
 * Created by PhpStorm.
 * User: xianqiu
 * Date: 12/10/21
 * Time: 9:10 PM
 */
//
//class CoffeeMaker{
//    public function brew(){
//        var_dump("brewing the coffee");
//    }
//}
//
//class SpecialtyCoffeeMaker extends CoffeeMaker{
//
//    public function brewLatte(){
//        var_dump("brewing the latte");
//
//    }
//}
//
//(new SpecialtyCoffeeMaker())->brewLatte();
//


class Collection
{
    protected $items = array();

    /**
     * Collection constructor.
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
//        return array_sum(array_map(function ($item) use ($key) {
//            return $item->$key;
//        }, $this->items));


        return array_sum(array_column($this->items,$key));
    }
}


class Video
{
    public $title;
    public $length;

    /**
     * Video constructor.
     * @param $title
     * @param $length
     */
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}


class VideoCollection extends Collection{
    public function length(){
        return $this->sum('length');
    }
}

$video = new VideoCollection([

    new Video('video', 100),
    new Video('video1', 200),
    new Video('video2', 300),

]);

//echo  'hh';
//var_dump($collection);
echo($video->length ());

//echo ;