<?php

/*
 * This file is part of the XiideaEasyAuditBundle package.
 *
 * (c) Xiidea <http://www.xiidea.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xiidea\EasyAuditBundle\Exception;


class UnrecognizedEntityException extends \Exception {

    protected $message = "Entity must extend Xiidea\\EasyAuditBundle\\Entity\\BaseAuditLog";
}
