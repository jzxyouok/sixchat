<?php
/***************************************************************************
 *
 * Copyright (c) 2017 classmateer.com, Inc. All Rights Reserved
 *
 **************************************************************************/

/**
 * @file Application/Home/Model/FriendModel.class.php
 * @author 1275330626(com@qq.com)
 * @date 2017/08/06 03:22:39
 * @brief
 *
 **/

namespace Home\Model;

use Think\Model;

class FriendModel extends Model
{
    public function addFriend($data)
    {
        return $this->data($data)->filter('htmlspecialchars')->add();
    }

    public function deleteFriend($where)
    {
        return $this->where($where)->delete();
    }
}
