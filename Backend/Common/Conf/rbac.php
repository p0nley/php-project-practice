<?php
 return array (
  'SESSION_AUTO_START' => true,
  'RBAC_SUPERADMIN' => 'admin',
  'ADMIN_AUTH_KEY' => 'administrator',
  'USER_AUTH_ON' => '0',
  'USER_AUTH_TYPE' => 1,
  'USER_AUTH_KEY' => 'authId',
  'ADMINISTRATOR' => 'admin',
  'USER_AUTH_MODEL' => 'User',
  'AUTH_PWD_ENCODER' => 'md5',
  'USER_AUTH_GATEWAY' => '/Public/login',
  'NOT_AUTH_MODULE' => 'Index,Login',
  'REQUIRE_AUTH_MODULE' => 'Category,File,Product,Rbac,System',
  'NOT_AUTH_ACTION' => '',
  'REQUIRE_AUTH_ACTION' => '',
  'GUEST_AUTH_ON' => false,
  'GUEST_AUTH_ID' => 0,
  'RBAC_ERROR_PAGE' => '/thinkphp/Public/error404.html',
  'RBAC_ROLE_TABLE' => 'tour_admin_role',
  'RBAC_USER_TABLE' => 'tour_admin_role_user',
  'RBAC_ACCESS_TABLE' => 'tour_admin_access',
  'RBAC_NODE_TABLE' => 'tour_admin_node',
  'DB_TYPE' => 'mysql',
  'DB_HOST' => '127.0.0.1',
  'DB_NAME' => 'tp5',
  'DB_USER' => 'root',
  'DB_PWD' => '',
  'DB_PORT' => '3306',
  'DB_PREFIX' => 'tour_',
);
?>