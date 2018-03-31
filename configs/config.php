<?php
if (!defined('RAPIDLEECH')) {
	require_once('index.html');
	exit;
}

$options = array (
  'secretkey' => 'thi34seckex456frencryptfil4',
  'download_dir' => 'files/',
  'download_dir_is_changeable' => false,
  'delete_delay' => 1800.0,
  'rename_prefix' => '',
  'rename_suffix' => '',
  'rename_underscore' => true,
  'bw_save' => true,
  'file_size_limit' => 62000.0,
  'auto_download_disable' => false,
  'auto_upload_disable' => false,
  'notes_disable' => true,
  'upload_html_disable' => true,
  'myuploads_disable' => true,
  'login' => false,
  'users' => 
  array (
    'kplam' => '123456',
  ),
  'template_used' => 'neatblue',
  'default_language' => 'en',
  'show_all' => true,
  'server_info' => true,
  'ajax_refresh' => true,
  'new_window' => false,
  'new_window_js' => false,
  'flist_sort' => true,
  'flist_h_fixed' => false,
  'disable_actions' => false,
  'disable_deleting' => false,
  'disable_delete' => true,
  'disable_rename' => false,
  'disable_mass_rename' => true,
  'disable_mass_email' => true,
  'disable_email' => true,
  'disable_ftp' => true,
  'disable_upload' => true,
  'disable_merge' => false,
  'disable_split' => false,
  'disable_archive_compression' => false,
  'disable_tar' => true,
  'disable_zip' => false,
  'disable_unzip' => false,
  'disable_rar' => false,
  'disable_unrar' => false,
  'disable_hashing' => false,
  'disable_md5_change' => true,
  'disable_list' => true,
  'use_curl' => true,
  'redir' => true,
  'no_cache' => true,
  'ref_check' => true,
  '2gb_fix' => true,
  'forbidden_filetypes' => 
  array (
    0 => '.htaccess',
    1 => '.htpasswd',
    2 => '.php',
    3 => '.php3',
    4 => '.php4',
    5 => '.php5',
    6 => '.phtml',
    7 => '.asp',
    8 => '.aspx',
    9 => '.cgi',
  ),
  'forbidden_filetypes_block' => true,
  'rename_these_filetypes_to' => '.xxx',
  'check_these_before_unzipping' => true,
  'fgc' => 0,
); 

require_once('site_checker.php');
require_once('accounts.php');

$secretkey = $options['secretkey'];
?>
