<?php
  // ���o�͂̕����R�[�h��UTF-8�ɐݒ�
mb_http_output('UTF-8');
mb_internal_encoding('UTF-8');
  // �G���[��������HTTP�G���[�X�e�[�^�X���o��
set_error_handler(function(){ header('HTTP/1.1 503 Service Unavailable'); });
header('Content-Type: text/xml;charset=UTF-8');

$num = 20;  // ��x�Ɏ擾����ő匋�ʌ���
$page = $_REQUEST['page'] ?: 1; // �y�[�W�ԍ�

  // YouTube Data API�ɃA�N�Z�X���邽�߂̃p�����[�^���`
$params =array(
  'v' => 2,
  'q' => $_REQUEST['keywd'],
  'alt' => 'atom',
  'start-index' => ($page - 1)  * $num + 1,
  'max-results' => $num
);

  // YouTube Data API�ɃA�N�Z�X���邽�߂�URL������
$url = 'http://gdata.youtube.com/feeds/api/videos?'.http_build_query($params, '', '&');
  // YouTube Data API�ɃA�N�Z�X���A���ʂ��o��
print(file_get_contents($url));
