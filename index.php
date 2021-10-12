<?php
/**
 * Created by PhpStorm.
 * User: xianqiu
 * Date: 12/10/21
 * Time: 7:17 PM
 */

//echo "hello world";

class Team
{
    protected $name;
    protected $members = [];

    /**
     * Team constructor.
     * @param $name
     */
    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public function name()
    {
        return $this->name;
    }

    public function add($name)
    {

        $this->members[] = $name;

    }

    public static function start(...$params)
    {

//        var_dump($params);

        return new static(...$params);
    }

    public function members()
    {
        return $this->members;
    }


}

class Member
{
    protected $name;

    /**
     * Member constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


}

$acme = Team::start('Acme',
    [
        new Member('john doe'),
        new Member('j d')
    ]);

////echo $acme->name();
//$acme->add('john doe');
//$acme->add('j doe');
//$acme->add('lj doe');

var_dump($acme->members());

