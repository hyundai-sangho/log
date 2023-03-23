<?php

require_once "log.php";

$log = new Log('error.log');
$log->write("치명적인 오류가 발생했습니다.");
$log = null;

$log = new Log('user.log');
$log->write("사용자명과 비밀번호가 일치하지 않습니다.");
$log->write("사용자명이 필요합니다.");
$log->write("비밀번호가 필요합니다.");
$log = null;
