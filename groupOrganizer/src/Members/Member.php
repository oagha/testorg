<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Member
 *
 * @author Osama Agha <osama.agha24@gmail.com>
 */

namespace GOrganizer\Members;
use GOrganizer\Connector\Redis;
class Member
{

    
    private static $redis;

    
    
    public function __construct()
    {
        if (empty($this->redis)) {
            $this->redis = new Redis();
        }
    }

    public function setMember()
    {
        
    }

}
