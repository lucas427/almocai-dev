<?php

$root_path = "../";
include("{$root_path}valida_secao.php");
valida_secao_tipo($root_path, ["ALUNO", "ADMINISTRADOR"]);

require_once("{$root_path}classes/UsuarioDao.class.php");
require_once("{$root_path}classes/SemanaCardapioDao.class.php");
require_once("{$root_path}classes/DiaAlmocoDao.class.php");
require_once("{$root_path}classes/AlimentoDao.class.php");
require_once("{$root_path}classes/Funcoes.class.php");
include("{$root_path}config.php");

date_default_timezone_set("America/Sao_Paulo");